<?php

namespace App\JsonApi\Hydrator\PanelRoom;

use App\Entity\PanelRoom;
use Doctrine\ORM\Query\Expr;
use Paknahad\JsonApiBundle\Hydrator\AbstractHydrator;
use Paknahad\JsonApiBundle\Hydrator\ValidatorTrait;
use Paknahad\JsonApiBundle\Exception\InvalidRelationshipValueException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use WoohooLabs\Yin\JsonApi\Exception\ExceptionFactoryInterface;
use WoohooLabs\Yin\JsonApi\Hydrator\Relationship\ToManyRelationship;
use WoohooLabs\Yin\JsonApi\Hydrator\Relationship\ToOneRelationship;
use WoohooLabs\Yin\JsonApi\Request\JsonApiRequestInterface;

/**
 * Abstract PanelRoom Hydrator.
 */
abstract class AbstractPanelRoomHydrator extends AbstractHydrator
{
    use ValidatorTrait;

    /**
     * {@inheritdoc}
     */
    protected function validateClientGeneratedId(
        string $clientGeneratedId,
        JsonApiRequestInterface $request,
        ExceptionFactoryInterface $exceptionFactory
    ): void {
        if (!empty($clientGeneratedId)) {
            throw $exceptionFactory->createClientGeneratedIdNotSupportedException($request, $clientGeneratedId);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function generateId(): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    protected function getAcceptedTypes(): array
    {
        return ['panel_rooms'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panelRoom): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function validateRequest(JsonApiRequestInterface $request): void
    {
        $this->validateFields($this->objectManager->getClassMetadata(PanelRoom::class), $request);
    }

    /**
     * {@inheritdoc}
     */
    protected function setId($panelRoom, string $id): void
    {
        if ($id && (string) $panelRoom->getId() !== $id) {
            throw new NotFoundHttpException('both ids in url & body must be the same');
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function getRelationshipHydrator($panelRoom): array
    {
        return [
            'panels' => function (PanelRoom $panelRoom, ToOneRelationship $panels, $data, $relationshipName) {
                $this->validateRelationType($panels, ['panels']);


                $association = null;
                $identifier = $panels->getResourceIdentifier();
                if ($identifier) {
                    $association = $this->objectManager->getRepository('App\Entity\Panel')
                        ->find($identifier->getId());

                    if (is_null($association)) {
                        throw new InvalidRelationshipValueException($relationshipName, [$identifier->getId()]);
                    }
                }

                $panelRoom->setPanels($association);
            },
            'room' => function (PanelRoom $panelRoom, ToManyRelationship $room, $data, $relationshipName) {
                $this->validateRelationType($room, ['rooms']);

                if (count($room->getResourceIdentifierIds()) > 0) {
                    $association = $this->objectManager->getRepository('App\Entity\Room')
                        ->createQueryBuilder('r')
                        ->where((new Expr())->in('r.id', $room->getResourceIdentifierIds()))
                        ->getQuery()
                        ->getResult();

                    $this->validateRelationValues($association, $room->getResourceIdentifierIds(), $relationshipName);
                } else {
                    $association = [];
                }

                if ($panelRoom->getRoom()->count() > 0) {
                    foreach ($panelRoom->getRoom() as $room) {
                        $panelRoom->removeRoom($room);
                    }
                }

                foreach ($association as $room) {
                    $panelRoom->addRoom($room);
                }
            },
        ];
    }
}

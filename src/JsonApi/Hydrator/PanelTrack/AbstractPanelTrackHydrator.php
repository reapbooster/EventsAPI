<?php

namespace App\JsonApi\Hydrator\PanelTrack;

use App\Entity\PanelTrack;
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
 * Abstract PanelTrack Hydrator.
 */
abstract class AbstractPanelTrackHydrator extends AbstractHydrator
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
        return ['panel_tracks'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panelTrack): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function validateRequest(JsonApiRequestInterface $request): void
    {
        $this->validateFields($this->objectManager->getClassMetadata(PanelTrack::class), $request);
    }

    /**
     * {@inheritdoc}
     */
    protected function setId($panelTrack, string $id): void
    {
        if ($id && (string) $panelTrack->getId() !== $id) {
            throw new NotFoundHttpException('both ids in url & body must be the same');
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function getRelationshipHydrator($panelTrack): array
    {
        return [
            'panel' => function (PanelTrack $panelTrack, ToManyRelationship $panel, $data, $relationshipName) {
                $this->validateRelationType($panel, ['panels']);

                if (count($panel->getResourceIdentifierIds()) > 0) {
                    $association = $this->objectManager->getRepository('App\Entity\Panel')
                        ->createQueryBuilder('p')
                        ->where((new Expr())->in('p.id', $panel->getResourceIdentifierIds()))
                        ->getQuery()
                        ->getResult();

                    $this->validateRelationValues($association, $panel->getResourceIdentifierIds(), $relationshipName);
                } else {
                    $association = [];
                }

                if ($panelTrack->getPanel()->count() > 0) {
                    foreach ($panelTrack->getPanel() as $panel) {
                        $panelTrack->removePanel($panel);
                    }
                }

                foreach ($association as $panel) {
                    $panelTrack->addPanel($panel);
                }
            },
            'track' => function (PanelTrack $panelTrack, ToOneRelationship $track, $data, $relationshipName) {
                $this->validateRelationType($track, ['tracks']);


                $association = null;
                $identifier = $track->getResourceIdentifier();
                if ($identifier) {
                    $association = $this->objectManager->getRepository('App\Entity\Track')
                        ->find($identifier->getId());

                    if (is_null($association)) {
                        throw new InvalidRelationshipValueException($relationshipName, [$identifier->getId()]);
                    }
                }

                $panelTrack->setTrack($association);
            },
        ];
    }
}

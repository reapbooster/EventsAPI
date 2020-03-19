<?php

namespace App\JsonApi\Hydrator\Panel;

use App\Entity\Panel;
use Paknahad\JsonApiBundle\Hydrator\AbstractHydrator;
use Paknahad\JsonApiBundle\Hydrator\ValidatorTrait;
use Paknahad\JsonApiBundle\Exception\InvalidRelationshipValueException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use WoohooLabs\Yin\JsonApi\Exception\ExceptionFactoryInterface;
use WoohooLabs\Yin\JsonApi\Hydrator\Relationship\ToOneRelationship;
use WoohooLabs\Yin\JsonApi\Request\JsonApiRequestInterface;

/**
 * Abstract Panel Hydrator.
 */
abstract class AbstractPanelHydrator extends AbstractHydrator
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
        return ['panels'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panel): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function validateRequest(JsonApiRequestInterface $request): void
    {
        $this->validateFields($this->objectManager->getClassMetadata(Panel::class), $request);
    }

    /**
     * {@inheritdoc}
     */
    protected function setId($panel, string $id): void
    {
        if ($id && (string) $panel->getId() !== $id) {
            throw new NotFoundHttpException('both ids in url & body must be the same');
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function getRelationshipHydrator($panel): array
    {
        return [
            'event' => function (Panel $panel, ToOneRelationship $event, $data, $relationshipName) {
                $this->validateRelationType($event, ['events']);


                $association = null;
                $identifier = $event->getResourceIdentifier();
                if ($identifier) {
                    $association = $this->objectManager->getRepository('App\Entity\Event')
                        ->find($identifier->getId());

                    if (is_null($association)) {
                        throw new InvalidRelationshipValueException($relationshipName, [$identifier->getId()]);
                    }
                }

                $panel->setEvent($association);
            },
        ];
    }
}

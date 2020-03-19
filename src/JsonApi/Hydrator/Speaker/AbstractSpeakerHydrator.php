<?php

namespace App\JsonApi\Hydrator\Speaker;

use App\Entity\Speaker;
use Paknahad\JsonApiBundle\Hydrator\AbstractHydrator;
use Paknahad\JsonApiBundle\Hydrator\ValidatorTrait;
use Paknahad\JsonApiBundle\Exception\InvalidRelationshipValueException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use WoohooLabs\Yin\JsonApi\Exception\ExceptionFactoryInterface;
use WoohooLabs\Yin\JsonApi\Hydrator\Relationship\ToOneRelationship;
use WoohooLabs\Yin\JsonApi\Request\JsonApiRequestInterface;

/**
 * Abstract Speaker Hydrator.
 */
abstract class AbstractSpeakerHydrator extends AbstractHydrator
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
        return ['speakers'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($speaker): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function validateRequest(JsonApiRequestInterface $request): void
    {
        $this->validateFields($this->objectManager->getClassMetadata(Speaker::class), $request);
    }

    /**
     * {@inheritdoc}
     */
    protected function setId($speaker, string $id): void
    {
        if ($id && (string) $speaker->getId() !== $id) {
            throw new NotFoundHttpException('both ids in url & body must be the same');
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function getRelationshipHydrator($speaker): array
    {
        return [
            'event' => function (Speaker $speaker, ToOneRelationship $event, $data, $relationshipName) {
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

                $speaker->setEvent($association);
            },
        ];
    }
}

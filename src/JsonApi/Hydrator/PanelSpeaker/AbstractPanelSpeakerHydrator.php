<?php

namespace App\JsonApi\Hydrator\PanelSpeaker;

use App\Entity\PanelSpeaker;
use Paknahad\JsonApiBundle\Hydrator\AbstractHydrator;
use Paknahad\JsonApiBundle\Hydrator\ValidatorTrait;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use WoohooLabs\Yin\JsonApi\Exception\ExceptionFactoryInterface;
use WoohooLabs\Yin\JsonApi\Request\JsonApiRequestInterface;

/**
 * Abstract PanelSpeaker Hydrator.
 */
abstract class AbstractPanelSpeakerHydrator extends AbstractHydrator
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
        return ['panel_speakers'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panelSpeaker): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function validateRequest(JsonApiRequestInterface $request): void
    {
        $this->validateFields($this->objectManager->getClassMetadata(PanelSpeaker::class), $request);
    }

    /**
     * {@inheritdoc}
     */
    protected function setId($panelSpeaker, string $id): void
    {
        if ($id && (string) $panelSpeaker->getId() !== $id) {
            throw new NotFoundHttpException('both ids in url & body must be the same');
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function getRelationshipHydrator($panelSpeaker): array
    {
        return [
        ];
    }
}

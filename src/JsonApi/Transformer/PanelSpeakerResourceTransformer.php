<?php

namespace App\JsonApi\Transformer;

use App\Entity\PanelSpeaker;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * PanelSpeaker Resource Transformer.
 */
class PanelSpeakerResourceTransformer extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType($panelSpeaker): string
    {
        return 'panel_speakers';
    }

    /**
     * {@inheritdoc}
     */
    public function getId($panelSpeaker): string
    {
        return (string) $panelSpeaker->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta($panelSpeaker): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks($panelSpeaker): ?ResourceLinks
    {
        return ResourceLinks::createWithBaseUri($this->request->getUri())->setSelf(new Link($this->getId($panelSpeaker)));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($panelSpeaker): array
    {
        return [
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($panelSpeaker): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($panelSpeaker): array
    {
        return [
        ];
    }
}

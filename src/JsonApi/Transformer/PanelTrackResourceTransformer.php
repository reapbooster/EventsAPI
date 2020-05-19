<?php

namespace App\JsonApi\Transformer;

use App\Entity\PanelSpeaker;
use App\Entity\PanelTrack;
use App\Utility\URLParser;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Relationship\ToManyRelationship;
use WoohooLabs\Yin\JsonApi\Schema\Relationship\ToOneRelationship;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * PanelTrack Resource Transformer.
 */
class PanelTrackResourceTransformer extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType($panelTrack): string
    {
        return 'panel_tracks';
    }

    /**
     * {@inheritdoc}
     */
    public function getId($panelTrack): string
    {
        return (string) $panelTrack->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta($panelTrack): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks($panelTrack): ?ResourceLinks
    {
      $url = new URLParser($this->request->getUri());
      return ResourceLinks::createWithBaseUri($url->getThisURI())
        ->setSelf(new Link($panelTrack->getId()));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($panelTrack): array
    {
      return [
        'panel_id' => function (PanelTrack $panelTrack) {
          return $panelTrack->getPanelId();
        },
        'track_id' => function (PanelTrack $panelTrack) {
          return $panelTrack->getTrackId();
        },
      ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($panelTrack): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($panelTrack): array
    {
        return [
            'panel' => function (PanelTrack $panelTrack) {
                return ToManyRelationship::create()
                    ->setDataAsCallable(
                        function () use ($panelTrack) {
                            return $panelTrack->getPanel();
                        },
                        new PanelResourceTransformer()
                    )
                    ->omitDataWhenNotIncluded();
            },
            'track' => function (PanelTrack $panelTrack) {
                return ToOneRelationship::create()
                    ->setDataAsCallable(
                        function () use ($panelTrack) {
                            return $panelTrack->getTrack();
                        },
                        new TrackResourceTransformer()
                    )
                    ->omitDataWhenNotIncluded();
            },
        ];
    }
}

<?php

namespace App\JsonApi\Transformer;

use App\Entity\Panel;
use App\Entity\PanelSpeaker;
use App\Utility\URLParser;
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
      $url = new URLParser($this->request->getUri());
      $toReturn = ResourceLinks::createWithBaseUri($url->getUriNoPath())
        ->setSelf(new Link('/jsonapi/panel/speakers/'. $panelSpeaker->getId()));
      if ($panelSpeaker instanceof PanelSpeaker) {
        if ($panelSpeaker->getPanelId()) {
          $toReturn->setLink('panel', new Link($panelSpeaker->getPanelUrl()));
        }
        if ($panelSpeaker->getSpeakerId()) {
          $toReturn->setLink('speaker', new Link($panelSpeaker->getSpeakerUrl()));
        }
      }
        return $toReturn;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($panelSpeaker): array
    {
        return [
          'panel_id' => function (PanelSpeaker $panelSpeaker) {
            return $panelSpeaker->getPanelId();
          },
          'speaker_id' => function (PanelSpeaker $panelSpeaker)  {
            return $panelSpeaker->getSpeakerId();
          },
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

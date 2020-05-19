<?php

namespace App\JsonApi\Transformer;

use App\Entity\PanelRoom;
use App\Utility\URLParser;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Relationship\ToManyRelationship;
use WoohooLabs\Yin\JsonApi\Schema\Relationship\ToOneRelationship;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * PanelRoom Resource Transformer.
 */
class PanelRoomResourceTransformer extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType($panelRoom): string
    {
        return 'panel_rooms';
    }

    /**
     * {@inheritdoc}
     */
    public function getId($panelRoom): string
    {
        return (string) $this->object->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta($panelRoom): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks($panelRoom): ?ResourceLinks
    {
      $url = new URLParser($this->request->getUri());
      return ResourceLinks::createWithBaseUri($url->getBaseURI())
        ->setSelf(new Link($panelRoom->getPanelId()));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($panelRoom): array
    {
        return [
            'panel_id' => function(PanelRoom $panelRoom) {
              return $panelRoom->getPanelId();
            },
            'room_id' => function(PanelRoom $panelRoom) {
              return $panelRoom->getRoomId();
            },
            'type' => function (PanelRoom $panelRoom) {
                return $panelRoom->getType();
            },
            'datecreated' => function (PanelRoom $panelRoom) {
                return $panelRoom->getDatecreated();
            },
            'datemodified' => function (PanelRoom $panelRoom) {
                return $panelRoom->getDatemodified();
            },
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($panelRoom): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($panelRoom): array
    {
        return [ ];
    }
}

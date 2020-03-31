<?php

namespace App\JsonApi\Transformer;

use App\Entity\PanelRoom;
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
        return (string) $panelRoom->getId();
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
        return ResourceLinks::createWithoutBaseUri()->setSelf(new Link('/jsonapi/panel/rooms/'.$this->getId($panelRoom)));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($panelRoom): array
    {
        return [
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
        return [
            'panels' => function (PanelRoom $panelRoom) {
                return ToOneRelationship::create()
                    ->setDataAsCallable(
                        function () use ($panelRoom) {
                            return $panelRoom->getPanels();
                        },
                        new PanelResourceTransformer()
                    )
                    ->omitDataWhenNotIncluded();
            },
            'room' => function (PanelRoom $panelRoom) {
                return ToManyRelationship::create()
                    ->setDataAsCallable(
                        function () use ($panelRoom) {
                            return $panelRoom->getRoom();
                        },
                        new RoomResourceTransformer()
                    )
                    ->omitDataWhenNotIncluded();
            },
        ];
    }
}

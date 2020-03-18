<?php

namespace App\JsonApi\Transformer;

use App\Entity\Room;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * Room Resource Transformer.
 */
class RoomResourceTransformer extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType($room): string
    {
        return 'rooms';
    }

    /**
     * {@inheritdoc}
     */
    public function getId($room): string
    {
        return (string) $room->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta($room): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks($room): ?ResourceLinks
    {
        return ResourceLinks::createWithoutBaseUri()->setSelf(new Link('/rooms/'.$this->getId($room)));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($room): array
    {
        return [
            'rName' => function (Room $room) {
                return $room->getRName();
            },
            'schoolhousecap' => function (Room $room) {
                return $room->getSchoolhousecap();
            },
            'roundscap' => function (Room $room) {
                return $room->getRoundscap();
            },
            'theatercap' => function (Room $room) {
                return $room->getTheatercap();
            },
            'hollowSquare' => function (Room $room) {
                return $room->getHollowSquare();
            },
            'conference' => function (Room $room) {
                return $room->getConference();
            },
            'notes' => function (Room $room) {
                return $room->getNotes();
            },
            'sortOrder' => function (Room $room) {
                return $room->getSortOrder();
            },
            'roomGroup' => function (Room $room) {
                return $room->getRoomGroup();
            },
            'datecreated' => function (Room $room) {
                return $room->getDatecreated();
            },
            'datemodified' => function (Room $room) {
                return $room->getDatemodified();
            },
            'eventType' => function (Room $room) {
                return $room->getEventType();
            },
            'lounge' => function (Room $room) {
                return $room->getLounge();
            },
            'reception' => function (Room $room) {
                return $room->getReception();
            },
            'tour' => function (Room $room) {
                return $room->getTour();
            },
            'hollowCircle' => function (Room $room) {
                return $room->getHollowCircle();
            },
            'uShape' => function (Room $room) {
                return $room->getUShape();
            },
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($room): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($room): array
    {
        return [
        ];
    }
}

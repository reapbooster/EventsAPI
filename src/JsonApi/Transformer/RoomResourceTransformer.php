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

        return ResourceLinks::createWithBaseUri($this->request->getUri())->setSelf(new Link($this->getId($room)));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($room): array
    {
        return [
            'rname' => function (Room $room) {
                return $room->getRname();
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
            'hollowsquare' => function (Room $room) {
                return $room->getHollowsquare();
            },
            'conference' => function (Room $room) {
                return $room->getConference();
            },
            'notes' => function (Room $room) {
                return $room->getNotes();
            },
            'sortorder' => function (Room $room) {
                return $room->getSortorder();
            },
            'roomgroup' => function (Room $room) {
                return $room->getRoomgroup();
            },
            'datecreated' => function (Room $room) {
                return ($room->getDatecreated()) ? $room->getDatecreated()->format(DATE_ATOM) : NULL;
            },
            'datemodified' => function (Room $room) {
                return ($room->getDatemodified()) ? $room->getDatemodified()->format(DATE_ATOM) : NULL;
            },
            'eventtype' => function (Room $room) {
                return $room->getEventtype();
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
            'hollowcircle' => function (Room $room) {
                return $room->getHollowcircle();
            },
            'ushape' => function (Room $room) {
                return $room->getUshape();
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

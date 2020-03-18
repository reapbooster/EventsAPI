<?php

namespace App\JsonApi\Hydrator\Room;

use App\Entity\Room;

/**
 * Create Room Hydrator.
 */
class CreateRoomHydrator extends AbstractRoomHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($room): array
    {
        return [
            'rName' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setRName($attribute);
            },
            'schoolhousecap' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setSchoolhousecap($attribute);
            },
            'roundscap' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setRoundscap($attribute);
            },
            'theatercap' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setTheatercap($attribute);
            },
            'hollowSquare' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setHollowSquare($attribute);
            },
            'conference' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setConference($attribute);
            },
            'notes' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setNotes($attribute);
            },
            'sortOrder' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setSortOrder($attribute);
            },
            'roomGroup' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setRoomGroup($attribute);
            },
            'datecreated' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setDatecreated($attribute);
            },
            'datemodified' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setDatemodified($attribute);
            },
            'eventType' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setEventType($attribute);
            },
            'lounge' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setLounge($attribute);
            },
            'reception' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setReception($attribute);
            },
            'tour' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setTour($attribute);
            },
            'hollowCircle' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setHollowCircle($attribute);
            },
            'uShape' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setUShape($attribute);
            },
        ];
    }
}

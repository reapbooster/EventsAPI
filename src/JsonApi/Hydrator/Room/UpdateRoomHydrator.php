<?php

namespace App\JsonApi\Hydrator\Room;

use App\Entity\Room;

/**
 * Update Room Hydrator.
 */
class UpdateRoomHydrator extends AbstractRoomHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($room): array
    {
        return [
            'rname' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setRname($attribute);
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
            'hollowsquare' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setHollowsquare($attribute);
            },
            'conference' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setConference($attribute);
            },
            'notes' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setNotes($attribute);
            },
            'sortorder' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setSortorder($attribute);
            },
            'roomgroup' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setRoomgroup($attribute);
            },
            'datecreated' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setDatecreated(new \DateTime($attribute));
            },
            'datemodified' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setDatemodified(new \DateTime($attribute));
            },
            'eventtype' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setEventtype($attribute);
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
            'hollowcircle' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setHollowcircle($attribute);
            },
            'ushape' => function (Room $room, $attribute, $data, $attributeName) {
                $room->setUshape($attribute);
            },
        ];
    }
}

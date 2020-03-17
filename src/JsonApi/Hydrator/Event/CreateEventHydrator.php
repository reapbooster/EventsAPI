<?php

namespace App\JsonApi\Hydrator\Event;

use App\Entity\Event;

/**
 * Create Event Hydrator.
 */
class CreateEventHydrator extends AbstractEventHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($event): array
    {
        return [
            'EventID' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setEventID($attribute);
            },
            'Name' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setName($attribute);
            },
            'nameShort' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setNameShort($attribute);
            },
            'Type' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setType($attribute);
            },
            'Description' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDescription($attribute);
            },
        ];
    }
}

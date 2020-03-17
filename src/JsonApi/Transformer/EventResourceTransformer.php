<?php

namespace App\JsonApi\Transformer;

use App\Entity\Event;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * Event Resource Transformer.
 */
class EventResourceTransformer extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType($event): string
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function getId($event): string
    {
        return (string) $event->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta($event): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks($event): ?ResourceLinks
    {
        return ResourceLinks::createWithoutBaseUri()->setSelf(new Link('/events/'.$this->getId($event)));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($event): array
    {
        return [
            'EventID' => function (Event $event) {
                return $event->getEventID();
            },
            'Name' => function (Event $event) {
                return $event->getName();
            },
            'nameShort' => function (Event $event) {
                return $event->getNameShort();
            },
            'Type' => function (Event $event) {
                return $event->getType();
            },
            'Description' => function (Event $event) {
                return $event->getDescription();
            },
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($event): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($event): array
    {
        return [
        ];
    }
}

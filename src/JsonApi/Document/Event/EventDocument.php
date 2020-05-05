<?php

namespace App\JsonApi\Document\Event;

use WoohooLabs\Yin\JsonApi\Schema\Document\AbstractSingleResourceDocument;
use WoohooLabs\Yin\JsonApi\Schema\JsonApiObject;
use WoohooLabs\Yin\JsonApi\Schema\Link\DocumentLinks;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;

/**
 * Event Document.
 */
class EventDocument extends AbstractSingleResourceDocument
{
    /**
     * {@inheritdoc}
     */
    public function getJsonApi(): ?JsonApiObject
    {
        return new JsonApiObject('1.0');
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta(): array
    {
      return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks(): ?DocumentLinks
    {
        return DocumentLinks::createWithBaseUri(
          $this->request->getUri(),
            [
                'self' => new Link($this->getResourceId()),
            ]
        );
    }
}

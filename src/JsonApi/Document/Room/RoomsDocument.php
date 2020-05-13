<?php

namespace App\JsonApi\Document\Room;

use App\Utility\URLParser;
use WoohooLabs\Yin\JsonApi\Schema\Document\AbstractCollectionDocument;
use WoohooLabs\Yin\JsonApi\Schema\JsonApiObject;
use WoohooLabs\Yin\JsonApi\Schema\Link\DocumentLinks;

/**
 * Rooms Document.
 */
class RoomsDocument extends AbstractCollectionDocument {

  /**
   * {@inheritdoc}
   */
  public function getJsonApi(): ?JsonApiObject {
    return new JsonApiObject('1.0');
  }

  /**
   * {@inheritdoc}
   */
  public function getMeta(): array {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLinks(): ?DocumentLinks {
    $url = new URLParser($this->request->getUri());
    return DocumentLinks::createWithBaseUri($url->getBaseURI())
      ->setPagination('/rooms', $this->object);
  }

}

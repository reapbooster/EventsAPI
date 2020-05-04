<?php

namespace App\JsonApi\Document\Speaker;

use WoohooLabs\Yin\JsonApi\Schema\Document\AbstractSingleResourceDocument;
use WoohooLabs\Yin\JsonApi\Schema\JsonApiObject;
use WoohooLabs\Yin\JsonApi\Schema\Link\DocumentLinks;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;

/**
 * Speaker Document.
 */
class SpeakerDocument extends AbstractSingleResourceDocument {

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
    $uri = $this->request->getUri()->withPath("");
    return DocumentLinks::createWithBaseUri(
      $uri,
      [
        'self' => new Link('/jsonapi/speakers/' . $this->getResourceId()),
      ]
    );
  }

}

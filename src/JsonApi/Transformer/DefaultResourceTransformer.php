<?php

namespace App\JsonApi\Transformer;

use App\Utility\URLParser;
use Symfony\Component\Routing\Route;
use WoohooLabs\Yin\JsonApi\Schema\Link\DocumentLinks;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

class DefaultResourceTransformer extends AbstractResource {

  public function getType($object): string {
    $type = 'default';
    if (isset($object['id']) && strpos($object['id'], "_index") !== FALSE) {
      $type = str_replace("_index", "", $object['id']);
    }
    return $type;
  }

  public function getId($object): string {
    if (isset($object['id'])) {
      return $object['id'];
    }
    return uniqid();
  }

  public function getMeta($object): array {
    return [];
  }

  public function getLinks($object): ?ResourceLinks {
    $url = new URLParser($this->request->getUri());

    return ResourceLinks::createWithBaseUri($url->getUriNoPath())
      ->setLink("href", new Link($object['route']->getPath()));
  }

  public function getAttributes($object): array {
    return [];
  }

  public function getDefaultIncludedRelationships($object): array {
   return [];
  }

  public function getRelationships($object): array {
    return [];
  }

}

<?php

namespace App\JsonApi\Transformer;

use WoohooLabs\Yin\JsonApi\Schema\Link\DocumentLinks;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

class DefaultResourceTransformer extends AbstractResource {

  public function getType($object): string {
    return 'default';
  }

  public function getId($object): string {
    return "";
  }

  public function getMeta($object): array {
    return [];
  }

  public function getLinks($object): ?ResourceLinks {
    // TODO: Use $object to derive this.
    print_r($object);
    exit();
    return ResourceLinks::createWithBaseUri( '/jsonapi/', new Link($object->name));
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

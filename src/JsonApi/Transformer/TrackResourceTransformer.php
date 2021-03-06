<?php

namespace App\JsonApi\Transformer;

use App\Entity\Track;
use App\Utility\URLParser;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * Track Resource Transformer.
 */
class TrackResourceTransformer extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType($track): string
    {
        return 'tracks';
    }

    /**
     * {@inheritdoc}
     */
    public function getId($track): string
    {
        return (string) $track->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta($track): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks($track): ?ResourceLinks
    {

      $url = new URLParser($this->request->getUri());
      $id = $track->getId();
      if (!empty($id) && !empty($url)) {
        $thisUri = str_replace($id, "", $url->getThisURI());
        return ResourceLinks::createWithBaseUri($thisUri)
          ->setSelf(new Link($id));
      }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($track): array
    {
        return [
            'trackname' => function (Track $track) {
                return $track->getTrackname();
            },
            'trackdescription' => function (Track $track) {
                return $track->getTrackdescription();
            },
            'eventId' => function (Track $track) {
                return $track->getEventId();
            },
            'datecreated' => function (Track $track) {
                return $track->getDatecreated()->format(DATE_ATOM);
            },
            'datemodified' => function (Track $track) {
                return $track->getDatemodified()->format(DATE_ATOM);
            },
            'tracktype' => function (Track $track) {
                return $track->getTracktype();
            },
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($track): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($track): array
    {
        return [
        ];
    }
}

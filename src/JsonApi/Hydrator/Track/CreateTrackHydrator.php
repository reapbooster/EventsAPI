<?php

namespace App\JsonApi\Hydrator\Track;

use App\Entity\Track;

/**
 * Create Track Hydrator.
 */
class CreateTrackHydrator extends AbstractTrackHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($track): array
    {
        return [
            'trackName' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setTrackName($attribute);
            },
            'trackDescription' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setTrackDescription($attribute);
            },
            'event_ID' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setEventID($attribute);
            },
            'datecreated' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setDatecreated(new \DateTime($attribute));
            },
            'datemodified' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setDatemodified(new \DateTime($attribute));
            },
            'tracktype' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setTracktype($attribute);
            },
        ];
    }
}

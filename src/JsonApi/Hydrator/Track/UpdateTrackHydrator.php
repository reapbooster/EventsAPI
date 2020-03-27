<?php

namespace App\JsonApi\Hydrator\Track;

use App\Entity\Track;

/**
 * Update Track Hydrator.
 */
class UpdateTrackHydrator extends AbstractTrackHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($track): array
    {
        return [
            'trackname' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setTrackname($attribute);
            },
            'trackdescription' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setTrackdescription($attribute);
            },
            'eventId' => function (Track $track, $attribute, $data, $attributeName) {
                $track->setEventId($attribute);
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

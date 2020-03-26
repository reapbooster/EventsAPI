<?php

namespace App\JsonApi\Hydrator\PanelTrack;

use App\Entity\PanelTrack;

/**
 * Create PanelTrack Hydrator.
 */
class CreatePanelTrackHydrator extends AbstractPanelTrackHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panelTrack): array
    {
        return [
        ];
    }
}

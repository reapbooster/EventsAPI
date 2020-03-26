<?php

namespace App\JsonApi\Hydrator\PanelSpeaker;

use App\Entity\PanelSpeaker;

/**
 * Update PanelSpeaker Hydrator.
 */
class UpdatePanelSpeakerHydrator extends AbstractPanelSpeakerHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panelSpeaker): array
    {
        return [
        ];
    }
}

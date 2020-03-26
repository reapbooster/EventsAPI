<?php

namespace App\JsonApi\Hydrator\PanelSpeaker;

use App\Entity\PanelSpeaker;

/**
 * Create PanelSpeaker Hydrator.
 */
class CreatePanelSpeakerHydrator extends AbstractPanelSpeakerHydrator
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

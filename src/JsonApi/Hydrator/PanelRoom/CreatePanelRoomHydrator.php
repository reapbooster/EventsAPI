<?php

namespace App\JsonApi\Hydrator\PanelRoom;

use App\Entity\PanelRoom;

/**
 * Create PanelRoom Hydrator.
 */
class CreatePanelRoomHydrator extends AbstractPanelRoomHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panelRoom): array
    {
        return [
            'type' => function (PanelRoom $panelRoom, $attribute, $data, $attributeName) {
                $panelRoom->setType($attribute);
            },
            'datecreated' => function (PanelRoom $panelRoom, $attribute, $data, $attributeName) {
                $panelRoom->setDatecreated($attribute);
            },
            'datemodified' => function (PanelRoom $panelRoom, $attribute, $data, $attributeName) {
                $panelRoom->setDatemodified($attribute);
            },
        ];
    }
}

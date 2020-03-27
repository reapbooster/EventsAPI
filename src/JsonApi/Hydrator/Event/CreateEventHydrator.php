<?php

namespace App\JsonApi\Hydrator\Event;

use App\Entity\Event;

/**
 * Create Event Hydrator.
 */
class CreateEventHydrator extends AbstractEventHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($event): array
    {
        return [
            'eventid' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setEventid($attribute);
            },
            'name' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setName($attribute);
            },
            'nameshort' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setNameshort($attribute);
            },
            'type' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setType($attribute);
            },
            'description' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDescription($attribute);
            },
            'titlelogo' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setTitlelogo($attribute);
            },
            'file1' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setFile1($attribute);
            },
            'file2' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setFile2($attribute);
            },
            'file3' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setFile3($attribute);
            },
            'file4' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setFile4($attribute);
            },
            'doc1' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDoc1($attribute);
            },
            'doc2' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDoc2($attribute);
            },
            'doc3' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDoc3($attribute);
            },
            'doc4' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDoc4($attribute);
            },
            'moy' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setMoy($attribute);
            },
            'dom' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDom($attribute);
            },
            'year' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setYear($attribute);
            },
            'eMoy' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setEMoy($attribute);
            },
            'eDom' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setEDom($attribute);
            },
            'eYear' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setEYear($attribute);
            },
            'etime' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setEtime($attribute);
            },
            'venue' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setVenue($attribute);
            },
            'speakers' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setSpeakers($attribute);
            },
            'hpshow' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setHpshow($attribute);
            },
            'mihpshow' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setMihpshow($attribute);
            },
            'blurb' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setBlurb($attribute);
            },
            'publish' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setPublish($attribute);
            },
            'regdeadmoy' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setRegdeadmoy($attribute);
            },
            'regdeaddom' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setRegdeaddom($attribute);
            },
            'regdeadyear' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setRegdeadyear($attribute);
            },
            'caldisplay' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setCaldisplay($attribute);
            },
            'picture' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setPicture($attribute);
            },
            'eventprice' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setEventprice($attribute);
            },
            'confirmationemail' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setConfirmationemail($attribute);
            },
            'confirmationweb' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setConfirmationweb($attribute);
            },
            'datecreated' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDatecreated(new \DateTime($attribute));
            },
            'datemodified' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDatemodified(new \DateTime($attribute));
            },
            'dateevent' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDateevent(new \DateTime($attribute));
            },
            'splashpage' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setSplashpage($attribute);
            },
            'splashurl' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setSplashurl($attribute);
            },
            'dateasnum' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setDateasnum($attribute);
            },
            'campaignname' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setCampaignname($attribute);
            },
            'campaignid' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setCampaignid($attribute);
            },
            'campaigntype' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setCampaigntype($attribute);
            },
            'campaignowner' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setCampaignowner($attribute);
            },
            'campaigntypepublic' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setCampaigntypepublic($attribute);
            },
            'cventid' => function (Event $event, $attribute, $data, $attributeName) {
                $event->setCventid($attribute);
            },
        ];
    }
}

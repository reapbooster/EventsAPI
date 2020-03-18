<?php

namespace App\JsonApi\Hydrator\Speaker;

use App\Entity\Speaker;

/**
 * Create Speaker Hydrator.
 */
class CreateSpeakerHydrator extends AbstractSpeakerHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($speaker): array
    {
        return [
            'saluation' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSaluation($attribute);
            },
            'SpkrNm' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpkrNm($attribute);
            },
            'Mname' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setMname($attribute);
            },
            'Lname' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setLname($attribute);
            },
            'suffix' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSuffix($attribute);
            },
            'Description' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDescription($attribute);
            },
            'BioLink' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setBioLink($attribute);
            },
            'bioPic' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setBioPic($attribute);
            },
            'BioText' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setBioText($attribute);
            },
            'speakertype' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpeakertype($attribute);
            },
            'Status' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setStatus($attribute);
            },
            'PgTitle' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPgTitle($attribute);
            },
            'EventID' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setEventID($attribute);
            },
            'sortorder' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSortorder($attribute);
            },
            'cancelled' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setCancelled($attribute);
            },
            'rawFileType' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRawFileType($attribute);
            },
            'printFileType' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPrintFileType($attribute);
            },
            'WebFileType' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWebFileType($attribute);
            },
            'notes' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setNotes($attribute);
            },
            'datecreated' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDatecreated(new \DateTime($attribute));
            },
            'datemodified' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDatemodified(new \DateTime($attribute));
            },
            'createdbyID' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setCreatedbyID($attribute);
            },
            'modifiedbyID' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setModifiedbyID($attribute);
            },
            'ipnum' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setIpnum($attribute);
            },
            'attendeeID' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setAttendeeID($attribute);
            },
            'panelID' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPanelID($attribute);
            },
            'whoSuggested' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWhoSuggested($attribute);
            },
            'whoEntered' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWhoEntered($attribute);
            },
            'dateSuggested' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDateSuggested(new \DateTime($attribute));
            },
            'recBio' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecBio($attribute);
            },
            'recBioDate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecBioDate($attribute);
            },
            'recPhoto' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecPhoto($attribute);
            },
            'recPhotoDate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecPhotoDate(new \DateTime($attribute));
            },
            'recWaiverDate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecWaiverDate(new \DateTime($attribute));
            },
            'spkEmail' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpkEmail($attribute);
            },
            'twitter' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setTwitter($attribute);
            },
            'twitter2' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setTwitter2($attribute);
            },
            'twitterNotes' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setTwitterNotes($attribute);
            },
            'invitationextend' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setInvitationextend($attribute);
            },
            'invitationWhom' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setInvitationWhom($attribute);
            },
            'spidermaldate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpidermaldate(new \DateTime($attribute));
            },
            'whoconfirmed' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWhoconfirmed($attribute);
            },
            'city' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setCity($attribute);
            },
            'developmentPriority' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDevelopmentPriority($attribute);
            },
            'speakerRole' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpeakerRole($attribute);
            },
            'speakerTopics' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpeakerTopics($attribute);
            },
            'primaryTrack' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPrimaryTrack($attribute);
            },
            'secondaryTrack' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSecondaryTrack($attribute);
            },
            'topicNotes' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setTopicNotes($attribute);
            },
            'connections' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setConnections($attribute);
            },
            'devRelationship' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDevRelationship($attribute);
            },
            'devRelationContact' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDevRelationContact($attribute);
            },
            'womensreport' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWomensreport($attribute);
            },
            'location' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setLocation($attribute);
            },
            'photoModDate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPhotoModDate($attribute);
            },
            'displayChinese' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDisplayChinese($attribute);
            },
            'devOrganization' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDevOrganization($attribute);
            },
            'roleChangedate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRoleChangedate(new \DateTime($attribute));
            },
            'cVentID' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setCVentID($attribute);
            },
            'phoneticName' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPhoneticName($attribute);
            },
            'needsfinaledit' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setNeedsfinaledit($attribute);
            },
            'scheduleNotes' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setScheduleNotes($attribute);
            },
            'linkedin' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setLinkedin($attribute);
            },
            'speakerLiaison' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpeakerLiaison($attribute);
            },
            'Facebook' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setFacebook($attribute);
            },
            'FacebookFollowers' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setFacebookFollowers($attribute);
            },
            'salesForceID' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSalesForceID($attribute);
            },
            'instaGram' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setInstaGram($attribute);
            },
        ];
    }
}

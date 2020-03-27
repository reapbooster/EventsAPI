<?php

namespace App\JsonApi\Hydrator\Speaker;

use App\Entity\Speaker;

/**
 * Update Speaker Hydrator.
 */
class UpdateSpeakerHydrator extends AbstractSpeakerHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($speaker): array
    {
        return [
            'salutation' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSalutation($attribute);
            },
            'spkrnm' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpkrnm($attribute);
            },
            'mname' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setMname($attribute);
            },
            'lname' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setLname($attribute);
            },
            'suffix' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSuffix($attribute);
            },
            'description' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDescription($attribute);
            },
            'biolink' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setBiolink($attribute);
            },
            'biopic' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setBiopic($attribute);
            },
            'biotext' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setBiotext($attribute);
            },
            'speakertype' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpeakertype($attribute);
            },
            'status' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setStatus($attribute);
            },
            'pgid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPgid($attribute);
            },
            'pgtitle' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPgtitle($attribute);
            },
            'eventid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setEventid($attribute);
            },
            'sortorder' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSortorder($attribute);
            },
            'cancelled' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setCancelled($attribute);
            },
            'rawfiletype' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRawfiletype($attribute);
            },
            'printfiletype' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPrintfiletype($attribute);
            },
            'webfiletype' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWebfiletype($attribute);
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
            'createdbyid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setCreatedbyid($attribute);
            },
            'modifiedbyid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setModifiedbyid($attribute);
            },
            'ipnum' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setIpnum($attribute);
            },
            'attendeeid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setAttendeeid($attribute);
            },
            'contactid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setContactid($attribute);
            },
            'panelid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPanelid($attribute);
            },
            'whosuggested' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWhosuggested($attribute);
            },
            'whoentered' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWhoentered($attribute);
            },
            'datesuggested' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDatesuggested(new \DateTime($attribute));
            },
            'recbio' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecbio($attribute);
            },
            'recbiodate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecbiodate(new \DateTime($attribute));
            },
            'recphoto' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecphoto($attribute);
            },
            'recphotodate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecphotodate(new \DateTime($attribute));
            },
            'recwaiver' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecwaiver($attribute);
            },
            'recwaiverdate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRecwaiverdate(new \DateTime($attribute));
            },
            'spkemail' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpkemail($attribute);
            },
            'twitter' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setTwitter($attribute);
            },
            'twitter2' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setTwitter2($attribute);
            },
            'twitternotes' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setTwitternotes($attribute);
            },
            'invitationextend' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setInvitationextend($attribute);
            },
            'invitationwhom' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setInvitationwhom($attribute);
            },
            'spideremaildate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpideremaildate($attribute);
            },
            'whoconfirmed' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWhoconfirmed($attribute);
            },
            'city' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setCity($attribute);
            },
            'developmentpriority' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDevelopmentpriority($attribute);
            },
            'speakerrole' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpeakerrole($attribute);
            },
            'speakertopics' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpeakertopics($attribute);
            },
            'primarytrack' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPrimarytrack($attribute);
            },
            'secondarytrack' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSecondarytrack($attribute);
            },
            'topicnotes' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setTopicnotes($attribute);
            },
            'connections' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setConnections($attribute);
            },
            'devrelationship' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDevrelationship($attribute);
            },
            'devrelationcontact' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDevrelationcontact($attribute);
            },
            'womensreport' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setWomensreport($attribute);
            },
            'location' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setLocation($attribute);
            },
            'photomoddate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPhotomoddate(new \DateTime($attribute));
            },
            'displaychinese' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDisplaychinese($attribute);
            },
            'devorganization' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setDevorganization($attribute);
            },
            'rolechangedate' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setRolechangedate(new \DateTime($attribute));
            },
            'cventid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setCventid($attribute);
            },
            'phoneticname' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setPhoneticname($attribute);
            },
            'needsfinaledit' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setNeedsfinaledit($attribute);
            },
            'schedulenotes' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSchedulenotes($attribute);
            },
            'showflownotes' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setShowflownotes($attribute);
            },
            'linkedin' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setLinkedin($attribute);
            },
            'speakerliaison' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSpeakerliaison($attribute);
            },
            'facebook' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setFacebook($attribute);
            },
            'facebookfollowers' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setFacebookfollowers($attribute);
            },
            'salesforceid' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setSalesforceid($attribute);
            },
            'instagram' => function (Speaker $speaker, $attribute, $data, $attributeName) {
                $speaker->setInstagram($attribute);
            },
        ];
    }
}

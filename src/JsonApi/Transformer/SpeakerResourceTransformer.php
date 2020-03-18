<?php

namespace App\JsonApi\Transformer;

use App\Entity\Speaker;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * Speaker Resource Transformer.
 */
class SpeakerResourceTransformer extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType($speaker): string
    {
        return 'speakers';
    }

    /**
     * {@inheritdoc}
     */
    public function getId($speaker): string
    {
        return (string) $speaker->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta($speaker): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks($speaker): ?ResourceLinks
    {
        return ResourceLinks::createWithoutBaseUri()->setSelf(new Link('/speakers/'.$this->getId($speaker)));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($speaker): array
    {
        return [
            'saluation' => function (Speaker $speaker) {
                return $speaker->getSaluation();
            },
            'SpkrNm' => function (Speaker $speaker) {
                return $speaker->getSpkrNm();
            },
            'Mname' => function (Speaker $speaker) {
                return $speaker->getMname();
            },
            'Lname' => function (Speaker $speaker) {
                return $speaker->getLname();
            },
            'suffix' => function (Speaker $speaker) {
                return $speaker->getSuffix();
            },
            'Description' => function (Speaker $speaker) {
                return $speaker->getDescription();
            },
            'BioLink' => function (Speaker $speaker) {
                return $speaker->getBioLink();
            },
            'bioPic' => function (Speaker $speaker) {
                return $speaker->getBioPic();
            },
            'BioText' => function (Speaker $speaker) {
                return $speaker->getBioText();
            },
            'speakertype' => function (Speaker $speaker) {
                return $speaker->getSpeakertype();
            },
            'Status' => function (Speaker $speaker) {
                return $speaker->getStatus();
            },
            'PgTitle' => function (Speaker $speaker) {
                return $speaker->getPgTitle();
            },
            'EventID' => function (Speaker $speaker) {
                return $speaker->getEventID();
            },
            'sortorder' => function (Speaker $speaker) {
                return $speaker->getSortorder();
            },
            'cancelled' => function (Speaker $speaker) {
                return $speaker->getCancelled();
            },
            'rawFileType' => function (Speaker $speaker) {
                return $speaker->getRawFileType();
            },
            'printFileType' => function (Speaker $speaker) {
                return $speaker->getPrintFileType();
            },
            'WebFileType' => function (Speaker $speaker) {
                return $speaker->getWebFileType();
            },
            'notes' => function (Speaker $speaker) {
                return $speaker->getNotes();
            },
            'datecreated' => function (Speaker $speaker) {
                return $speaker->getDatecreated()->format(DATE_ATOM);
            },
            'datemodified' => function (Speaker $speaker) {
                return $speaker->getDatemodified()->format(DATE_ATOM);
            },
            'createdbyID' => function (Speaker $speaker) {
                return $speaker->getCreatedbyID();
            },
            'modifiedbyID' => function (Speaker $speaker) {
                return $speaker->getModifiedbyID();
            },
            'ipnum' => function (Speaker $speaker) {
                return $speaker->getIpnum();
            },
            'attendeeID' => function (Speaker $speaker) {
                return $speaker->getAttendeeID();
            },
            'panelID' => function (Speaker $speaker) {
                return $speaker->getPanelID();
            },
            'whoSuggested' => function (Speaker $speaker) {
                return $speaker->getWhoSuggested();
            },
            'whoEntered' => function (Speaker $speaker) {
                return $speaker->getWhoEntered();
            },
            'dateSuggested' => function (Speaker $speaker) {
                return $speaker->getDateSuggested()->format(DATE_ATOM);
            },
            'recBio' => function (Speaker $speaker) {
                return $speaker->getRecBio();
            },
            'recBioDate' => function (Speaker $speaker) {
                return $speaker->getRecBioDate();
            },
            'recPhoto' => function (Speaker $speaker) {
                return $speaker->getRecPhoto();
            },
            'recPhotoDate' => function (Speaker $speaker) {
                return $speaker->getRecPhotoDate()->format(DATE_ATOM);
            },
            'recWaiverDate' => function (Speaker $speaker) {
                return $speaker->getRecWaiverDate()->format(DATE_ATOM);
            },
            'spkEmail' => function (Speaker $speaker) {
                return $speaker->getSpkEmail();
            },
            'twitter' => function (Speaker $speaker) {
                return $speaker->getTwitter();
            },
            'twitter2' => function (Speaker $speaker) {
                return $speaker->getTwitter2();
            },
            'twitterNotes' => function (Speaker $speaker) {
                return $speaker->getTwitterNotes();
            },
            'invitationextend' => function (Speaker $speaker) {
                return $speaker->getInvitationextend();
            },
            'invitationWhom' => function (Speaker $speaker) {
                return $speaker->getInvitationWhom();
            },
            'spidermaldate' => function (Speaker $speaker) {
                return $speaker->getSpidermaldate()->format(DATE_ATOM);
            },
            'whoconfirmed' => function (Speaker $speaker) {
                return $speaker->getWhoconfirmed();
            },
            'city' => function (Speaker $speaker) {
                return $speaker->getCity();
            },
            'developmentPriority' => function (Speaker $speaker) {
                return $speaker->getDevelopmentPriority();
            },
            'speakerRole' => function (Speaker $speaker) {
                return $speaker->getSpeakerRole();
            },
            'speakerTopics' => function (Speaker $speaker) {
                return $speaker->getSpeakerTopics();
            },
            'primaryTrack' => function (Speaker $speaker) {
                return $speaker->getPrimaryTrack();
            },
            'secondaryTrack' => function (Speaker $speaker) {
                return $speaker->getSecondaryTrack();
            },
            'topicNotes' => function (Speaker $speaker) {
                return $speaker->getTopicNotes();
            },
            'connections' => function (Speaker $speaker) {
                return $speaker->getConnections();
            },
            'devRelationship' => function (Speaker $speaker) {
                return $speaker->getDevRelationship();
            },
            'devRelationContact' => function (Speaker $speaker) {
                return $speaker->getDevRelationContact();
            },
            'womensreport' => function (Speaker $speaker) {
                return $speaker->getWomensreport();
            },
            'location' => function (Speaker $speaker) {
                return $speaker->getLocation();
            },
            'photoModDate' => function (Speaker $speaker) {
                return $speaker->getPhotoModDate();
            },
            'displayChinese' => function (Speaker $speaker) {
                return $speaker->getDisplayChinese();
            },
            'devOrganization' => function (Speaker $speaker) {
                return $speaker->getDevOrganization();
            },
            'roleChangedate' => function (Speaker $speaker) {
                return $speaker->getRoleChangedate()->format(DATE_ATOM);
            },
            'cVentID' => function (Speaker $speaker) {
                return $speaker->getCVentID();
            },
            'phoneticName' => function (Speaker $speaker) {
                return $speaker->getPhoneticName();
            },
            'needsfinaledit' => function (Speaker $speaker) {
                return $speaker->getNeedsfinaledit();
            },
            'scheduleNotes' => function (Speaker $speaker) {
                return $speaker->getScheduleNotes();
            },
            'linkedin' => function (Speaker $speaker) {
                return $speaker->getLinkedin();
            },
            'speakerLiaison' => function (Speaker $speaker) {
                return $speaker->getSpeakerLiaison();
            },
            'Facebook' => function (Speaker $speaker) {
                return $speaker->getFacebook();
            },
            'FacebookFollowers' => function (Speaker $speaker) {
                return $speaker->getFacebookFollowers();
            },
            'salesForceID' => function (Speaker $speaker) {
                return $speaker->getSalesForceID();
            },
            'instaGram' => function (Speaker $speaker) {
                return $speaker->getInstaGram();
            },
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($speaker): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($speaker): array
    {
        return [
        ];
    }
}

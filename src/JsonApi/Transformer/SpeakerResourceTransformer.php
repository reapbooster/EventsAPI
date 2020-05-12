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
        return ResourceLinks::createWithBaseUri($this->request->getUri())->setSelf(new Link($this->getId($speaker)));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($speaker): array
    {
        return [
            'salutation' => function (Speaker $speaker) {
                return $speaker->getSalutation();
            },
            'spkrnm' => function (Speaker $speaker) {
                return $speaker->getSpkrnm();
            },
            'mname' => function (Speaker $speaker) {
                return $speaker->getMname();
            },
            'lname' => function (Speaker $speaker) {
                return $speaker->getLname();
            },
            'suffix' => function (Speaker $speaker) {
                return $speaker->getSuffix();
            },
            'description' => function (Speaker $speaker) {
                return $speaker->getDescription();
            },
            'biolink' => function (Speaker $speaker) {
                return $speaker->getBiolink();
            },
            'biopic' => function (Speaker $speaker) {
                return $speaker->getBiopic();
            },
            'biotext' => function (Speaker $speaker) {
                return $speaker->getBiotext();
            },
            'speakertype' => function (Speaker $speaker) {
                return $speaker->getSpeakertype();
            },
            'status' => function (Speaker $speaker) {
                return $speaker->getStatus();
            },
            'pgid' => function (Speaker $speaker) {
                return $speaker->getPgid();
            },
            'pgtitle' => function (Speaker $speaker) {
                return $speaker->getPgtitle();
            },
            'eventid' => function (Speaker $speaker) {
                return $speaker->getEventid();
            },
            'sortorder' => function (Speaker $speaker) {
                return $speaker->getSortorder();
            },
            'cancelled' => function (Speaker $speaker) {
                return $speaker->getCancelled();
            },
            'rawfiletype' => function (Speaker $speaker) {
                return $speaker->getRawfiletype();
            },
            'printfiletype' => function (Speaker $speaker) {
                return $speaker->getPrintfiletype();
            },
            'webfiletype' => function (Speaker $speaker) {
                return $speaker->getWebfiletype();
            },
            'notes' => function (Speaker $speaker) {
                return $speaker->getNotes();
            },
            'datecreated' => function (Speaker $speaker) {
                return ($speaker->getDatecreated()) ? $speaker->getDatecreated()->format(DATE_ATOM) : NULL;
            },
            'datemodified' => function (Speaker $speaker) {
                return ($speaker->getDatemodified()) ? $speaker->getDatemodified()->format(DATE_ATOM) : NULL;
            },
            'createdbyid' => function (Speaker $speaker) {
                return $speaker->getCreatedbyid();
            },
            'modifiedbyid' => function (Speaker $speaker) {
                return $speaker->getModifiedbyid();
            },
            'ipnum' => function (Speaker $speaker) {
                return $speaker->getIpnum();
            },
            'attendeeid' => function (Speaker $speaker) {
                return $speaker->getAttendeeid();
            },
            'contactid' => function (Speaker $speaker) {
                return $speaker->getContactid();
            },
            'panelid' => function (Speaker $speaker) {
                return $speaker->getPanelid();
            },
            'whosuggested' => function (Speaker $speaker) {
                return $speaker->getWhosuggested();
            },
            'whoentered' => function (Speaker $speaker) {
                return $speaker->getWhoentered();
            },
            'datesuggested' => function (Speaker $speaker) {
                return ($speaker->getDatesuggested()) ? $speaker->getDatesuggested()->format(DATE_ATOM) : NULL;
            },
            'recbio' => function (Speaker $speaker) {
                return $speaker->getRecbio();
            },
            'recbiodate' => function (Speaker $speaker) {
                return ($speaker->getRecbiodate()) ? $speaker->getRecbiodate()->format(DATE_ATOM) : NULL;
            },
            'recphoto' => function (Speaker $speaker) {
                return $speaker->getRecphoto();
            },
            'recphotodate' => function (Speaker $speaker) {
                return ($speaker->getRecphotodate()) ? $speaker->getRecphotodate()->format(DATE_ATOM) : NULL;
            },
            'recwaiver' => function (Speaker $speaker) {
                return $speaker->getRecwaiver();
            },
            'recwaiverdate' => function (Speaker $speaker) {
                return ($speaker->getRecwaiverdate()) ? $speaker->getRecwaiverdate()->format(DATE_ATOM) : NULL;
            },
            'spkemail' => function (Speaker $speaker) {
                return $speaker->getSpkemail();
            },
            'twitter' => function (Speaker $speaker) {
                return $speaker->getTwitter();
            },
            'twitter2' => function (Speaker $speaker) {
                return $speaker->getTwitter2();
            },
            'twitternotes' => function (Speaker $speaker) {
                return $speaker->getTwitternotes();
            },
            'invitationextend' => function (Speaker $speaker) {
                return $speaker->getInvitationextend();
            },
            'invitationwhom' => function (Speaker $speaker) {
                return $speaker->getInvitationwhom();
            },
            'spideremaildate' => function (Speaker $speaker) {
                return $speaker->getSpideremaildate();
            },
            'whoconfirmed' => function (Speaker $speaker) {
                return $speaker->getWhoconfirmed();
            },
            'city' => function (Speaker $speaker) {
                return $speaker->getCity();
            },
            'developmentpriority' => function (Speaker $speaker) {
                return $speaker->getDevelopmentpriority();
            },
            'speakerrole' => function (Speaker $speaker) {
                return $speaker->getSpeakerrole();
            },
            'speakertopics' => function (Speaker $speaker) {
                return $speaker->getSpeakertopics();
            },
            'primarytrack' => function (Speaker $speaker) {
                return $speaker->getPrimarytrack();
            },
            'secondarytrack' => function (Speaker $speaker) {
                return $speaker->getSecondarytrack();
            },
            'topicnotes' => function (Speaker $speaker) {
                return $speaker->getTopicnotes();
            },
            'connections' => function (Speaker $speaker) {
                return $speaker->getConnections();
            },
            'devrelationship' => function (Speaker $speaker) {
                return $speaker->getDevrelationship();
            },
            'devrelationcontact' => function (Speaker $speaker) {
                return $speaker->getDevrelationcontact();
            },
            'womensreport' => function (Speaker $speaker) {
                return $speaker->getWomensreport();
            },
            'location' => function (Speaker $speaker) {
                return $speaker->getLocation();
            },
            'photomoddate' => function (Speaker $speaker) {
                return ($speaker->getPhotomoddate()) ? $speaker->getPhotomoddate()->format(DATE_ATOM) : NULL;
            },
            'displaychinese' => function (Speaker $speaker) {
                return $speaker->getDisplaychinese();
            },
            'devorganization' => function (Speaker $speaker) {
                return $speaker->getDevorganization();
            },
            'rolechangedate' => function (Speaker $speaker) {
                return ($speaker->getRolechangedate()) ? $speaker->getRolechangedate()->format(DATE_ATOM) : NULL;
            },
            'cventid' => function (Speaker $speaker) {
                return $speaker->getCventid();
            },
            'phoneticname' => function (Speaker $speaker) {
                return $speaker->getPhoneticname();
            },
            'needsfinaledit' => function (Speaker $speaker) {
                return $speaker->getNeedsfinaledit();
            },
            'schedulenotes' => function (Speaker $speaker) {
                return $speaker->getSchedulenotes();
            },
            'showflownotes' => function (Speaker $speaker) {
                return $speaker->getShowflownotes();
            },
            'linkedin' => function (Speaker $speaker) {
                return $speaker->getLinkedin();
            },
            'speakerliaison' => function (Speaker $speaker) {
                return $speaker->getSpeakerliaison();
            },
            'facebook' => function (Speaker $speaker) {
                return $speaker->getFacebook();
            },
            'facebookfollowers' => function (Speaker $speaker) {
                return $speaker->getFacebookfollowers();
            },
            'salesforceid' => function (Speaker $speaker) {
                return $speaker->getSalesforceid();
            },
            'instagram' => function (Speaker $speaker) {
                return $speaker->getInstagram();
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

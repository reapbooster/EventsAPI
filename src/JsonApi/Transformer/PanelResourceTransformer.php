<?php

namespace App\JsonApi\Transformer;

use App\Entity\Panel;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Resource\AbstractResource;

/**
 * Panel Resource Transformer.
 */
class PanelResourceTransformer extends AbstractResource
{
    /**
     * {@inheritdoc}
     */
    public function getType($panel): string
    {
        return 'panels';
    }

    /**
     * {@inheritdoc}
     */
    public function getId($panel): string
    {
        return (string) $panel->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta($panel): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks($panel): ?ResourceLinks
    {
        return ResourceLinks::createWithoutBaseUri()->setSelf(new Link('/panels/'.$this->getId($panel)));
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($panel): array
    {
        return [
            'PID' => function (Panel $panel) {
                return $panel->getPID();
            },
            'sess' => function (Panel $panel) {
                return $panel->getSess();
            },
            'Description' => function (Panel $panel) {
                return $panel->getDescription();
            },
            'pDate' => function (Panel $panel) {
                return $panel->getPDate();
            },
            'pTime' => function (Panel $panel) {
                return $panel->getPTime();
            },
            'Pday' => function (Panel $panel) {
                return $panel->getPday();
            },
            'youTubeURL' => function (Panel $panel) {
                return $panel->getYouTubeURL();
            },
            'why' => function (Panel $panel) {
                return $panel->getWhy();
            },
            'VOG' => function (Panel $panel) {
                return $panel->getVOG();
            },
            'video' => function (Panel $panel) {
                return $panel->getVideo();
            },
            'vdfile4' => function (Panel $panel) {
                return $panel->getVdfile4();
            },
            'vdfile3' => function (Panel $panel) {
                return $panel->getVdfile3();
            },
            'vdfile2' => function (Panel $panel) {
                return $panel->getVdfile2();
            },
            'vdfile1' => function (Panel $panel) {
                return $panel->getVdfile1();
            },
            'twitterHandle' => function (Panel $panel) {
                return $panel->getTwitterHandle();
            },
            'tweeter' => function (Panel $panel) {
                return $panel->getTweeter();
            },
            'tumblr' => function (Panel $panel) {
                return $panel->getTumblr();
            },
            'summ' => function (Panel $panel) {
                return $panel->getSumm();
            },
            'startTimed' => function (Panel $panel) {
                return $panel->getStartTimed()->format(DATE_ATOM);
            },
            'stafflinked' => function (Panel $panel) {
                return $panel->getStafflinked();
            },
            'srrTime' => function (Panel $panel) {
                return $panel->getSrrTime()->format(DATE_ATOM);
            },
            'spons' => function (Panel $panel) {
                return $panel->getSpons();
            },
            'slide' => function (Panel $panel) {
                return $panel->getSlide();
            },
            'showTimeline' => function (Panel $panel) {
                return $panel->getShowTimeline();
            },
            'showNotes' => function (Panel $panel) {
                return $panel->getShowNotes();
            },
            'showflownotes' => function (Panel $panel) {
                return $panel->getShowflownotes();
            },
            'shorturl' => function (Panel $panel) {
                return $panel->getShorturl();
            },
            'shortTitle' => function (Panel $panel) {
                return $panel->getShortTitle();
            },
            'seniorStaff' => function (Panel $panel) {
                return $panel->getSeniorStaff();
            },
            'publish' => function (Panel $panel) {
                return $panel->getPublish();
            },
            'progNotes' => function (Panel $panel) {
                return $panel->getProgNotes();
            },
            'private' => function (Panel $panel) {
                return $panel->getPrivate();
            },
            'printedProgram' => function (Panel $panel) {
                return $panel->getPrintedProgram();
            },
            'ppsetup' => function (Panel $panel) {
                return $panel->getPpsetup();
            },
            'pic2' => function (Panel $panel) {
                return $panel->getPic2();
            },
            'pic1' => function (Panel $panel) {
                return $panel->getPic1();
            },
            'pFinal' => function (Panel $panel) {
                return $panel->getPFinal();
            },
            'paneltypeid' => function (Panel $panel) {
                return $panel->getPaneltypeid();
            },
            'paneltxt' => function (Panel $panel) {
                return $panel->getPaneltxt();
            },
            'PanelSeating' => function (Panel $panel) {
                return $panel->getPanelSeating();
            },
            'panel' => function (Panel $panel) {
                return $panel->getPanel();
            },
            'onStage' => function (Panel $panel) {
                return $panel->getOnStage();
            },
            'onSreens' => function (Panel $panel) {
                return $panel->getOnSreens();
            },
            'nonMI' => function (Panel $panel) {
                return $panel->getNonMI();
            },
            'microphones' => function (Panel $panel) {
                return $panel->getMicrophones();
            },
            'md5' => function (Panel $panel) {
                return $panel->getMd5();
            },
            'md4' => function (Panel $panel) {
                return $panel->getMd4();
            },
            'md3' => function (Panel $panel) {
                return $panel->getMd3();
            },
            'md2' => function (Panel $panel) {
                return $panel->getMd2();
            },
            'md1' => function (Panel $panel) {
                return $panel->getMd1();
            },
            'lktxt10' => function (Panel $panel) {
                return $panel->getLktxt10();
            },
            'lktxt9' => function (Panel $panel) {
                return $panel->getLktxt9();
            },
            'lktxt8' => function (Panel $panel) {
                return $panel->getLktxt8();
            },
            'lktxt7' => function (Panel $panel) {
                return $panel->getLktxt7();
            },
            'lktxt6' => function (Panel $panel) {
                return $panel->getLktxt6();
            },
            'lktxt5' => function (Panel $panel) {
                return $panel->getLktxt5();
            },
            'lktxt4' => function (Panel $panel) {
                return $panel->getLktxt4();
            },
            'lktxt3' => function (Panel $panel) {
                return $panel->getLktxt3();
            },
            'lktxt2' => function (Panel $panel) {
                return $panel->getLktxt2();
            },
            'lktxt1' => function (Panel $panel) {
                return $panel->getLktxt1();
            },
            'livetweet' => function (Panel $panel) {
                return $panel->getLivetweet();
            },
            'liveStream' => function (Panel $panel) {
                return $panel->getLiveStream();
            },
            'link10' => function (Panel $panel) {
                return $panel->getLink10();
            },
            'link9' => function (Panel $panel) {
                return $panel->getLink9();
            },
            'link8' => function (Panel $panel) {
                return $panel->getLink8();
            },
            'link7' => function (Panel $panel) {
                return $panel->getLink7();
            },
            'link6' => function (Panel $panel) {
                return $panel->getLink6();
            },
            'link5' => function (Panel $panel) {
                return $panel->getLink5();
            },
            'link4' => function (Panel $panel) {
                return $panel->getLink4();
            },
            'link3' => function (Panel $panel) {
                return $panel->getLink3();
            },
            'link2' => function (Panel $panel) {
                return $panel->getLink2();
            },
            'link1' => function (Panel $panel) {
                return $panel->getLink1();
            },
            'itinDescription' => function (Panel $panel) {
                return $panel->getItinDescription();
            },
            'hideDescSF' => function (Panel $panel) {
                return $panel->getHideDescSF();
            },
            'hideDesc' => function (Panel $panel) {
                return $panel->getHideDesc();
            },
            'hashtags' => function (Panel $panel) {
                return $panel->getHashtags();
            },
            'EventIDnum' => function (Panel $panel) {
                return $panel->getEventIDnum();
            },
            'EventID' => function (Panel $panel) {
                return $panel->getEventID();
            },
            'Etime' => function (Panel $panel) {
                return $panel->getEtime();
            },
            'epday' => function (Panel $panel) {
                return $panel->getEpday();
            },
            'endTimed' => function (Panel $panel) {
                return $panel->getEndTimed();
            },
            'DVDset' => function (Panel $panel) {
                return $panel->getDVDset();
            },
            'descStatusTS' => function (Panel $panel) {
                return $panel->getDescStatusTS();
            },
            'descStatus' => function (Panel $panel) {
                return $panel->getDescStatus();
            },
            'descFinal' => function (Panel $panel) {
                return $panel->getDescFinal();
            },
            'deptGroup' => function (Panel $panel) {
                return $panel->getDeptGroup();
            },
            'datemodified' => function (Panel $panel) {
                return $panel->getDatemodified()->format(DATE_ATOM);
            },
            'datecreated' => function (Panel $panel) {
                return $panel->getDatecreated()->format(DATE_ATOM);
            },
            'commNotes' => function (Panel $panel) {
                return $panel->getCommNotes();
            },
            'CameraType' => function (Panel $panel) {
                return $panel->getCameraType();
            },
            'audioRecording' => function (Panel $panel) {
                return $panel->getAudioRecording();
            },
            'audio' => function (Panel $panel) {
                return $panel->getAudio();
            },
            'AttendeePCT' => function (Panel $panel) {
                return $panel->getAttendeePCT();
            },
            'AttendeeCount' => function (Panel $panel) {
                return $panel->getAttendeeCount();
            },
            'assignedRA' => function (Panel $panel) {
                return $panel->getAssignedRA();
            },
            'adfile' => function (Panel $panel) {
                return $panel->getAdfile();
            },
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($panel): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($panel): array
    {
        return [
        ];
    }
}

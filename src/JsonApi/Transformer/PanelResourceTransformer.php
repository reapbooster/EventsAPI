<?php

namespace App\JsonApi\Transformer;

use App\Entity\Panel;
use App\Entity\PanelRoom;
use App\Entity\PanelSpeaker;
use App\Entity\PanelTrack;
use App\Entity\Speaker;
use App\JsonApi\Document\PanelRoom\PanelRoomDocument;
use App\Utility\URLParser;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Link\RelationshipLinks;
use WoohooLabs\Yin\JsonApi\Schema\Link\ResourceLinks;
use WoohooLabs\Yin\JsonApi\Schema\Relationship\ToManyRelationship;
use WoohooLabs\Yin\JsonApi\Schema\Relationship\ToOneRelationship;
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
      $url = new URLParser($this->request->getUri());
      $panelID = $panel->getId();
      if (!empty($panelID) && !empty($url)) {
        $thisUri = str_replace($panelID, "", $url->getThisURI());
        return ResourceLinks::createWithBaseUri($thisUri)
          ->setSelf(new Link($panelID));
      }
      return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($panel): array
    {
        return [
            'panel' => function (Panel $panel) {
                return $panel->getPanel();
            },
            'pid' => function (Panel $panel) {
                return $panel->getPid();
            },
            'sess' => function (Panel $panel) {
                return $panel->getSess();
            },
            'description' => function (Panel $panel) {
                return $panel->getDescription();
            },
            'pdate' => function (Panel $panel) {
                return $panel->getPdate();
            },
            'ptime' => function (Panel $panel) {
                return $panel->getPtime();
            },
            'pday' => function (Panel $panel) {
                return $panel->getPday();
            },
            'etime' => function (Panel $panel) {
                return $panel->getEtime();
            },
            'epday' => function (Panel $panel) {
                return $panel->getEpday();
            },
            'lktxt1' => function (Panel $panel) {
                return $panel->getLktxt1();
            },
            'link1' => function (Panel $panel) {
                return $panel->getLink1();
            },
            'lktxt2' => function (Panel $panel) {
                return $panel->getLktxt2();
            },
            'link2' => function (Panel $panel) {
                return $panel->getLink2();
            },
            'lktxt3' => function (Panel $panel) {
                return $panel->getLktxt3();
            },
            'link3' => function (Panel $panel) {
                return $panel->getLink3();
            },
            'lktxt4' => function (Panel $panel) {
                return $panel->getLktxt4();
            },
            'link4' => function (Panel $panel) {
                return $panel->getLink4();
            },
            'lktxt5' => function (Panel $panel) {
                return $panel->getLktxt5();
            },
            'link5' => function (Panel $panel) {
                return $panel->getLink5();
            },
            'lktxt6' => function (Panel $panel) {
                return $panel->getLktxt6();
            },
            'link6' => function (Panel $panel) {
                return $panel->getLink6();
            },
            'lktxt7' => function (Panel $panel) {
                return $panel->getLktxt7();
            },
            'link7' => function (Panel $panel) {
                return $panel->getLink7();
            },
            'lktxt8' => function (Panel $panel) {
                return $panel->getLktxt8();
            },
            'link8' => function (Panel $panel) {
                return $panel->getLink8();
            },
            'lktxt9' => function (Panel $panel) {
                return $panel->getLktxt9();
            },
            'link9' => function (Panel $panel) {
                return $panel->getLink9();
            },
            'lktxt10' => function (Panel $panel) {
                return $panel->getLktxt10();
            },
            'link10' => function (Panel $panel) {
                return $panel->getLink10();
            },
            'video' => function (Panel $panel) {
                return $panel->getVideo();
            },
            'vdfile1' => function (Panel $panel) {
                return $panel->getVdfile1();
            },
            'vdfile2' => function (Panel $panel) {
                return $panel->getVdfile2();
            },
            'vdfile3' => function (Panel $panel) {
                return $panel->getVdfile3();
            },
            'vdfile4' => function (Panel $panel) {
                return $panel->getVdfile4();
            },
            'audio' => function (Panel $panel) {
                return $panel->getAudio();
            },
            'adfile' => function (Panel $panel) {
                return $panel->getAdfile();
            },
            'why' => function (Panel $panel) {
                return $panel->getWhy();
            },
            'summ' => function (Panel $panel) {
                return $panel->getSumm();
            },
            'pic1' => function (Panel $panel) {
                return $panel->getPic1();
            },
            'pic2' => function (Panel $panel) {
                return $panel->getPic2();
            },
            'spons' => function (Panel $panel) {
                return $panel->getSpons();
            },
            'slide' => function (Panel $panel) {
                return $panel->getSlide();
            },
            'eventid' => function (Panel $panel) {
                return $panel->getEventid();
            },
            'eventidnum' => function (Panel $panel) {
                return $panel->getEventidnum();
            },
            'md1' => function (Panel $panel) {
                return $panel->getMd1();
            },
            'md2' => function (Panel $panel) {
                return $panel->getMd2();
            },
            'md3' => function (Panel $panel) {
                return $panel->getMd3();
            },
            'md4' => function (Panel $panel) {
                return $panel->getMd4();
            },
            'md5' => function (Panel $panel) {
                return $panel->getMd5();
            },
            'publish' => function (Panel $panel) {
                return $panel->getPublish();
            },
            'private' => function (Panel $panel) {
                return $panel->getPrivate();
            },
            'paneltxt' => function (Panel $panel) {
                return $panel->getPaneltxt();
            },
            'starttimed' => function (Panel $panel) {
                return ($panel->getStarttimed()) ? $panel->getStarttimed()->format(DATE_ATOM) : NULL;
            },
            'endtimed' => function (Panel $panel) {
                return ($panel->getEndtimed()) ? $panel->getEndtimed()->format(DATE_ATOM) : NULL;
            },
            'paneltypeid' => function (Panel $panel) {
                return $panel->getPaneltypeid();
            },
            'prognotes' => function (Panel $panel) {
                return $panel->getPrognotes();
            },
            'shorttitle' => function (Panel $panel) {
                return $panel->getShorttitle();
            },
            'panelseating' => function (Panel $panel) {
                return $panel->getPanelseating();
            },
            'microphones' => function (Panel $panel) {
                return $panel->getMicrophones();
            },
            'assignedra' => function (Panel $panel) {
                return $panel->getAssignedra();
            },
            'cameratype' => function (Panel $panel) {
                return $panel->getCameratype();
            },
            'dvdset' => function (Panel $panel) {
                return $panel->getDvdset();
            },
            'audiorecording' => function (Panel $panel) {
                return $panel->getAudiorecording();
            },
            'ppsetup' => function (Panel $panel) {
                return $panel->getPpsetup();
            },
            'stafflinked' => function (Panel $panel) {
                return $panel->getStafflinked();
            },
            'seniorstaff' => function (Panel $panel) {
                return $panel->getSeniorstaff();
            },
            'deptgroup' => function (Panel $panel) {
                return $panel->getDeptgroup();
            },
            'showflownotes' => function (Panel $panel) {
                return $panel->getShowflownotes();
            },
            'datecreated' => function (Panel $panel) {
                return ($panel->getDatecreated()) ? $panel->getDatecreated()->format(DATE_ATOM) : NULL;
            },
            'datemodified' => function (Panel $panel) {
                return ($panel->getDatemodified()) ? $panel->getDatemodified()->format(DATE_ATOM) : NULL;
            },
            'youtubeurl' => function (Panel $panel) {
                return $panel->getYoutubeurl();
            },
            'printedprogram' => function (Panel $panel) {
                return $panel->getPrintedprogram();
            },
            'tumblr' => function (Panel $panel) {
                return $panel->getTumblr();
            },
            'livetweet' => function (Panel $panel) {
                return $panel->getLivetweet();
            },
            'tweeter' => function (Panel $panel) {
                return $panel->getTweeter();
            },
            'twitterhandle' => function (Panel $panel) {
                return $panel->getTwitterhandle();
            },
            'shorturl' => function (Panel $panel) {
                return $panel->getShorturl();
            },
            'hashtags' => function (Panel $panel) {
                return $panel->getHashtags();
            },
            'commnotes' => function (Panel $panel) {
                return $panel->getCommnotes();
            },
            'itindescription' => function (Panel $panel) {
                return $panel->getItindescription();
            },
            'pfinal' => function (Panel $panel) {
                return $panel->getPfinal();
            },
            'descfinal' => function (Panel $panel) {
                return $panel->getDescfinal();
            },
            'descstatus' => function (Panel $panel) {
                return $panel->getDescstatus();
            },
            'descstatusts' => function (Panel $panel) {
                return ($panel->getDescstatusts()) ? $panel->getDescstatusts()->format(DATE_ATOM) : NULL;
            },
            'hidedesc' => function (Panel $panel) {
                return $panel->getHidedesc();
            },
            'hidedescsf' => function (Panel $panel) {
                return $panel->getHidedescsf();
            },
            'srrtime' => function (Panel $panel) {
                return $panel->getSrrtime();
            },
            'onsreens' => function (Panel $panel) {
                return $panel->getOnsreens();
            },
            'vog' => function (Panel $panel) {
                return $panel->getVog();
            },
            'onstage' => function (Panel $panel) {
                return $panel->getOnstage();
            },
            'showtimeline' => function (Panel $panel) {
                return $panel->getShowtimeline();
            },
            'shownotes' => function (Panel $panel) {
                return $panel->getShownotes();
            },
            'attendeecount' => function (Panel $panel) {
                return $panel->getAttendeecount();
            },
            'attendeepct' => function (Panel $panel) {
                return $panel->getAttendeepct();
            },
            'nonmi' => function (Panel $panel) {
                return $panel->getNonmi();
            },
            'livestream' => function (Panel $panel) {
                return $panel->getLivestream();
            },
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultIncludedRelationships($panel): array
    {
      //$panel_id = $panel->getId();
      //if (is_numeric($panel_id) && $panel_id >=2 ) {
      //  $toReturn[] = 'room';
      //}
      return [  ];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships($panel): array
    {
      return [];
    }
}

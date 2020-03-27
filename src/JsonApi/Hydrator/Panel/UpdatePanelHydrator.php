<?php

namespace App\JsonApi\Hydrator\Panel;

use App\Entity\Panel;

/**
 * Update Panel Hydrator.
 */
class UpdatePanelHydrator extends AbstractPanelHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panel): array
    {
        return [
            'panel' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPanel($attribute);
            },
            'pid' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPid($attribute);
            },
            'sess' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSess($attribute);
            },
            'description' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDescription($attribute);
            },
            'pdate' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPdate($attribute);
            },
            'ptime' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPtime($attribute);
            },
            'pday' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPday($attribute);
            },
            'etime' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEtime($attribute);
            },
            'epday' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEpday($attribute);
            },
            'lktxt1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt1($attribute);
            },
            'link1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink1($attribute);
            },
            'lktxt2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt2($attribute);
            },
            'link2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink2($attribute);
            },
            'lktxt3' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt3($attribute);
            },
            'link3' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink3($attribute);
            },
            'lktxt4' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt4($attribute);
            },
            'link4' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink4($attribute);
            },
            'lktxt5' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt5($attribute);
            },
            'link5' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink5($attribute);
            },
            'lktxt6' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt6($attribute);
            },
            'link6' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink6($attribute);
            },
            'lktxt7' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt7($attribute);
            },
            'link7' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink7($attribute);
            },
            'lktxt8' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt8($attribute);
            },
            'link8' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink8($attribute);
            },
            'lktxt9' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt9($attribute);
            },
            'link9' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink9($attribute);
            },
            'lktxt10' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt10($attribute);
            },
            'link10' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink10($attribute);
            },
            'video' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVideo($attribute);
            },
            'vdfile1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVdfile1($attribute);
            },
            'vdfile2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVdfile2($attribute);
            },
            'vdfile3' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVdfile3($attribute);
            },
            'vdfile4' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVdfile4($attribute);
            },
            'audio' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAudio($attribute);
            },
            'adfile' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAdfile($attribute);
            },
            'why' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setWhy($attribute);
            },
            'summ' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSumm($attribute);
            },
            'pic1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPic1($attribute);
            },
            'pic2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPic2($attribute);
            },
            'spons' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSpons($attribute);
            },
            'slide' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSlide($attribute);
            },
            'eventid' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEventid($attribute);
            },
            'eventidnum' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEventidnum($attribute);
            },
            'md1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd1($attribute);
            },
            'md2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd2($attribute);
            },
            'md3' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd3($attribute);
            },
            'md4' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd4($attribute);
            },
            'md5' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd5($attribute);
            },
            'publish' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPublish($attribute);
            },
            'private' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPrivate($attribute);
            },
            'paneltxt' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPaneltxt($attribute);
            },
            'starttimed' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setStarttimed(new \DateTime($attribute));
            },
            'endtimed' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEndtimed(new \DateTime($attribute));
            },
            'paneltypeid' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPaneltypeid($attribute);
            },
            'prognotes' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPrognotes($attribute);
            },
            'shorttitle' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShorttitle($attribute);
            },
            'panelseating' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPanelseating($attribute);
            },
            'microphones' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMicrophones($attribute);
            },
            'assignedra' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAssignedra($attribute);
            },
            'cameratype' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setCameratype($attribute);
            },
            'dvdset' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDvdset($attribute);
            },
            'audiorecording' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAudiorecording($attribute);
            },
            'ppsetup' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPpsetup($attribute);
            },
            'stafflinked' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setStafflinked($attribute);
            },
            'seniorstaff' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSeniorstaff($attribute);
            },
            'deptgroup' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDeptgroup($attribute);
            },
            'showflownotes' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShowflownotes($attribute);
            },
            'datecreated' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDatecreated(new \DateTime($attribute));
            },
            'datemodified' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDatemodified(new \DateTime($attribute));
            },
            'youtubeurl' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setYoutubeurl($attribute);
            },
            'printedprogram' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPrintedprogram($attribute);
            },
            'tumblr' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setTumblr($attribute);
            },
            'livetweet' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLivetweet($attribute);
            },
            'tweeter' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setTweeter($attribute);
            },
            'twitterhandle' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setTwitterhandle($attribute);
            },
            'shorturl' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShorturl($attribute);
            },
            'hashtags' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setHashtags($attribute);
            },
            'commnotes' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setCommnotes($attribute);
            },
            'itindescription' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setItindescription($attribute);
            },
            'pfinal' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPfinal($attribute);
            },
            'descfinal' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDescfinal($attribute);
            },
            'descstatus' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDescstatus($attribute);
            },
            'descstatusts' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDescstatusts(new \DateTime($attribute));
            },
            'hidedesc' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setHidedesc($attribute);
            },
            'hidedescsf' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setHidedescsf($attribute);
            },
            'srrtime' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSrrtime($attribute);
            },
            'onsreens' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setOnsreens($attribute);
            },
            'vog' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVog($attribute);
            },
            'onstage' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setOnstage($attribute);
            },
            'showtimeline' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShowtimeline($attribute);
            },
            'shownotes' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShownotes($attribute);
            },
            'attendeecount' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAttendeecount($attribute);
            },
            'attendeepct' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAttendeepct($attribute);
            },
            'nonmi' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setNonmi($attribute);
            },
            'livestream' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLivestream($attribute);
            },
        ];
    }
}

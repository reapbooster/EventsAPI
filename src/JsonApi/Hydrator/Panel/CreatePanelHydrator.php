<?php

namespace App\JsonApi\Hydrator\Panel;

use App\Entity\Panel;

/**
 * Create Panel Hydrator.
 */
class CreatePanelHydrator extends AbstractPanelHydrator
{
    /**
     * {@inheritdoc}
     */
    protected function getAttributeHydrator($panel): array
    {
        return [
            'sess' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSess($attribute);
            },
            'Description' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDescription($attribute);
            },
            'pDate' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPDate($attribute);
            },
            'pTime' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPTime($attribute);
            },
            'Pday' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPday($attribute);
            },
            'youTubeURL' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setYouTubeURL($attribute);
            },
            'why' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setWhy($attribute);
            },
            'VOG' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVOG($attribute);
            },
            'video' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVideo($attribute);
            },
            'vdfile4' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVdfile4($attribute);
            },
            'vdfile3' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVdfile3($attribute);
            },
            'vdfile2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVdfile2($attribute);
            },
            'vdfile1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setVdfile1($attribute);
            },
            'twitterHandle' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setTwitterHandle($attribute);
            },
            'tweeter' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setTweeter($attribute);
            },
            'tumblr' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setTumblr($attribute);
            },
            'summ' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSumm($attribute);
            },
            'startTimed' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setStartTimed(new \DateTime($attribute));
            },
            'stafflinked' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setStafflinked($attribute);
            },
            'srrTime' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSrrTime(new \DateTime($attribute));
            },
            'spons' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSpons($attribute);
            },
            'slide' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSlide($attribute);
            },
            'showTimeline' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShowTimeline($attribute);
            },
            'showNotes' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShowNotes($attribute);
            },
            'showflownotes' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShowflownotes($attribute);
            },
            'shorturl' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShorturl($attribute);
            },
            'shortTitle' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setShortTitle($attribute);
            },
            'seniorStaff' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setSeniorStaff($attribute);
            },
            'publish' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPublish($attribute);
            },
            'progNotes' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setProgNotes($attribute);
            },
            'private' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPrivate($attribute);
            },
            'printedProgram' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPrintedProgram($attribute);
            },
            'ppsetup' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPpsetup($attribute);
            },
            'pic2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPic2($attribute);
            },
            'pic1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPic1($attribute);
            },
            'pFinal' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPFinal($attribute);
            },
            'paneltypeid' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPaneltypeid($attribute);
            },
            'paneltxt' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPaneltxt($attribute);
            },
            'PanelSeating' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPanelSeating($attribute);
            },
            'panel' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setPanel($attribute);
            },
            'onStage' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setOnStage($attribute);
            },
            'onSreens' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setOnSreens($attribute);
            },
            'nonMI' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setNonMI($attribute);
            },
            'microphones' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMicrophones($attribute);
            },
            'md5' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd5($attribute);
            },
            'md4' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd4($attribute);
            },
            'md3' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd3($attribute);
            },
            'md2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd2($attribute);
            },
            'md1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setMd1($attribute);
            },
            'lktxt10' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt10($attribute);
            },
            'lktxt9' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt9($attribute);
            },
            'lktxt8' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt8($attribute);
            },
            'lktxt7' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt7($attribute);
            },
            'lktxt6' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt6($attribute);
            },
            'lktxt5' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt5($attribute);
            },
            'lktxt4' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt4($attribute);
            },
            'lktxt3' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt3($attribute);
            },
            'lktxt2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt2($attribute);
            },
            'lktxt1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLktxt1($attribute);
            },
            'livetweet' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLivetweet($attribute);
            },
            'liveStream' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLiveStream($attribute);
            },
            'link10' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink10($attribute);
            },
            'link9' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink9($attribute);
            },
            'link8' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink8($attribute);
            },
            'link7' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink7($attribute);
            },
            'link6' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink6($attribute);
            },
            'link5' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink5($attribute);
            },
            'link4' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink4($attribute);
            },
            'link3' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink3($attribute);
            },
            'link2' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink2($attribute);
            },
            'link1' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setLink1($attribute);
            },
            'itinDescription' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setItinDescription($attribute);
            },
            'hideDescSF' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setHideDescSF($attribute);
            },
            'hideDesc' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setHideDesc($attribute);
            },
            'hashtags' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setHashtags($attribute);
            },
            'EventIDnum' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEventIDnum($attribute);
            },
            'EventID' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEventID($attribute);
            },
            'Etime' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEtime($attribute);
            },
            'epday' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEpday($attribute);
            },
            'endTimed' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setEndTimed($attribute);
            },
            'DVDset' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDVDset($attribute);
            },
            'descStatusTS' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDescStatusTS($attribute);
            },
            'descStatus' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDescStatus($attribute);
            },
            'descFinal' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDescFinal($attribute);
            },
            'deptGroup' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDeptGroup($attribute);
            },
            'datemodified' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDatemodified(new \DateTime($attribute));
            },
            'datecreated' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setDatecreated(new \DateTime($attribute));
            },
            'commNotes' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setCommNotes($attribute);
            },
            'CameraType' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setCameraType($attribute);
            },
            'audioRecording' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAudioRecording($attribute);
            },
            'audio' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAudio($attribute);
            },
            'AttendeePCT' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAttendeePCT($attribute);
            },
            'AttendeeCount' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAttendeeCount($attribute);
            },
            'assignedRA' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAssignedRA($attribute);
            },
            'adfile' => function (Panel $panel, $attribute, $data, $attributeName) {
                $panel->setAdfile($attribute);
            },
        ];
    }
}

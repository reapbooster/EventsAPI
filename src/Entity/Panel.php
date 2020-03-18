<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanelRepository")
 * @ORM\Table(name="panel")
 */
class Panel {

  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(name="ID", type="integer")
   */
  private $id;

  /**
   * @ORM\Column(name="PID", type="integer")
   */
  private $PID;

  /**
   * @ORM\Column(name="sess", type="string")
   */
  private $sess;

  /**
   * @ORM\Column(name="Description", type="string")
   */
  private $Description;

  /**
   * @ORM\Column(name="pDate", type="string")
   */
  private $pDate;

  /**
   * @ORM\Column(name="pTime", type="string")
   */
  private $pTime;

  /**
   * @ORM\Column(name="Pday", type="string")
   */
  private $Pday;

  /**
   * @ORM\Column(name="youTubeURL", type="string")
   */
  private $youTubeURL;

  /**
   * @ORM\Column(name="why", type="string")
   */
  private $why;

  /**
   * @ORM\Column(name="VOG", type="string")
   */
  private $VOG;

  /**
   * @ORM\Column(name="video", type="boolean")
   */
  private $video;

  /**
   * @ORM\Column(name="vdfile4", type="string")
   */
  private $vdfile4;

  /**
   * @ORM\Column(name="vdfile3", type="string")
   */
  private $vdfile3;

  /**
   * @ORM\Column(name="vdfile2", type="string")
   */
  private $vdfile2;

  /**
   * @ORM\Column(name="vdfile1", type="string")
   */
  private $vdfile1;

  /**
   * @ORM\Column(name="twitterHandle", type="string")
   */
  private $twitterHandle;

  /**
   * @ORM\Column(name="tweeter", type="string")
   */
  private $tweeter;

  /**
   * @ORM\Column(name="tumblr", type="string")
   */
  private $tumblr;

  /**
   * @ORM\Column(name="summ", type="string")
   */
  private $summ;

  /**
   * @ORM\Column(name="startTimed", type="datetime")
   */
  private $startTimed;

  /**
   * @ORM\Column(name="stafflinked", type="string")
   */
  private $stafflinked;

  /**
   * @ORM\Column(name="srrTime", type="datetime")
   */
  private $srrTime;

  /**
   * @ORM\Column(name="spons", type="string")
   */
  private $spons;

  /**
   * @ORM\Column(name="slide", type="string")
   */
  private $slide;

  /**
   * @ORM\Column(name="showTimeline", type="string")
   */
  private $showTimeline;

  /**
   * @ORM\Column(name="showNotes", type="string")
   */
  private $showNotes;

  /**
   * @ORM\Column(name="showflownotes", type="string")
   */
  private $showflownotes;

  /**
   * @ORM\Column(name="shorturl", type="string")
   */
  private $shorturl;

  /**
   * @ORM\Column(name="shortTitle", type="string")
   */
  private $shortTitle;

  /**
   * @ORM\Column(name="seniorStaff", type="string")
   */
  private $seniorStaff;

  /**
   * @ORM\Column(name="publish", type="boolean")
   */
  private $publish;

  /**
   * @ORM\Column(name="progNotes", type="string")
   */
  private $progNotes;

  /**
   * @ORM\Column(name="private", type="boolean")
   */
  private $private;

  /**
   * @ORM\Column(name="printedProgram", type="integer")
   */
  private $printedProgram;

  /**
   * @ORM\Column(name="ppsetup", type="string")
   */
  private $ppsetup;

  /**
   * @ORM\Column(name="pic2", type="string")
   */
  private $pic2;

  /**
   * @ORM\Column(name="pic1", type="string")
   */
  private $pic1;

  /**
   * @ORM\Column(name="pFinal", type="boolean")
   */
  private $pFinal;

  /**
   * @ORM\Column(name="paneltypeid", type="integer")
   */
  private $paneltypeid;

  /**
   * @ORM\Column(name="paneltxt", type="string")
   */
  private $paneltxt;

  /**
   * @ORM\Column(name="PanelSeating", type="string")
   */
  private $PanelSeating;

  /**
   * @ORM\Column(name="panel", type="string")
   */
  private $panel;

  /**
   * @ORM\Column(name="onStage", type="string")
   */
  private $onStage;

  /**
   * @ORM\Column(name="onSreens", type="string")
   */
  private $onSreens;

  /**
   * @ORM\Column(name="nonMI", type="string")
   */
  private $nonMI;

  /**
   * @ORM\Column(name="microphones", type="string")
   */
  private $microphones;

  /**
   * @ORM\Column(name="md5", type="string")
   */
  private $md5;

  /**
   * @ORM\Column(name="md4", type="string")
   */
  private $md4;

  /**
   * @ORM\Column(name="md3", type="string")
   */
  private $md3;

  /**
   * @ORM\Column(name="md2", type="string")
   */
  private $md2;

  /**
   * @ORM\Column(name="md1", type="string")
   */
  private $md1;

  /**
   * @ORM\Column(name="lktxt10", type="string")
   */
  private $lktxt10;

  /**
   * @ORM\Column(name="lktxt9", type="string")
   */
  private $lktxt9;

  /**
   * @ORM\Column(name="lktxt8", type="string")
   */
  private $lktxt8;

  /**
   * @ORM\Column(name="lktxt7", type="string")
   */
  private $lktxt7;

  /**
   * @ORM\Column(name="lktxt6", type="string")
   */
  private $lktxt6;

  /**
   * @ORM\Column(name="lktxt5", type="string")
   */
  private $lktxt5;

  /**
   * @ORM\Column(name="lktxt4", type="string")
   */
  private $lktxt4;

  /**
   * @ORM\Column(name="lktxt3", type="string")
   */
  private $lktxt3;

  /**
   * @ORM\Column(name="lktxt2", type="string")
   */
  private $lktxt2;

  /**
   * @ORM\Column(name="lktxt1", type="string")
   */
  private $lktxt1;

  /**
   * @ORM\Column(name="livetweet", type="string")
   */
  private $livetweet;

  /**
   * @ORM\Column(name="liveStream", type="string")
   */
  private $liveStream;

  /**
   * @ORM\Column(name="link10", type="string")
   */
  private $link10;

  /**
   * @ORM\Column(name="link9", type="string")
   */
  private $link9;

  /**
   * @ORM\Column(name="link8", type="string")
   */
  private $link8;

  /**
   * @ORM\Column(name="$link8", type="string")
   */
  private $link7;

  /**
   * @ORM\Column(name="link7", type="string")
   */
  private $link6;

  /**
   * @ORM\Column(name="link6", type="string")
   */
  private $link5;

  /**
   * @ORM\Column(name="link5", type="string")
   */
  private $link4;

  /**
   * @ORM\Column(name="link4", type="string")
   */
  private $link3;

  /**
   * @ORM\Column(name="link3", type="string")
   */
  private $link2;

  /**
   * @ORM\Column(name="link2", type="string")
   */
  private $link1;

  /**
   * @ORM\Column(name="link1", type="string")
   */
  private $itinDescription;

  /**
   * @ORM\Column(name="hideDescSF", type="string")
   */
  private $hideDescSF;

  /**
   * @ORM\Column(name="hideDesc", type="string")
   */
  private $hideDesc;

  /**
   * @ORM\Column(name="hashtags", type="string")
   */
  private $hashtags;

  /**
   * @ORM\Column(name="EventIDnum", type="string")
   */
  private $EventIDnum;

  /**
   * @ORM\Column(name="EventID", type="string")
   */
  private $EventID;

  /**
   * @ORM\Column(name="Etime", type="string")
   */
  private $Etime;

  /**
   * @ORM\Column(name="epday", type="string")
   */
  private $epday;

  /**
   * @ORM\Column(name="endTimed", type="string")
   */
  private $endTimed;

  /**
   * @ORM\Column(name="DVDset", type="string")
   */
  private $DVDset;

  /**
   * @ORM\Column(name="descStatusTS", type="string")
   */
  private $descStatusTS;

  /**
   * @ORM\Column(name="descStatus", type="string")
   */
  private $descStatus;

  /**
   * @ORM\Column(name="descFinal", type="string")
   */
  private $descFinal;

  /**
   * @ORM\Column(name="deptGroup", type="string")
   */
  private $deptGroup;

  /**
   * @ORM\Column(name="datemodified", type="datetime")
   */
  private $datemodified;

  /**
   * @ORM\Column(name="datecreated", type="datetime")
   */
  private $datecreated;

  /**
   * @ORM\Column(name="commNotes", type="string")
   */
  private $commNotes;

  /**
   * @ORM\Column(name="CameraType", type="string")
   */
  private $CameraType;

  /**
   * @ORM\Column(name="audioRecording", type="string")
   */
  private $audioRecording;

  /**
   * @ORM\Column(name="audio", type="string")
   */
  private $audio;

  /**
   * @ORM\Column(name="AttendeePCT", type="string")
   */
  private $AttendeePCT;

  /**
   * @ORM\Column(name="AttendeeCount", type="string")
   */
  private $AttendeeCount;

  /**
   * @ORM\Column(name="assignedRA", type="string")
   */
  private $assignedRA;

  /**
   * @ORM\Column(name="dfile", type="string")
   */
  private $adfile;

  public function getId(): ?int {
    return $this->id;
  }

  /**
   * @return mixed
   */
  public function getYouTubeURL() {
    return $this->youTubeURL;
  }

  /**
   * @param mixed $youTubeURL
   */
  public function setYouTubeURL($youTubeURL): void {
    $this->youTubeURL = $youTubeURL;
  }

  /**
   * @return mixed
   */
  public function getWhy() {
    return $this->why;
  }

  /**
   * @param mixed $why
   */
  public function setWhy($why): void {
    $this->why = $why;
  }

  /**
   * @return mixed
   */
  public function getVOG() {
    return $this->VOG;
  }

  /**
   * @param mixed $VOG
   */
  public function setVOG($VOG): void {
    $this->VOG = $VOG;
  }

  /**
   * @return mixed
   */
  public function getVideo() {
    return $this->video;
  }

  /**
   * @param mixed $video
   */
  public function setVideo($video): void {
    $this->video = $video;
  }

  /**
   * @return mixed
   */
  public function getVdfile4() {
    return $this->vdfile4;
  }

  /**
   * @param mixed $vdfile4
   */
  public function setVdfile4($vdfile4): void {
    $this->vdfile4 = $vdfile4;
  }

  /**
   * @return mixed
   */
  public function getVdfile3() {
    return $this->vdfile3;
  }

  /**
   * @param mixed $vdfile3
   */
  public function setVdfile3($vdfile3): void {
    $this->vdfile3 = $vdfile3;
  }

  /**
   * @return mixed
   */
  public function getVdfile2() {
    return $this->vdfile2;
  }

  /**
   * @param mixed $vdfile2
   */
  public function setVdfile2($vdfile2): void {
    $this->vdfile2 = $vdfile2;
  }

  /**
   * @return mixed
   */
  public function getVdfile1() {
    return $this->vdfile1;
  }

  /**
   * @param mixed $vdfile1
   */
  public function setVdfile1($vdfile1): void {
    $this->vdfile1 = $vdfile1;
  }

  /**
   * @return mixed
   */
  public function getTwitterHandle() {
    return $this->twitterHandle;
  }

  /**
   * @param mixed $twitterHandle
   */
  public function setTwitterHandle($twitterHandle): void {
    $this->twitterHandle = $twitterHandle;
  }

  /**
   * @return mixed
   */
  public function getTweeter() {
    return $this->tweeter;
  }

  /**
   * @param mixed $tweeter
   */
  public function setTweeter($tweeter): void {
    $this->tweeter = $tweeter;
  }

  /**
   * @return mixed
   */
  public function getTumblr() {
    return $this->tumblr;
  }

  /**
   * @param mixed $tumblr
   */
  public function setTumblr($tumblr): void {
    $this->tumblr = $tumblr;
  }

  /**
   * @return mixed
   */
  public function getSumm() {
    return $this->summ;
  }

  /**
   * @param mixed $summ
   */
  public function setSumm($summ): void {
    $this->summ = $summ;
  }

  /**
   * @return mixed
   */
  public function getStartTimed() {
    return $this->startTimed;
  }

  /**
   * @param mixed $startTimed
   */
  public function setStartTimed($startTimed): void {
    $this->startTimed = $startTimed;
  }

  /**
   * @return mixed
   */
  public function getStafflinked() {
    return $this->stafflinked;
  }

  /**
   * @param mixed $stafflinked
   */
  public function setStafflinked($stafflinked): void {
    $this->stafflinked = $stafflinked;
  }

  /**
   * @return mixed
   */
  public function getSrrTime() {
    return $this->srrTime;
  }

  /**
   * @param mixed $srrTime
   */
  public function setSrrTime($srrTime): void {
    $this->srrTime = $srrTime;
  }

  /**
   * @return mixed
   */
  public function getSpons() {
    return $this->spons;
  }

  /**
   * @param mixed $spons
   */
  public function setSpons($spons): void {
    $this->spons = $spons;
  }

  /**
   * @return mixed
   */
  public function getSlide() {
    return $this->slide;
  }

  /**
   * @param mixed $slide
   */
  public function setSlide($slide): void {
    $this->slide = $slide;
  }

  /**
   * @return mixed
   */
  public function getShowTimeline() {
    return $this->showTimeline;
  }

  /**
   * @param mixed $showTimeline
   */
  public function setShowTimeline($showTimeline): void {
    $this->showTimeline = $showTimeline;
  }

  /**
   * @return mixed
   */
  public function getShowNotes() {
    return $this->showNotes;
  }

  /**
   * @param mixed $showNotes
   */
  public function setShowNotes($showNotes): void {
    $this->showNotes = $showNotes;
  }

  /**
   * @return mixed
   */
  public function getShowflownotes() {
    return $this->showflownotes;
  }

  /**
   * @param mixed $showflownotes
   */
  public function setShowflownotes($showflownotes): void {
    $this->showflownotes = $showflownotes;
  }

  /**
   * @return mixed
   */
  public function getShorturl() {
    return $this->shorturl;
  }

  /**
   * @param mixed $shorturl
   */
  public function setShorturl($shorturl): void {
    $this->shorturl = $shorturl;
  }

  /**
   * @return mixed
   */
  public function getShortTitle() {
    return $this->shortTitle;
  }

  /**
   * @param mixed $shortTitle
   */
  public function setShortTitle($shortTitle): void {
    $this->shortTitle = $shortTitle;
  }

  /**
   * @return mixed
   */
  public function getSess() {
    return $this->sess;
  }

  /**
   * @param mixed $sess
   */
  public function setSess($sess): void {
    $this->sess = $sess;
  }

  /**
   * @return mixed
   */
  public function getSeniorStaff() {
    return $this->seniorStaff;
  }

  /**
   * @param mixed $seniorStaff
   */
  public function setSeniorStaff($seniorStaff): void {
    $this->seniorStaff = $seniorStaff;
  }

  /**
   * @return mixed
   */
  public function getPublish() {
    return $this->publish;
  }

  /**
   * @param mixed $publish
   */
  public function setPublish($publish): void {
    $this->publish = $publish;
  }

  /**
   * @return mixed
   */
  public function getPTime() {
    return $this->pTime;
  }

  /**
   * @param mixed $pTime
   */
  public function setPTime($pTime): void {
    $this->pTime = $pTime;
  }

  /**
   * @return mixed
   */
  public function getProgNotes() {
    return $this->progNotes;
  }

  /**
   * @param mixed $progNotes
   */
  public function setProgNotes($progNotes): void {
    $this->progNotes = $progNotes;
  }

  /**
   * @return mixed
   */
  public function getPrivate() {
    return $this->private;
  }

  /**
   * @param mixed $private
   */
  public function setPrivate($private): void {
    $this->private = $private;
  }

  /**
   * @return mixed
   */
  public function getPrintedProgram() {
    return $this->printedProgram;
  }

  /**
   * @param mixed $printedProgram
   */
  public function setPrintedProgram($printedProgram): void {
    $this->printedProgram = $printedProgram;
  }

  /**
   * @return mixed
   */
  public function getPpsetup() {
    return $this->ppsetup;
  }

  /**
   * @param mixed $ppsetup
   */
  public function setPpsetup($ppsetup): void {
    $this->ppsetup = $ppsetup;
  }

  /**
   * @return mixed
   */
  public function getPID() {
    return $this->PID;
  }

  /**
   * @param mixed $PID
   */
  public function setPID($PID): void {
    $this->PID = $PID;
  }

  /**
   * @return mixed
   */
  public function getPic2() {
    return $this->pic2;
  }

  /**
   * @param mixed $pic2
   */
  public function setPic2($pic2): void {
    $this->pic2 = $pic2;
  }

  /**
   * @return mixed
   */
  public function getPic1() {
    return $this->pic1;
  }

  /**
   * @param mixed $pic1
   */
  public function setPic1($pic1): void {
    $this->pic1 = $pic1;
  }

  /**
   * @return mixed
   */
  public function getPFinal() {
    return $this->pFinal;
  }

  /**
   * @param mixed $pFinal
   */
  public function setPFinal($pFinal): void {
    $this->pFinal = $pFinal;
  }

  /**
   * @return mixed
   */
  public function getPday() {
    return $this->Pday;
  }

  /**
   * @param mixed $Pday
   */
  public function setPday($Pday): void {
    $this->Pday = $Pday;
  }

  /**
   * @return mixed
   */
  public function getPDate() {
    return $this->pDate;
  }

  /**
   * @param mixed $pDate
   */
  public function setPDate($pDate): void {
    $this->pDate = $pDate;
  }

  /**
   * @return mixed
   */
  public function getPaneltypeid() {
    return $this->paneltypeid;
  }

  /**
   * @param mixed $paneltypeid
   */
  public function setPaneltypeid($paneltypeid): void {
    $this->paneltypeid = $paneltypeid;
  }

  /**
   * @return mixed
   */
  public function getPaneltxt() {
    return $this->paneltxt;
  }

  /**
   * @param mixed $paneltxt
   */
  public function setPaneltxt($paneltxt): void {
    $this->paneltxt = $paneltxt;
  }

  /**
   * @return mixed
   */
  public function getPanelSeating() {
    return $this->PanelSeating;
  }

  /**
   * @param mixed $PanelSeating
   */
  public function setPanelSeating($PanelSeating): void {
    $this->PanelSeating = $PanelSeating;
  }

  /**
   * @return mixed
   */
  public function getPanel() {
    return $this->panel;
  }

  /**
   * @param mixed $panel
   */
  public function setPanel($panel): void {
    $this->panel = $panel;
  }

  /**
   * @return mixed
   */
  public function getOnStage() {
    return $this->onStage;
  }

  /**
   * @param mixed $onStage
   */
  public function setOnStage($onStage): void {
    $this->onStage = $onStage;
  }

  /**
   * @return mixed
   */
  public function getOnSreens() {
    return $this->onSreens;
  }

  /**
   * @param mixed $onSreens
   */
  public function setOnSreens($onSreens): void {
    $this->onSreens = $onSreens;
  }

  /**
   * @return mixed
   */
  public function getNonMI() {
    return $this->nonMI;
  }

  /**
   * @param mixed $nonMI
   */
  public function setNonMI($nonMI): void {
    $this->nonMI = $nonMI;
  }

  /**
   * @return mixed
   */
  public function getMicrophones() {
    return $this->microphones;
  }

  /**
   * @param mixed $microphones
   */
  public function setMicrophones($microphones): void {
    $this->microphones = $microphones;
  }

  /**
   * @return mixed
   */
  public function getMd5() {
    return $this->md5;
  }

  /**
   * @param mixed $md5
   */
  public function setMd5($md5): void {
    $this->md5 = $md5;
  }

  /**
   * @return mixed
   */
  public function getMd4() {
    return $this->md4;
  }

  /**
   * @param mixed $md4
   */
  public function setMd4($md4): void {
    $this->md4 = $md4;
  }

  /**
   * @return mixed
   */
  public function getMd3() {
    return $this->md3;
  }

  /**
   * @param mixed $md3
   */
  public function setMd3($md3): void {
    $this->md3 = $md3;
  }

  /**
   * @return mixed
   */
  public function getMd2() {
    return $this->md2;
  }

  /**
   * @param mixed $md2
   */
  public function setMd2($md2): void {
    $this->md2 = $md2;
  }

  /**
   * @return mixed
   */
  public function getMd1() {
    return $this->md1;
  }

  /**
   * @param mixed $md1
   */
  public function setMd1($md1): void {
    $this->md1 = $md1;
  }

  /**
   * @return mixed
   */
  public function getLktxt10() {
    return $this->lktxt10;
  }

  /**
   * @param mixed $lktxt10
   */
  public function setLktxt10($lktxt10): void {
    $this->lktxt10 = $lktxt10;
  }

  /**
   * @return mixed
   */
  public function getLktxt9() {
    return $this->lktxt9;
  }

  /**
   * @param mixed $lktxt9
   */
  public function setLktxt9($lktxt9): void {
    $this->lktxt9 = $lktxt9;
  }

  /**
   * @return mixed
   */
  public function getLktxt8() {
    return $this->lktxt8;
  }

  /**
   * @param mixed $lktxt8
   */
  public function setLktxt8($lktxt8): void {
    $this->lktxt8 = $lktxt8;
  }

  /**
   * @return mixed
   */
  public function getLktxt7() {
    return $this->lktxt7;
  }

  /**
   * @param mixed $lktxt7
   */
  public function setLktxt7($lktxt7): void {
    $this->lktxt7 = $lktxt7;
  }

  /**
   * @return mixed
   */
  public function getLktxt6() {
    return $this->lktxt6;
  }

  /**
   * @param mixed $lktxt6
   */
  public function setLktxt6($lktxt6): void {
    $this->lktxt6 = $lktxt6;
  }

  /**
   * @return mixed
   */
  public function getLktxt5() {
    return $this->lktxt5;
  }

  /**
   * @param mixed $lktxt5
   */
  public function setLktxt5($lktxt5): void {
    $this->lktxt5 = $lktxt5;
  }

  /**
   * @return mixed
   */
  public function getLktxt4() {
    return $this->lktxt4;
  }

  /**
   * @param mixed $lktxt4
   */
  public function setLktxt4($lktxt4): void {
    $this->lktxt4 = $lktxt4;
  }

  /**
   * @return mixed
   */
  public function getLktxt3() {
    return $this->lktxt3;
  }

  /**
   * @param mixed $lktxt3
   */
  public function setLktxt3($lktxt3): void {
    $this->lktxt3 = $lktxt3;
  }

  /**
   * @return mixed
   */
  public function getLktxt2() {
    return $this->lktxt2;
  }

  /**
   * @param mixed $lktxt2
   */
  public function setLktxt2($lktxt2): void {
    $this->lktxt2 = $lktxt2;
  }

  /**
   * @return mixed
   */
  public function getLktxt1() {
    return $this->lktxt1;
  }

  /**
   * @param mixed $lktxt1
   */
  public function setLktxt1($lktxt1): void {
    $this->lktxt1 = $lktxt1;
  }

  /**
   * @return mixed
   */
  public function getLivetweet() {
    return $this->livetweet;
  }

  /**
   * @param mixed $livetweet
   */
  public function setLivetweet($livetweet): void {
    $this->livetweet = $livetweet;
  }

  /**
   * @return mixed
   */
  public function getLiveStream() {
    return $this->liveStream;
  }

  /**
   * @param mixed $liveStream
   */
  public function setLiveStream($liveStream): void {
    $this->liveStream = $liveStream;
  }

  /**
   * @return mixed
   */
  public function getLink10() {
    return $this->link10;
  }

  /**
   * @param mixed $link10
   */
  public function setLink10($link10): void {
    $this->link10 = $link10;
  }

  /**
   * @return mixed
   */
  public function getLink9() {
    return $this->link9;
  }

  /**
   * @param mixed $link9
   */
  public function setLink9($link9): void {
    $this->link9 = $link9;
  }

  /**
   * @return mixed
   */
  public function getLink8() {
    return $this->link8;
  }

  /**
   * @param mixed $link8
   */
  public function setLink8($link8): void {
    $this->link8 = $link8;
  }

  /**
   * @return mixed
   */
  public function getLink7() {
    return $this->link7;
  }

  /**
   * @param mixed $link7
   */
  public function setLink7($link7): void {
    $this->link7 = $link7;
  }

  /**
   * @return mixed
   */
  public function getLink6() {
    return $this->link6;
  }

  /**
   * @param mixed $link6
   */
  public function setLink6($link6): void {
    $this->link6 = $link6;
  }

  /**
   * @return mixed
   */
  public function getLink5() {
    return $this->link5;
  }

  /**
   * @param mixed $link5
   */
  public function setLink5($link5): void {
    $this->link5 = $link5;
  }

  /**
   * @return mixed
   */
  public function getLink4() {
    return $this->link4;
  }

  /**
   * @param mixed $link4
   */
  public function setLink4($link4): void {
    $this->link4 = $link4;
  }

  /**
   * @return mixed
   */
  public function getLink3() {
    return $this->link3;
  }

  /**
   * @param mixed $link3
   */
  public function setLink3($link3): void {
    $this->link3 = $link3;
  }

  /**
   * @return mixed
   */
  public function getLink2() {
    return $this->link2;
  }

  /**
   * @param mixed $link2
   */
  public function setLink2($link2): void {
    $this->link2 = $link2;
  }

  /**
   * @return mixed
   */
  public function getLink1() {
    return $this->link1;
  }

  /**
   * @param mixed $link1
   */
  public function setLink1($link1): void {
    $this->link1 = $link1;
  }

  /**
   * @return mixed
   */
  public function getItinDescription() {
    return $this->itinDescription;
  }

  /**
   * @param mixed $itinDescription
   */
  public function setItinDescription($itinDescription): void {
    $this->itinDescription = $itinDescription;
  }

  /**
   * @return mixed
   */
  public function getHideDescSF() {
    return $this->hideDescSF;
  }

  /**
   * @param mixed $hideDescSF
   */
  public function setHideDescSF($hideDescSF): void {
    $this->hideDescSF = $hideDescSF;
  }

  /**
   * @return mixed
   */
  public function getHideDesc() {
    return $this->hideDesc;
  }

  /**
   * @param mixed $hideDesc
   */
  public function setHideDesc($hideDesc): void {
    $this->hideDesc = $hideDesc;
  }

  /**
   * @return mixed
   */
  public function getHashtags() {
    return $this->hashtags;
  }

  /**
   * @param mixed $hashtags
   */
  public function setHashtags($hashtags): void {
    $this->hashtags = $hashtags;
  }

  /**
   * @return mixed
   */
  public function getEventIDnum() {
    return $this->EventIDnum;
  }

  /**
   * @param mixed $EventIDnum
   */
  public function setEventIDnum($EventIDnum): void {
    $this->EventIDnum = $EventIDnum;
  }

  /**
   * @return mixed
   */
  public function getEventID() {
    return $this->EventID;
  }

  /**
   * @param mixed $EventID
   */
  public function setEventID($EventID): void {
    $this->EventID = $EventID;
  }

  /**
   * @return mixed
   */
  public function getEtime() {
    return $this->Etime;
  }

  /**
   * @param mixed $Etime
   */
  public function setEtime($Etime): void {
    $this->Etime = $Etime;
  }

  /**
   * @return mixed
   */
  public function getEpday() {
    return $this->epday;
  }

  /**
   * @param mixed $epday
   */
  public function setEpday($epday): void {
    $this->epday = $epday;
  }

  /**
   * @return mixed
   */
  public function getEndTimed() {
    return $this->endTimed;
  }

  /**
   * @param mixed $endTimed
   */
  public function setEndTimed($endTimed): void {
    $this->endTimed = $endTimed;
  }

  /**
   * @return mixed
   */
  public function getDVDset() {
    return $this->DVDset;
  }

  /**
   * @param mixed $DVDset
   */
  public function setDVDset($DVDset): void {
    $this->DVDset = $DVDset;
  }

  /**
   * @return mixed
   */
  public function getDescStatusTS() {
    return $this->descStatusTS;
  }

  /**
   * @param mixed $descStatusTS
   */
  public function setDescStatusTS($descStatusTS): void {
    $this->descStatusTS = $descStatusTS;
  }

  /**
   * @return mixed
   */
  public function getDescStatus() {
    return $this->descStatus;
  }

  /**
   * @param mixed $descStatus
   */
  public function setDescStatus($descStatus): void {
    $this->descStatus = $descStatus;
  }

  /**
   * @return mixed
   */
  public function getDescription() {
    return $this->Description;
  }

  /**
   * @param mixed $Description
   */
  public function setDescription($Description): void {
    $this->Description = $Description;
  }

  /**
   * @return mixed
   */
  public function getDescFinal() {
    return $this->descFinal;
  }

  /**
   * @param mixed $descFinal
   */
  public function setDescFinal($descFinal): void {
    $this->descFinal = $descFinal;
  }

  /**
   * @return mixed
   */
  public function getDeptGroup() {
    return $this->deptGroup;
  }

  /**
   * @param mixed $deptGroup
   */
  public function setDeptGroup($deptGroup): void {
    $this->deptGroup = $deptGroup;
  }

  /**
   * @return mixed
   */
  public function getDatemodified() {
    return $this->datemodified;
  }

  /**
   * @param mixed $datemodified
   */
  public function setDatemodified($datemodified): void {
    $this->datemodified = $datemodified;
  }

  /**
   * @return mixed
   */
  public function getDatecreated() {
    return $this->datecreated;
  }

  /**
   * @param mixed $datecreated
   */
  public function setDatecreated($datecreated): void {
    $this->datecreated = $datecreated;
  }

  /**
   * @return mixed
   */
  public function getCommNotes() {
    return $this->commNotes;
  }

  /**
   * @param mixed $commNotes
   */
  public function setCommNotes($commNotes): void {
    $this->commNotes = $commNotes;
  }

  /**
   * @return mixed
   */
  public function getCameraType() {
    return $this->CameraType;
  }

  /**
   * @param mixed $CameraType
   */
  public function setCameraType($CameraType): void {
    $this->CameraType = $CameraType;
  }

  /**
   * @return mixed
   */
  public function getAudioRecording() {
    return $this->audioRecording;
  }

  /**
   * @param mixed $audioRecording
   */
  public function setAudioRecording($audioRecording): void {
    $this->audioRecording = $audioRecording;
  }

  /**
   * @return mixed
   */
  public function getAudio() {
    return $this->audio;
  }

  /**
   * @param mixed $audio
   */
  public function setAudio($audio): void {
    $this->audio = $audio;
  }

  /**
   * @return mixed
   */
  public function getAttendeePCT() {
    return $this->AttendeePCT;
  }

  /**
   * @param mixed $AttendeePCT
   */
  public function setAttendeePCT($AttendeePCT): void {
    $this->AttendeePCT = $AttendeePCT;
  }

  /**
   * @return mixed
   */
  public function getAttendeeCount() {
    return $this->AttendeeCount;
  }

  /**
   * @param mixed $AttendeeCount
   */
  public function setAttendeeCount($AttendeeCount): void {
    $this->AttendeeCount = $AttendeeCount;
  }

  /**
   * @return mixed
   */
  public function getAssignedRA() {
    return $this->assignedRA;
  }

  /**
   * @param mixed $assignedRA
   */
  public function setAssignedRA($assignedRA): void {
    $this->assignedRA = $assignedRA;
  }

  /**
   * @return mixed
   */
  public function getAdfile() {
    return $this->adfile;
  }

  /**
   * @param mixed $adfile
   */
  public function setAdfile($adfile): void {
    $this->adfile = $adfile;
  }

  

}

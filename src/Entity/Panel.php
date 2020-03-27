<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panel
 *
 * @ORM\Table(name="panel")
 * @ORM\Entity(repositoryClass="App\Repository\PanelRepository", readOnly=TRUE)
 * @property int $id
 * @property string $panel
 * @property int $pid
 */
class Panel {

  /**
   * @var int
   *
   * @ORM\Column(name="ID", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;

  /**
   * @var string|null
   *
   * @ORM\Column(name="panel", type="string", length=0, nullable=true)
   */
  private $panel;

  /**
   * @var int|null
   *
   * @ORM\Column(name="PID", type="integer", nullable=true)
   */
  private $pid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="sess", type="string", length=255, nullable=true)
   */
  private $sess;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Description", type="string", length=0, nullable=true)
   */
  private $description;

  /**
   * @var string|null
   *
   * @ORM\Column(name="pDate", type="string", length=255, nullable=true)
   */
  private $pdate;

  /**
   * @var string|null
   *
   * @ORM\Column(name="pTime", type="string", length=50, nullable=true)
   */
  private $ptime;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Pday", type="string", length=50, nullable=true)
   */
  private $pday;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Etime", type="string", length=50, nullable=true)
   */
  private $etime;

  /**
   * @var string|null
   *
   * @ORM\Column(name="epday", type="string", length=50, nullable=true)
   */
  private $epday;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt1", type="string", length=255, nullable=true)
   */
  private $lktxt1;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link1", type="string", length=255, nullable=true)
   */
  private $link1;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt2", type="string", length=255, nullable=true)
   */
  private $lktxt2;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link2", type="string", length=255, nullable=true)
   */
  private $link2;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt3", type="string", length=255, nullable=true)
   */
  private $lktxt3;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link3", type="string", length=255, nullable=true)
   */
  private $link3;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt4", type="string", length=255, nullable=true)
   */
  private $lktxt4;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link4", type="string", length=255, nullable=true)
   */
  private $link4;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt5", type="string", length=255, nullable=true)
   */
  private $lktxt5;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link5", type="string", length=255, nullable=true)
   */
  private $link5;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt6", type="string", length=255, nullable=true)
   */
  private $lktxt6;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link6", type="string", length=255, nullable=true)
   */
  private $link6;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt7", type="string", length=255, nullable=true)
   */
  private $lktxt7;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link7", type="string", length=255, nullable=true)
   */
  private $link7;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt8", type="string", length=255, nullable=true)
   */
  private $lktxt8;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link8", type="string", length=255, nullable=true)
   */
  private $link8;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt9", type="string", length=255, nullable=true)
   */
  private $lktxt9;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link9", type="string", length=255, nullable=true)
   */
  private $link9;

  /**
   * @var string|null
   *
   * @ORM\Column(name="lktxt10", type="string", length=255, nullable=true)
   */
  private $lktxt10;

  /**
   * @var string|null
   *
   * @ORM\Column(name="link10", type="string", length=255, nullable=true)
   */
  private $link10;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="video", type="boolean", nullable=true)
   */
  private $video;

  /**
   * @var string|null
   *
   * @ORM\Column(name="vdfile1", type="string", length=255, nullable=true)
   */
  private $vdfile1;

  /**
   * @var string|null
   *
   * @ORM\Column(name="vdfile2", type="string", length=255, nullable=true)
   */
  private $vdfile2;

  /**
   * @var string|null
   *
   * @ORM\Column(name="vdfile3", type="string", length=255, nullable=true)
   */
  private $vdfile3;

  /**
   * @var string|null
   *
   * @ORM\Column(name="vdfile4", type="string", length=255, nullable=true)
   */
  private $vdfile4;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="audio", type="boolean", nullable=true)
   */
  private $audio;

  /**
   * @var string|null
   *
   * @ORM\Column(name="adfile", type="string", length=255, nullable=true)
   */
  private $adfile;

  /**
   * @var string|null
   *
   * @ORM\Column(name="why", type="string", length=0, nullable=true)
   */
  private $why;

  /**
   * @var string|null
   *
   * @ORM\Column(name="summ", type="string", length=0, nullable=true)
   */
  private $summ;

  /**
   * @var string|null
   *
   * @ORM\Column(name="pic1", type="string", length=255, nullable=true)
   */
  private $pic1;

  /**
   * @var string|null
   *
   * @ORM\Column(name="pic2", type="string", length=255, nullable=true)
   */
  private $pic2;

  /**
   * @var string|null
   *
   * @ORM\Column(name="spons", type="string", length=0, nullable=true)
   */
  private $spons;

  /**
   * @var string|null
   *
   * @ORM\Column(name="slide", type="string", length=255, nullable=true)
   */
  private $slide;

  /**
   * @var string|null
   *
   * @ORM\Column(name="EventID", type="string", length=255, nullable=true)
   */
  private $eventid;

  /**
   * @var int|null
   *
   * @ORM\Column(name="EventIDnum", type="integer", nullable=true)
   */
  private $eventidnum;

  /**
   * @var string|null
   *
   * @ORM\Column(name="md1", type="string", length=50, nullable=true)
   */
  private $md1;

  /**
   * @var string|null
   *
   * @ORM\Column(name="md2", type="string", length=50, nullable=true)
   */
  private $md2;

  /**
   * @var string|null
   *
   * @ORM\Column(name="md3", type="string", length=50, nullable=true)
   */
  private $md3;

  /**
   * @var string|null
   *
   * @ORM\Column(name="md4", type="string", length=50, nullable=true)
   */
  private $md4;

  /**
   * @var string|null
   *
   * @ORM\Column(name="md5", type="string", length=50, nullable=true)
   */
  private $md5;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="publish", type="boolean", nullable=true)
   */
  private $publish;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="private", type="boolean", nullable=true)
   */
  private $private;

  /**
   * @var string|null
   *
   * @ORM\Column(name="paneltxt", type="string", length=255, nullable=true)
   */
  private $paneltxt;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="startTimed", type="datetime", nullable=true)
   */
  private $starttimed;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="endTimed", type="datetime", nullable=true)
   */
  private $endtimed;

  /**
   * @var int|null
   *
   * @ORM\Column(name="paneltypeid", type="integer", nullable=true)
   */
  private $paneltypeid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="progNotes", type="string", length=0, nullable=true)
   */
  private $prognotes;

  /**
   * @var string|null
   *
   * @ORM\Column(name="shortTitle", type="string", length=250, nullable=true)
   */
  private $shorttitle;

  /**
   * @var string|null
   *
   * @ORM\Column(name="PanelSeating", type="string", length=0, nullable=true)
   */
  private $panelseating;

  /**
   * @var string|null
   *
   * @ORM\Column(name="microphones", type="string", length=0, nullable=true)
   */
  private $microphones;

  /**
   * @var string|null
   *
   * @ORM\Column(name="assignedRA", type="string", length=0, nullable=true)
   */
  private $assignedra;

  /**
   * @var string|null
   *
   * @ORM\Column(name="CameraType", type="string", length=0, nullable=true)
   */
  private $cameratype;

  /**
   * @var string|null
   *
   * @ORM\Column(name="DVDset", type="string", length=100, nullable=true)
   */
  private $dvdset;

  /**
   * @var string|null
   *
   * @ORM\Column(name="audioRecording", type="string", length=100,
   *   nullable=true)
   */
  private $audiorecording;

  /**
   * @var string|null
   *
   * @ORM\Column(name="ppsetup", type="string", length=100, nullable=true)
   */
  private $ppsetup;

  /**
   * @var string|null
   *
   * @ORM\Column(name="stafflinked", type="string", length=50, nullable=true)
   */
  private $stafflinked;

  /**
   * @var string|null
   *
   * @ORM\Column(name="seniorStaff", type="string", length=100, nullable=true)
   */
  private $seniorstaff;

  /**
   * @var string|null
   *
   * @ORM\Column(name="deptGroup", type="string", length=100, nullable=true,
   *   options={"fixed"=true})
   */
  private $deptgroup;

  /**
   * @var string|null
   *
   * @ORM\Column(name="showflownotes", type="string", length=0, nullable=true)
   */
  private $showflownotes;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="datecreated", type="datetime", nullable=true)
   */
  private $datecreated;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="datemodified", type="datetime", nullable=true)
   */
  private $datemodified;

  /**
   * @var string|null
   *
   * @ORM\Column(name="youTubeURL", type="string", length=500, nullable=true)
   */
  private $youtubeurl;

  /**
   * @var int|null
   *
   * @ORM\Column(name="printedProgram", type="integer", nullable=true)
   */
  private $printedprogram;

  /**
   * @var string|null
   *
   * @ORM\Column(name="tumblr", type="string", length=250, nullable=true)
   */
  private $tumblr;

  /**
   * @var string|null
   *
   * @ORM\Column(name="livetweet", type="string", length=50, nullable=true)
   */
  private $livetweet;

  /**
   * @var string|null
   *
   * @ORM\Column(name="tweeter", type="string", length=50, nullable=true)
   */
  private $tweeter;

  /**
   * @var string|null
   *
   * @ORM\Column(name="twitterHandle", type="string", length=50, nullable=true)
   */
  private $twitterhandle;

  /**
   * @var string|null
   *
   * @ORM\Column(name="shorturl", type="string", length=50, nullable=true)
   */
  private $shorturl;

  /**
   * @var string|null
   *
   * @ORM\Column(name="hashtags", type="string", length=0, nullable=true)
   */
  private $hashtags;

  /**
   * @var string|null
   *
   * @ORM\Column(name="commNotes", type="string", length=0, nullable=true)
   */
  private $commnotes;

  /**
   * @var string|null
   *
   * @ORM\Column(name="itinDescription", type="string", length=0, nullable=true)
   */
  private $itindescription;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="pFinal", type="boolean", nullable=true)
   */
  private $pfinal;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="descFinal", type="boolean", nullable=true)
   */
  private $descfinal;

  /**
   * @var string|null
   *
   * @ORM\Column(name="descStatus", type="string", length=50, nullable=true)
   */
  private $descstatus;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="descStatusTS", type="datetime", nullable=true)
   */
  private $descstatusts;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="hideDesc", type="boolean", nullable=true)
   */
  private $hidedesc;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="hideDescSF", type="boolean", nullable=true)
   */
  private $hidedescsf;

  /**
   * @var string|null
   *
   * @ORM\Column(name="srrTime", type="string", length=50, nullable=true)
   */
  private $srrtime;

  /**
   * @var string|null
   *
   * @ORM\Column(name="onSreens", type="string", length=255, nullable=true)
   */
  private $onsreens;

  /**
   * @var string|null
   *
   * @ORM\Column(name="VOG", type="string", length=255, nullable=true)
   */
  private $vog;

  /**
   * @var string|null
   *
   * @ORM\Column(name="onStage", type="string", length=255, nullable=true)
   */
  private $onstage;

  /**
   * @var string|null
   *
   * @ORM\Column(name="showTimeline", type="string", length=0, nullable=true)
   */
  private $showtimeline;

  /**
   * @var string|null
   *
   * @ORM\Column(name="showNotes", type="string", length=0, nullable=true)
   */
  private $shownotes;

  /**
   * @var int|null
   *
   * @ORM\Column(name="AttendeeCount", type="integer", nullable=true)
   */
  private $attendeecount;

  /**
   * @var string|null
   *
   * @ORM\Column(name="AttendeePCT", type="decimal", precision=5, scale=2,
   *   nullable=true)
   */
  private $attendeepct;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="nonMI", type="boolean", nullable=true)
   */
  private $nonmi;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="liveStream", type="boolean", nullable=true)
   */
  private $livestream;

  /**
   * @return int
   */
  public function getId(): int {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId(int $id): void {
    $this->id = $id;
  }

  /**
   * @return string|null
   */
  public function getPanel(): ?string {
    return $this->panel;
  }

  /**
   * @param string|null $panel
   */
  public function setPanel(?string $panel): void {
    $this->panel = $panel;
  }

  /**
   * @return int|null
   */
  public function getPid(): ?int {
    return $this->pid;
  }

  /**
   * @param int|null $pid
   */
  public function setPid(?int $pid): void {
    $this->pid = $pid;
  }

  /**
   * @return string|null
   */
  public function getSess(): ?string {
    return $this->sess;
  }

  /**
   * @param string|null $sess
   */
  public function setSess(?string $sess): void {
    $this->sess = $sess;
  }

  /**
   * @return string|null
   */
  public function getDescription(): ?string {
    return $this->description;
  }

  /**
   * @param string|null $description
   */
  public function setDescription(?string $description): void {
    $this->description = $description;
  }

  /**
   * @return string|null
   */
  public function getPdate(): ?string {
    return $this->pdate;
  }

  /**
   * @param string|null $pdate
   */
  public function setPdate(?string $pdate): void {
    $this->pdate = $pdate;
  }

  /**
   * @return string|null
   */
  public function getPtime(): ?string {
    return $this->ptime;
  }

  /**
   * @param string|null $ptime
   */
  public function setPtime(?string $ptime): void {
    $this->ptime = $ptime;
  }

  /**
   * @return string|null
   */
  public function getPday(): ?string {
    return $this->pday;
  }

  /**
   * @param string|null $pday
   */
  public function setPday(?string $pday): void {
    $this->pday = $pday;
  }

  /**
   * @return string|null
   */
  public function getEtime(): ?string {
    return $this->etime;
  }

  /**
   * @param string|null $etime
   */
  public function setEtime(?string $etime): void {
    $this->etime = $etime;
  }

  /**
   * @return string|null
   */
  public function getEpday(): ?string {
    return $this->epday;
  }

  /**
   * @param string|null $epday
   */
  public function setEpday(?string $epday): void {
    $this->epday = $epday;
  }

  /**
   * @return string|null
   */
  public function getLktxt1(): ?string {
    return $this->lktxt1;
  }

  /**
   * @param string|null $lktxt1
   */
  public function setLktxt1(?string $lktxt1): void {
    $this->lktxt1 = $lktxt1;
  }

  /**
   * @return string|null
   */
  public function getLink1(): ?string {
    return $this->link1;
  }

  /**
   * @param string|null $link1
   */
  public function setLink1(?string $link1): void {
    $this->link1 = $link1;
  }

  /**
   * @return string|null
   */
  public function getLktxt2(): ?string {
    return $this->lktxt2;
  }

  /**
   * @param string|null $lktxt2
   */
  public function setLktxt2(?string $lktxt2): void {
    $this->lktxt2 = $lktxt2;
  }

  /**
   * @return string|null
   */
  public function getLink2(): ?string {
    return $this->link2;
  }

  /**
   * @param string|null $link2
   */
  public function setLink2(?string $link2): void {
    $this->link2 = $link2;
  }

  /**
   * @return string|null
   */
  public function getLktxt3(): ?string {
    return $this->lktxt3;
  }

  /**
   * @param string|null $lktxt3
   */
  public function setLktxt3(?string $lktxt3): void {
    $this->lktxt3 = $lktxt3;
  }

  /**
   * @return string|null
   */
  public function getLink3(): ?string {
    return $this->link3;
  }

  /**
   * @param string|null $link3
   */
  public function setLink3(?string $link3): void {
    $this->link3 = $link3;
  }

  /**
   * @return string|null
   */
  public function getLktxt4(): ?string {
    return $this->lktxt4;
  }

  /**
   * @param string|null $lktxt4
   */
  public function setLktxt4(?string $lktxt4): void {
    $this->lktxt4 = $lktxt4;
  }

  /**
   * @return string|null
   */
  public function getLink4(): ?string {
    return $this->link4;
  }

  /**
   * @param string|null $link4
   */
  public function setLink4(?string $link4): void {
    $this->link4 = $link4;
  }

  /**
   * @return string|null
   */
  public function getLktxt5(): ?string {
    return $this->lktxt5;
  }

  /**
   * @param string|null $lktxt5
   */
  public function setLktxt5(?string $lktxt5): void {
    $this->lktxt5 = $lktxt5;
  }

  /**
   * @return string|null
   */
  public function getLink5(): ?string {
    return $this->link5;
  }

  /**
   * @param string|null $link5
   */
  public function setLink5(?string $link5): void {
    $this->link5 = $link5;
  }

  /**
   * @return string|null
   */
  public function getLktxt6(): ?string {
    return $this->lktxt6;
  }

  /**
   * @param string|null $lktxt6
   */
  public function setLktxt6(?string $lktxt6): void {
    $this->lktxt6 = $lktxt6;
  }

  /**
   * @return string|null
   */
  public function getLink6(): ?string {
    return $this->link6;
  }

  /**
   * @param string|null $link6
   */
  public function setLink6(?string $link6): void {
    $this->link6 = $link6;
  }

  /**
   * @return string|null
   */
  public function getLktxt7(): ?string {
    return $this->lktxt7;
  }

  /**
   * @param string|null $lktxt7
   */
  public function setLktxt7(?string $lktxt7): void {
    $this->lktxt7 = $lktxt7;
  }

  /**
   * @return string|null
   */
  public function getLink7(): ?string {
    return $this->link7;
  }

  /**
   * @param string|null $link7
   */
  public function setLink7(?string $link7): void {
    $this->link7 = $link7;
  }

  /**
   * @return string|null
   */
  public function getLktxt8(): ?string {
    return $this->lktxt8;
  }

  /**
   * @param string|null $lktxt8
   */
  public function setLktxt8(?string $lktxt8): void {
    $this->lktxt8 = $lktxt8;
  }

  /**
   * @return string|null
   */
  public function getLink8(): ?string {
    return $this->link8;
  }

  /**
   * @param string|null $link8
   */
  public function setLink8(?string $link8): void {
    $this->link8 = $link8;
  }

  /**
   * @return string|null
   */
  public function getLktxt9(): ?string {
    return $this->lktxt9;
  }

  /**
   * @param string|null $lktxt9
   */
  public function setLktxt9(?string $lktxt9): void {
    $this->lktxt9 = $lktxt9;
  }

  /**
   * @return string|null
   */
  public function getLink9(): ?string {
    return $this->link9;
  }

  /**
   * @param string|null $link9
   */
  public function setLink9(?string $link9): void {
    $this->link9 = $link9;
  }

  /**
   * @return string|null
   */
  public function getLktxt10(): ?string {
    return $this->lktxt10;
  }

  /**
   * @param string|null $lktxt10
   */
  public function setLktxt10(?string $lktxt10): void {
    $this->lktxt10 = $lktxt10;
  }

  /**
   * @return string|null
   */
  public function getLink10(): ?string {
    return $this->link10;
  }

  /**
   * @param string|null $link10
   */
  public function setLink10(?string $link10): void {
    $this->link10 = $link10;
  }

  /**
   * @return bool|null
   */
  public function getVideo(): ?bool {
    return $this->video;
  }

  /**
   * @param bool|null $video
   */
  public function setVideo(?bool $video): void {
    $this->video = $video;
  }

  /**
   * @return string|null
   */
  public function getVdfile1(): ?string {
    return $this->vdfile1;
  }

  /**
   * @param string|null $vdfile1
   */
  public function setVdfile1(?string $vdfile1): void {
    $this->vdfile1 = $vdfile1;
  }

  /**
   * @return string|null
   */
  public function getVdfile2(): ?string {
    return $this->vdfile2;
  }

  /**
   * @param string|null $vdfile2
   */
  public function setVdfile2(?string $vdfile2): void {
    $this->vdfile2 = $vdfile2;
  }

  /**
   * @return string|null
   */
  public function getVdfile3(): ?string {
    return $this->vdfile3;
  }

  /**
   * @param string|null $vdfile3
   */
  public function setVdfile3(?string $vdfile3): void {
    $this->vdfile3 = $vdfile3;
  }

  /**
   * @return string|null
   */
  public function getVdfile4(): ?string {
    return $this->vdfile4;
  }

  /**
   * @param string|null $vdfile4
   */
  public function setVdfile4(?string $vdfile4): void {
    $this->vdfile4 = $vdfile4;
  }

  /**
   * @return bool|null
   */
  public function getAudio(): ?bool {
    return $this->audio;
  }

  /**
   * @param bool|null $audio
   */
  public function setAudio(?bool $audio): void {
    $this->audio = $audio;
  }

  /**
   * @return string|null
   */
  public function getAdfile(): ?string {
    return $this->adfile;
  }

  /**
   * @param string|null $adfile
   */
  public function setAdfile(?string $adfile): void {
    $this->adfile = $adfile;
  }

  /**
   * @return string|null
   */
  public function getWhy(): ?string {
    return $this->why;
  }

  /**
   * @param string|null $why
   */
  public function setWhy(?string $why): void {
    $this->why = $why;
  }

  /**
   * @return string|null
   */
  public function getSumm(): ?string {
    return $this->summ;
  }

  /**
   * @param string|null $summ
   */
  public function setSumm(?string $summ): void {
    $this->summ = $summ;
  }

  /**
   * @return string|null
   */
  public function getPic1(): ?string {
    return $this->pic1;
  }

  /**
   * @param string|null $pic1
   */
  public function setPic1(?string $pic1): void {
    $this->pic1 = $pic1;
  }

  /**
   * @return string|null
   */
  public function getPic2(): ?string {
    return $this->pic2;
  }

  /**
   * @param string|null $pic2
   */
  public function setPic2(?string $pic2): void {
    $this->pic2 = $pic2;
  }

  /**
   * @return string|null
   */
  public function getSpons(): ?string {
    return $this->spons;
  }

  /**
   * @param string|null $spons
   */
  public function setSpons(?string $spons): void {
    $this->spons = $spons;
  }

  /**
   * @return string|null
   */
  public function getSlide(): ?string {
    return $this->slide;
  }

  /**
   * @param string|null $slide
   */
  public function setSlide(?string $slide): void {
    $this->slide = $slide;
  }

  /**
   * @return string|null
   */
  public function getEventid(): ?string {
    return $this->eventid;
  }

  /**
   * @param string|null $eventid
   */
  public function setEventid(?string $eventid): void {
    $this->eventid = $eventid;
  }

  /**
   * @return int|null
   */
  public function getEventidnum(): ?int {
    return $this->eventidnum;
  }

  /**
   * @param int|null $eventidnum
   */
  public function setEventidnum(?int $eventidnum): void {
    $this->eventidnum = $eventidnum;
  }

  /**
   * @return string|null
   */
  public function getMd1(): ?string {
    return $this->md1;
  }

  /**
   * @param string|null $md1
   */
  public function setMd1(?string $md1): void {
    $this->md1 = $md1;
  }

  /**
   * @return string|null
   */
  public function getMd2(): ?string {
    return $this->md2;
  }

  /**
   * @param string|null $md2
   */
  public function setMd2(?string $md2): void {
    $this->md2 = $md2;
  }

  /**
   * @return string|null
   */
  public function getMd3(): ?string {
    return $this->md3;
  }

  /**
   * @param string|null $md3
   */
  public function setMd3(?string $md3): void {
    $this->md3 = $md3;
  }

  /**
   * @return string|null
   */
  public function getMd4(): ?string {
    return $this->md4;
  }

  /**
   * @param string|null $md4
   */
  public function setMd4(?string $md4): void {
    $this->md4 = $md4;
  }

  /**
   * @return string|null
   */
  public function getMd5(): ?string {
    return $this->md5;
  }

  /**
   * @param string|null $md5
   */
  public function setMd5(?string $md5): void {
    $this->md5 = $md5;
  }

  /**
   * @return bool|null
   */
  public function getPublish(): ?bool {
    return $this->publish;
  }

  /**
   * @param bool|null $publish
   */
  public function setPublish(?bool $publish): void {
    $this->publish = $publish;
  }

  /**
   * @return bool|null
   */
  public function getPrivate(): ?bool {
    return $this->private;
  }

  /**
   * @param bool|null $private
   */
  public function setPrivate(?bool $private): void {
    $this->private = $private;
  }

  /**
   * @return string|null
   */
  public function getPaneltxt(): ?string {
    return $this->paneltxt;
  }

  /**
   * @param string|null $paneltxt
   */
  public function setPaneltxt(?string $paneltxt): void {
    $this->paneltxt = $paneltxt;
  }

  /**
   * @return \DateTime|null
   */
  public function getStarttimed(): ?\DateTime {
    return $this->starttimed;
  }

  /**
   * @param \DateTime|null $starttimed
   */
  public function setStarttimed(?\DateTime $starttimed): void {
    $this->starttimed = $starttimed;
  }

  /**
   * @return \DateTime|null
   */
  public function getEndtimed(): ?\DateTime {
    return $this->endtimed;
  }

  /**
   * @param \DateTime|null $endtimed
   */
  public function setEndtimed(?\DateTime $endtimed): void {
    $this->endtimed = $endtimed;
  }

  /**
   * @return int|null
   */
  public function getPaneltypeid(): ?int {
    return $this->paneltypeid;
  }

  /**
   * @param int|null $paneltypeid
   */
  public function setPaneltypeid(?int $paneltypeid): void {
    $this->paneltypeid = $paneltypeid;
  }

  /**
   * @return string|null
   */
  public function getPrognotes(): ?string {
    return $this->prognotes;
  }

  /**
   * @param string|null $prognotes
   */
  public function setPrognotes(?string $prognotes): void {
    $this->prognotes = $prognotes;
  }

  /**
   * @return string|null
   */
  public function getShorttitle(): ?string {
    return $this->shorttitle;
  }

  /**
   * @param string|null $shorttitle
   */
  public function setShorttitle(?string $shorttitle): void {
    $this->shorttitle = $shorttitle;
  }

  /**
   * @return string|null
   */
  public function getPanelseating(): ?string {
    return $this->panelseating;
  }

  /**
   * @param string|null $panelseating
   */
  public function setPanelseating(?string $panelseating): void {
    $this->panelseating = $panelseating;
  }

  /**
   * @return string|null
   */
  public function getMicrophones(): ?string {
    return $this->microphones;
  }

  /**
   * @param string|null $microphones
   */
  public function setMicrophones(?string $microphones): void {
    $this->microphones = $microphones;
  }

  /**
   * @return string|null
   */
  public function getAssignedra(): ?string {
    return $this->assignedra;
  }

  /**
   * @param string|null $assignedra
   */
  public function setAssignedra(?string $assignedra): void {
    $this->assignedra = $assignedra;
  }

  /**
   * @return string|null
   */
  public function getCameratype(): ?string {
    return $this->cameratype;
  }

  /**
   * @param string|null $cameratype
   */
  public function setCameratype(?string $cameratype): void {
    $this->cameratype = $cameratype;
  }

  /**
   * @return string|null
   */
  public function getDvdset(): ?string {
    return $this->dvdset;
  }

  /**
   * @param string|null $dvdset
   */
  public function setDvdset(?string $dvdset): void {
    $this->dvdset = $dvdset;
  }

  /**
   * @return string|null
   */
  public function getAudiorecording(): ?string {
    return $this->audiorecording;
  }

  /**
   * @param string|null $audiorecording
   */
  public function setAudiorecording(?string $audiorecording): void {
    $this->audiorecording = $audiorecording;
  }

  /**
   * @return string|null
   */
  public function getPpsetup(): ?string {
    return $this->ppsetup;
  }

  /**
   * @param string|null $ppsetup
   */
  public function setPpsetup(?string $ppsetup): void {
    $this->ppsetup = $ppsetup;
  }

  /**
   * @return string|null
   */
  public function getStafflinked(): ?string {
    return $this->stafflinked;
  }

  /**
   * @param string|null $stafflinked
   */
  public function setStafflinked(?string $stafflinked): void {
    $this->stafflinked = $stafflinked;
  }

  /**
   * @return string|null
   */
  public function getSeniorstaff(): ?string {
    return $this->seniorstaff;
  }

  /**
   * @param string|null $seniorstaff
   */
  public function setSeniorstaff(?string $seniorstaff): void {
    $this->seniorstaff = $seniorstaff;
  }

  /**
   * @return string|null
   */
  public function getDeptgroup(): ?string {
    return $this->deptgroup;
  }

  /**
   * @param string|null $deptgroup
   */
  public function setDeptgroup(?string $deptgroup): void {
    $this->deptgroup = $deptgroup;
  }

  /**
   * @return string|null
   */
  public function getShowflownotes(): ?string {
    return $this->showflownotes;
  }

  /**
   * @param string|null $showflownotes
   */
  public function setShowflownotes(?string $showflownotes): void {
    $this->showflownotes = $showflownotes;
  }

  /**
   * @return \DateTime|null
   */
  public function getDatecreated(): ?\DateTime {
    return $this->datecreated;
  }

  /**
   * @param \DateTime|null $datecreated
   */
  public function setDatecreated(?\DateTime $datecreated): void {
    $this->datecreated = $datecreated;
  }

  /**
   * @return \DateTime|null
   */
  public function getDatemodified(): ?\DateTime {
    return $this->datemodified;
  }

  /**
   * @param \DateTime|null $datemodified
   */
  public function setDatemodified(?\DateTime $datemodified): void {
    $this->datemodified = $datemodified;
  }

  /**
   * @return string|null
   */
  public function getYoutubeurl(): ?string {
    return $this->youtubeurl;
  }

  /**
   * @param string|null $youtubeurl
   */
  public function setYoutubeurl(?string $youtubeurl): void {
    $this->youtubeurl = $youtubeurl;
  }

  /**
   * @return int|null
   */
  public function getPrintedprogram(): ?int {
    return $this->printedprogram;
  }

  /**
   * @param int|null $printedprogram
   */
  public function setPrintedprogram(?int $printedprogram): void {
    $this->printedprogram = $printedprogram;
  }

  /**
   * @return string|null
   */
  public function getTumblr(): ?string {
    return $this->tumblr;
  }

  /**
   * @param string|null $tumblr
   */
  public function setTumblr(?string $tumblr): void {
    $this->tumblr = $tumblr;
  }

  /**
   * @return string|null
   */
  public function getLivetweet(): ?string {
    return $this->livetweet;
  }

  /**
   * @param string|null $livetweet
   */
  public function setLivetweet(?string $livetweet): void {
    $this->livetweet = $livetweet;
  }

  /**
   * @return string|null
   */
  public function getTweeter(): ?string {
    return $this->tweeter;
  }

  /**
   * @param string|null $tweeter
   */
  public function setTweeter(?string $tweeter): void {
    $this->tweeter = $tweeter;
  }

  /**
   * @return string|null
   */
  public function getTwitterhandle(): ?string {
    return $this->twitterhandle;
  }

  /**
   * @param string|null $twitterhandle
   */
  public function setTwitterhandle(?string $twitterhandle): void {
    $this->twitterhandle = $twitterhandle;
  }

  /**
   * @return string|null
   */
  public function getShorturl(): ?string {
    return $this->shorturl;
  }

  /**
   * @param string|null $shorturl
   */
  public function setShorturl(?string $shorturl): void {
    $this->shorturl = $shorturl;
  }

  /**
   * @return string|null
   */
  public function getHashtags(): ?string {
    return $this->hashtags;
  }

  /**
   * @param string|null $hashtags
   */
  public function setHashtags(?string $hashtags): void {
    $this->hashtags = $hashtags;
  }

  /**
   * @return string|null
   */
  public function getCommnotes(): ?string {
    return $this->commnotes;
  }

  /**
   * @param string|null $commnotes
   */
  public function setCommnotes(?string $commnotes): void {
    $this->commnotes = $commnotes;
  }

  /**
   * @return string|null
   */
  public function getItindescription(): ?string {
    return $this->itindescription;
  }

  /**
   * @param string|null $itindescription
   */
  public function setItindescription(?string $itindescription): void {
    $this->itindescription = $itindescription;
  }

  /**
   * @return bool|null
   */
  public function getPfinal(): ?bool {
    return $this->pfinal;
  }

  /**
   * @param bool|null $pfinal
   */
  public function setPfinal(?bool $pfinal): void {
    $this->pfinal = $pfinal;
  }

  /**
   * @return bool|null
   */
  public function getDescfinal(): ?bool {
    return $this->descfinal;
  }

  /**
   * @param bool|null $descfinal
   */
  public function setDescfinal(?bool $descfinal): void {
    $this->descfinal = $descfinal;
  }

  /**
   * @return string|null
   */
  public function getDescstatus(): ?string {
    return $this->descstatus;
  }

  /**
   * @param string|null $descstatus
   */
  public function setDescstatus(?string $descstatus): void {
    $this->descstatus = $descstatus;
  }

  /**
   * @return \DateTime|null
   */
  public function getDescstatusts(): ?\DateTime {
    return $this->descstatusts;
  }

  /**
   * @param \DateTime|null $descstatusts
   */
  public function setDescstatusts(?\DateTime $descstatusts): void {
    $this->descstatusts = $descstatusts;
  }

  /**
   * @return bool|null
   */
  public function getHidedesc(): ?bool {
    return $this->hidedesc;
  }

  /**
   * @param bool|null $hidedesc
   */
  public function setHidedesc(?bool $hidedesc): void {
    $this->hidedesc = $hidedesc;
  }

  /**
   * @return bool|null
   */
  public function getHidedescsf(): ?bool {
    return $this->hidedescsf;
  }

  /**
   * @param bool|null $hidedescsf
   */
  public function setHidedescsf(?bool $hidedescsf): void {
    $this->hidedescsf = $hidedescsf;
  }

  /**
   * @return string|null
   */
  public function getSrrtime(): ?string {
    return $this->srrtime;
  }

  /**
   * @param string|null $srrtime
   */
  public function setSrrtime(?string $srrtime): void {
    $this->srrtime = $srrtime;
  }

  /**
   * @return string|null
   */
  public function getOnsreens(): ?string {
    return $this->onsreens;
  }

  /**
   * @param string|null $onsreens
   */
  public function setOnsreens(?string $onsreens): void {
    $this->onsreens = $onsreens;
  }

  /**
   * @return string|null
   */
  public function getVog(): ?string {
    return $this->vog;
  }

  /**
   * @param string|null $vog
   */
  public function setVog(?string $vog): void {
    $this->vog = $vog;
  }

  /**
   * @return string|null
   */
  public function getOnstage(): ?string {
    return $this->onstage;
  }

  /**
   * @param string|null $onstage
   */
  public function setOnstage(?string $onstage): void {
    $this->onstage = $onstage;
  }

  /**
   * @return string|null
   */
  public function getShowtimeline(): ?string {
    return $this->showtimeline;
  }

  /**
   * @param string|null $showtimeline
   */
  public function setShowtimeline(?string $showtimeline): void {
    $this->showtimeline = $showtimeline;
  }

  /**
   * @return string|null
   */
  public function getShownotes(): ?string {
    return $this->shownotes;
  }

  /**
   * @param string|null $shownotes
   */
  public function setShownotes(?string $shownotes): void {
    $this->shownotes = $shownotes;
  }

  /**
   * @return int|null
   */
  public function getAttendeecount(): ?int {
    return $this->attendeecount;
  }

  /**
   * @param int|null $attendeecount
   */
  public function setAttendeecount(?int $attendeecount): void {
    $this->attendeecount = $attendeecount;
  }

  /**
   * @return string|null
   */
  public function getAttendeepct(): ?string {
    return $this->attendeepct;
  }

  /**
   * @param string|null $attendeepct
   */
  public function setAttendeepct(?string $attendeepct): void {
    $this->attendeepct = $attendeepct;
  }

  /**
   * @return bool|null
   */
  public function getNonmi(): ?bool {
    return $this->nonmi;
  }

  /**
   * @param bool|null $nonmi
   */
  public function setNonmi(?bool $nonmi): void {
    $this->nonmi = $nonmi;
  }

  /**
   * @return bool|null
   */
  public function getLivestream(): ?bool {
    return $this->livestream;
  }

  /**
   * @param bool|null $livestream
   */
  public function setLivestream(?bool $livestream): void {
    $this->livestream = $livestream;
  }


}

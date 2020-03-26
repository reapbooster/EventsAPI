<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpeakerRepository", readOnly=TRUE)
 * @ORM\Table(name="speak")
 * @property int $SpkrID
 */
class Speaker {



  /**
   * @var int
   *
   * @ORM\Column(name="SpkrID", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $spkrid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="salutation", type="string", length=255, nullable=true)
   */
  private $salutation;

  /**
   * @var string|null
   *
   * @ORM\Column(name="SpkrNm", type="string", length=200, nullable=true)
   */
  private $spkrnm;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Mname", type="string", length=255, nullable=true)
   */
  private $mname;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Lname", type="string", length=255, nullable=true)
   */
  private $lname;

  /**
   * @var string|null
   *
   * @ORM\Column(name="suffix", type="string", length=50, nullable=true)
   */
  private $suffix;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Description", type="string", length=500, nullable=true)
   */
  private $description;

  /**
   * @var string|null
   *
   * @ORM\Column(name="BioLink", type="string", length=255, nullable=true)
   */
  private $biolink;

  /**
   * @var string|null
   *
   * @ORM\Column(name="BioPic", type="string", length=200, nullable=true)
   */
  private $biopic;

  /**
   * @var string|null
   *
   * @ORM\Column(name="BioText", type="string", length=0, nullable=true)
   */
  private $biotext;

  /**
   * @var string|null
   *
   * @ORM\Column(name="speakertype", type="string", length=50, nullable=true)
   */
  private $speakertype;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="Status", type="boolean", nullable=true)
   */
  private $status;

  /**
   * @var int|null
   *
   * @ORM\Column(name="PgID", type="integer", nullable=true)
   */
  private $pgid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="PgTitle", type="string", length=50, nullable=true)
   */
  private $pgtitle;

  /**
   * @var string|null
   *
   * @ORM\Column(name="EventID", type="string", length=255, nullable=true)
   */
  private $eventid;

  /**
   * @var int|null
   *
   * @ORM\Column(name="sortorder", type="integer", nullable=true)
   */
  private $sortorder;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="cancelled", type="boolean", nullable=true)
   */
  private $cancelled;

  /**
   * @var string|null
   *
   * @ORM\Column(name="rawFileType", type="string", length=50, nullable=true)
   */
  private $rawfiletype;

  /**
   * @var string|null
   *
   * @ORM\Column(name="printFileType", type="string", length=50, nullable=true)
   */
  private $printfiletype;

  /**
   * @var string|null
   *
   * @ORM\Column(name="WebFileType", type="string", length=50, nullable=true)
   */
  private $webfiletype;

  /**
   * @var string|null
   *
   * @ORM\Column(name="notes", type="string", length=0, nullable=true)
   */
  private $notes;

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
   * @var int|null
   *
   * @ORM\Column(name="createdbyID", type="integer", nullable=true)
   */
  private $createdbyid;

  /**
   * @var int|null
   *
   * @ORM\Column(name="modifiedbyID", type="integer", nullable=true)
   */
  private $modifiedbyid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="ipnum", type="string", length=255, nullable=true)
   */
  private $ipnum;

  /**
   * @var int|null
   *
   * @ORM\Column(name="attendeeID", type="integer", nullable=true)
   */
  private $attendeeid;

  /**
   * @var int|null
   *
   * @ORM\Column(name="ContactID", type="integer", nullable=true)
   */
  private $contactid;

  /**
   * @var int|null
   *
   * @ORM\Column(name="panelID", type="integer", nullable=true)
   */
  private $panelid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="whoSuggested", type="string", length=250, nullable=true)
   */
  private $whosuggested;

  /**
   * @var string|null
   *
   * @ORM\Column(name="whoEntered", type="string", length=250, nullable=true)
   */
  private $whoentered;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="dateSuggested", type="datetime", nullable=true)
   */
  private $datesuggested;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="recBio", type="boolean", nullable=true)
   */
  private $recbio;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="recBioDate", type="datetime", nullable=true)
   */
  private $recbiodate;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="recPhoto", type="boolean", nullable=true)
   */
  private $recphoto;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="recPhotoDate", type="datetime", nullable=true)
   */
  private $recphotodate;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="recWaiver", type="boolean", nullable=true)
   */
  private $recwaiver;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="recWaiverDate", type="datetime", nullable=true)
   */
  private $recwaiverdate;

  /**
   * @var string|null
   *
   * @ORM\Column(name="spkEmail", type="string", length=250, nullable=true)
   */
  private $spkemail;

  /**
   * @var string|null
   *
   * @ORM\Column(name="twitter", type="string", length=300, nullable=true)
   */
  private $twitter;

  /**
   * @var string|null
   *
   * @ORM\Column(name="twitter2", type="string", length=300, nullable=true)
   */
  private $twitter2;

  /**
   * @var string|null
   *
   * @ORM\Column(name="twitterNotes", type="string", length=0, nullable=true)
   */
  private $twitternotes;

  /**
   * @var string|null
   *
   * @ORM\Column(name="invitationextend", type="string", length=50, nullable=true)
   */
  private $invitationextend;

  /**
   * @var string|null
   *
   * @ORM\Column(name="invitationWhom", type="string", length=50, nullable=true)
   */
  private $invitationwhom;

  /**
   * @var string|null
   *
   * @ORM\Column(name="spideremaildate", type="string", length=50, nullable=true)
   */
  private $spideremaildate;

  /**
   * @var string|null
   *
   * @ORM\Column(name="whoconfirmed", type="string", length=10, nullable=true, options={"fixed"=true})
   */
  private $whoconfirmed;

  /**
   * @var string|null
   *
   * @ORM\Column(name="city", type="string", length=50, nullable=true)
   */
  private $city;

  /**
   * @var int|null
   *
   * @ORM\Column(name="developmentPriority", type="integer", nullable=true)
   */
  private $developmentpriority;

  /**
   * @var string|null
   *
   * @ORM\Column(name="speakerRole", type="string", length=250, nullable=true)
   */
  private $speakerrole;

  /**
   * @var string|null
   *
   * @ORM\Column(name="speakerTopics", type="string", length=0, nullable=true)
   */
  private $speakertopics;

  /**
   * @var string|null
   *
   * @ORM\Column(name="primaryTrack", type="string", length=10, nullable=true, options={"fixed"=true})
   */
  private $primarytrack;

  /**
   * @var string|null
   *
   * @ORM\Column(name="secondaryTrack", type="string", length=10, nullable=true, options={"fixed"=true})
   */
  private $secondarytrack;

  /**
   * @var string|null
   *
   * @ORM\Column(name="topicNotes", type="string", length=0, nullable=true)
   */
  private $topicnotes;

  /**
   * @var string|null
   *
   * @ORM\Column(name="connections", type="string", length=0, nullable=true)
   */
  private $connections;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="devRelationship", type="boolean", nullable=true)
   */
  private $devrelationship;

  /**
   * @var string|null
   *
   * @ORM\Column(name="devRelationContact", type="string", length=200, nullable=true)
   */
  private $devrelationcontact;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="womensreport", type="boolean", nullable=true)
   */
  private $womensreport;

  /**
   * @var string|null
   *
   * @ORM\Column(name="location", type="string", length=250, nullable=true)
   */
  private $location;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="photoModDate", type="datetime", nullable=true)
   */
  private $photomoddate;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="displayChinese", type="boolean", nullable=true)
   */
  private $displaychinese;

  /**
   * @var string|null
   *
   * @ORM\Column(name="devOrganization", type="string", length=255, nullable=true)
   */
  private $devorganization;

  /**
   * @var \DateTime|null
   *
   * @ORM\Column(name="roleChangeDate", type="datetime", nullable=true)
   */
  private $rolechangedate;

  /**
   * @var string|null
   *
   * @ORM\Column(name="cVentID", type="string", length=100, nullable=true)
   */
  private $cventid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="phoneticName", type="string", length=250, nullable=true)
   */
  private $phoneticname;

  /**
   * @var string|null
   *
   * @ORM\Column(name="needsfinaledit", type="string", length=10, nullable=true, options={"fixed"=true})
   */
  private $needsfinaledit;

  /**
   * @var string|null
   *
   * @ORM\Column(name="ScheduleNotes", type="string", length=0, nullable=true)
   */
  private $schedulenotes;

  /**
   * @var string|null
   *
   * @ORM\Column(name="ShowFlowNotes", type="string", length=0, nullable=true)
   */
  private $showflownotes;

  /**
   * @var string|null
   *
   * @ORM\Column(name="linkedin", type="string", length=300, nullable=true)
   */
  private $linkedin;

  /**
   * @var string|null
   *
   * @ORM\Column(name="speakerLiaison", type="string", length=250, nullable=true)
   */
  private $speakerliaison;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Facebook", type="string", length=300, nullable=true)
   */
  private $facebook;

  /**
   * @var string|null
   *
   * @ORM\Column(name="FacebookFollowers", type="string", length=50, nullable=true)
   */
  private $facebookfollowers;

  /**
   * @var string|null
   *
   * @ORM\Column(name="salesForceID", type="string", length=250, nullable=true)
   */
  private $salesforceid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="instaGram", type="string", length=250, nullable=true)
   */
  private $instagram;

  private $event;

  public function __construct()
  {
    $this->panels = new ArrayCollection();
    $this->event = new Event();
  }

  /**
   * @return \Doctrine\Common\Collections\ArrayCollection
   */
  public function getPanels(): \Doctrine\Common\Collections\ArrayCollection {
    return $this->panels;
  }

  /**
   * @param \Doctrine\Common\Collections\ArrayCollection $panels
   */
  public function setPanels(\Doctrine\Common\Collections\ArrayCollection $panels): void {
    $this->panels = $panels;
  }

  public function getId(): ?int {
    return $this->spkrid;
  }

  /**
   * @return int
   */
  public function getSpkrid(): int {
    return $this->spkrid;
  }

  /**
   * @param int $spkrid
   */
  public function setSpkrid(int $spkrid): void {
    $this->spkrid = $spkrid;
  }

  /**
   * @return string|null
   */
  public function getSalutation(): ?string {
    return $this->salutation;
  }

  /**
   * @param string|null $salutation
   */
  public function setSalutation(?string $salutation): void {
    $this->salutation = $salutation;
  }

  /**
   * @return string|null
   */
  public function getSpkrnm(): ?string {
    return $this->spkrnm;
  }

  /**
   * @param string|null $spkrnm
   */
  public function setSpkrnm(?string $spkrnm): void {
    $this->spkrnm = $spkrnm;
  }

  /**
   * @return string|null
   */
  public function getMname(): ?string {
    return $this->mname;
  }

  /**
   * @param string|null $mname
   */
  public function setMname(?string $mname): void {
    $this->mname = $mname;
  }

  /**
   * @return string|null
   */
  public function getLname(): ?string {
    return $this->lname;
  }

  /**
   * @param string|null $lname
   */
  public function setLname(?string $lname): void {
    $this->lname = $lname;
  }

  /**
   * @return string|null
   */
  public function getSuffix(): ?string {
    return $this->suffix;
  }

  /**
   * @param string|null $suffix
   */
  public function setSuffix(?string $suffix): void {
    $this->suffix = $suffix;
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
  public function getBiolink(): ?string {
    return $this->biolink;
  }

  /**
   * @param string|null $biolink
   */
  public function setBiolink(?string $biolink): void {
    $this->biolink = $biolink;
  }

  /**
   * @return string|null
   */
  public function getBiopic(): ?string {
    return $this->biopic;
  }

  /**
   * @param string|null $biopic
   */
  public function setBiopic(?string $biopic): void {
    $this->biopic = $biopic;
  }

  /**
   * @return string|null
   */
  public function getBiotext(): ?string {
    return $this->biotext;
  }

  /**
   * @param string|null $biotext
   */
  public function setBiotext(?string $biotext): void {
    $this->biotext = $biotext;
  }

  /**
   * @return string|null
   */
  public function getSpeakertype(): ?string {
    return $this->speakertype;
  }

  /**
   * @param string|null $speakertype
   */
  public function setSpeakertype(?string $speakertype): void {
    $this->speakertype = $speakertype;
  }

  /**
   * @return bool|null
   */
  public function getStatus(): ?bool {
    return $this->status;
  }

  /**
   * @param bool|null $status
   */
  public function setStatus(?bool $status): void {
    $this->status = $status;
  }

  /**
   * @return int|null
   */
  public function getPgid(): ?int {
    return $this->pgid;
  }

  /**
   * @param int|null $pgid
   */
  public function setPgid(?int $pgid): void {
    $this->pgid = $pgid;
  }

  /**
   * @return string|null
   */
  public function getPgtitle(): ?string {
    return $this->pgtitle;
  }

  /**
   * @param string|null $pgtitle
   */
  public function setPgtitle(?string $pgtitle): void {
    $this->pgtitle = $pgtitle;
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
  public function getSortorder(): ?int {
    return $this->sortorder;
  }

  /**
   * @param int|null $sortorder
   */
  public function setSortorder(?int $sortorder): void {
    $this->sortorder = $sortorder;
  }

  /**
   * @return bool|null
   */
  public function getCancelled(): ?bool {
    return $this->cancelled;
  }

  /**
   * @param bool|null $cancelled
   */
  public function setCancelled(?bool $cancelled): void {
    $this->cancelled = $cancelled;
  }

  /**
   * @return string|null
   */
  public function getRawfiletype(): ?string {
    return $this->rawfiletype;
  }

  /**
   * @param string|null $rawfiletype
   */
  public function setRawfiletype(?string $rawfiletype): void {
    $this->rawfiletype = $rawfiletype;
  }

  /**
   * @return string|null
   */
  public function getPrintfiletype(): ?string {
    return $this->printfiletype;
  }

  /**
   * @param string|null $printfiletype
   */
  public function setPrintfiletype(?string $printfiletype): void {
    $this->printfiletype = $printfiletype;
  }

  /**
   * @return string|null
   */
  public function getWebfiletype(): ?string {
    return $this->webfiletype;
  }

  /**
   * @param string|null $webfiletype
   */
  public function setWebfiletype(?string $webfiletype): void {
    $this->webfiletype = $webfiletype;
  }

  /**
   * @return string|null
   */
  public function getNotes(): ?string {
    return $this->notes;
  }

  /**
   * @param string|null $notes
   */
  public function setNotes(?string $notes): void {
    $this->notes = $notes;
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
   * @return int|null
   */
  public function getCreatedbyid(): ?int {
    return $this->createdbyid;
  }

  /**
   * @param int|null $createdbyid
   */
  public function setCreatedbyid(?int $createdbyid): void {
    $this->createdbyid = $createdbyid;
  }

  /**
   * @return int|null
   */
  public function getModifiedbyid(): ?int {
    return $this->modifiedbyid;
  }

  /**
   * @param int|null $modifiedbyid
   */
  public function setModifiedbyid(?int $modifiedbyid): void {
    $this->modifiedbyid = $modifiedbyid;
  }

  /**
   * @return string|null
   */
  public function getIpnum(): ?string {
    return $this->ipnum;
  }

  /**
   * @param string|null $ipnum
   */
  public function setIpnum(?string $ipnum): void {
    $this->ipnum = $ipnum;
  }

  /**
   * @return int|null
   */
  public function getAttendeeid(): ?int {
    return $this->attendeeid;
  }

  /**
   * @param int|null $attendeeid
   */
  public function setAttendeeid(?int $attendeeid): void {
    $this->attendeeid = $attendeeid;
  }

  /**
   * @return int|null
   */
  public function getContactid(): ?int {
    return $this->contactid;
  }

  /**
   * @param int|null $contactid
   */
  public function setContactid(?int $contactid): void {
    $this->contactid = $contactid;
  }

  /**
   * @return int|null
   */
  public function getPanelid(): ?int {
    return $this->panelid;
  }

  /**
   * @param int|null $panelid
   */
  public function setPanelid(?int $panelid): void {
    $this->panelid = $panelid;
  }

  /**
   * @return string|null
   */
  public function getWhosuggested(): ?string {
    return $this->whosuggested;
  }

  /**
   * @param string|null $whosuggested
   */
  public function setWhosuggested(?string $whosuggested): void {
    $this->whosuggested = $whosuggested;
  }

  /**
   * @return string|null
   */
  public function getWhoentered(): ?string {
    return $this->whoentered;
  }

  /**
   * @param string|null $whoentered
   */
  public function setWhoentered(?string $whoentered): void {
    $this->whoentered = $whoentered;
  }

  /**
   * @return \DateTime|null
   */
  public function getDatesuggested(): ?\DateTime {
    return $this->datesuggested;
  }

  /**
   * @param \DateTime|null $datesuggested
   */
  public function setDatesuggested(?\DateTime $datesuggested): void {
    $this->datesuggested = $datesuggested;
  }

  /**
   * @return bool|null
   */
  public function getRecbio(): ?bool {
    return $this->recbio;
  }

  /**
   * @param bool|null $recbio
   */
  public function setRecbio(?bool $recbio): void {
    $this->recbio = $recbio;
  }

  /**
   * @return \DateTime|null
   */
  public function getRecbiodate(): ?\DateTime {
    return $this->recbiodate;
  }

  /**
   * @param \DateTime|null $recbiodate
   */
  public function setRecbiodate(?\DateTime $recbiodate): void {
    $this->recbiodate = $recbiodate;
  }

  /**
   * @return bool|null
   */
  public function getRecphoto(): ?bool {
    return $this->recphoto;
  }

  /**
   * @param bool|null $recphoto
   */
  public function setRecphoto(?bool $recphoto): void {
    $this->recphoto = $recphoto;
  }

  /**
   * @return \DateTime|null
   */
  public function getRecphotodate(): ?\DateTime {
    return $this->recphotodate;
  }

  /**
   * @param \DateTime|null $recphotodate
   */
  public function setRecphotodate(?\DateTime $recphotodate): void {
    $this->recphotodate = $recphotodate;
  }

  /**
   * @return bool|null
   */
  public function getRecwaiver(): ?bool {
    return $this->recwaiver;
  }

  /**
   * @param bool|null $recwaiver
   */
  public function setRecwaiver(?bool $recwaiver): void {
    $this->recwaiver = $recwaiver;
  }

  /**
   * @return \DateTime|null
   */
  public function getRecwaiverdate(): ?\DateTime {
    return $this->recwaiverdate;
  }

  /**
   * @param \DateTime|null $recwaiverdate
   */
  public function setRecwaiverdate(?\DateTime $recwaiverdate): void {
    $this->recwaiverdate = $recwaiverdate;
  }

  /**
   * @return string|null
   */
  public function getSpkemail(): ?string {
    return $this->spkemail;
  }

  /**
   * @param string|null $spkemail
   */
  public function setSpkemail(?string $spkemail): void {
    $this->spkemail = $spkemail;
  }

  /**
   * @return string|null
   */
  public function getTwitter(): ?string {
    return $this->twitter;
  }

  /**
   * @param string|null $twitter
   */
  public function setTwitter(?string $twitter): void {
    $this->twitter = $twitter;
  }

  /**
   * @return string|null
   */
  public function getTwitter2(): ?string {
    return $this->twitter2;
  }

  /**
   * @param string|null $twitter2
   */
  public function setTwitter2(?string $twitter2): void {
    $this->twitter2 = $twitter2;
  }

  /**
   * @return string|null
   */
  public function getTwitternotes(): ?string {
    return $this->twitternotes;
  }

  /**
   * @param string|null $twitternotes
   */
  public function setTwitternotes(?string $twitternotes): void {
    $this->twitternotes = $twitternotes;
  }

  /**
   * @return string|null
   */
  public function getInvitationextend(): ?string {
    return $this->invitationextend;
  }

  /**
   * @param string|null $invitationextend
   */
  public function setInvitationextend(?string $invitationextend): void {
    $this->invitationextend = $invitationextend;
  }

  /**
   * @return string|null
   */
  public function getInvitationwhom(): ?string {
    return $this->invitationwhom;
  }

  /**
   * @param string|null $invitationwhom
   */
  public function setInvitationwhom(?string $invitationwhom): void {
    $this->invitationwhom = $invitationwhom;
  }

  /**
   * @return string|null
   */
  public function getSpideremaildate(): ?string {
    return $this->spideremaildate;
  }

  /**
   * @param string|null $spideremaildate
   */
  public function setSpideremaildate(?string $spideremaildate): void {
    $this->spideremaildate = $spideremaildate;
  }

  /**
   * @return string|null
   */
  public function getWhoconfirmed(): ?string {
    return $this->whoconfirmed;
  }

  /**
   * @param string|null $whoconfirmed
   */
  public function setWhoconfirmed(?string $whoconfirmed): void {
    $this->whoconfirmed = $whoconfirmed;
  }

  /**
   * @return string|null
   */
  public function getCity(): ?string {
    return $this->city;
  }

  /**
   * @param string|null $city
   */
  public function setCity(?string $city): void {
    $this->city = $city;
  }

  /**
   * @return int|null
   */
  public function getDevelopmentpriority(): ?int {
    return $this->developmentpriority;
  }

  /**
   * @param int|null $developmentpriority
   */
  public function setDevelopmentpriority(?int $developmentpriority): void {
    $this->developmentpriority = $developmentpriority;
  }

  /**
   * @return string|null
   */
  public function getSpeakerrole(): ?string {
    return $this->speakerrole;
  }

  /**
   * @param string|null $speakerrole
   */
  public function setSpeakerrole(?string $speakerrole): void {
    $this->speakerrole = $speakerrole;
  }

  /**
   * @return string|null
   */
  public function getSpeakertopics(): ?string {
    return $this->speakertopics;
  }

  /**
   * @param string|null $speakertopics
   */
  public function setSpeakertopics(?string $speakertopics): void {
    $this->speakertopics = $speakertopics;
  }

  /**
   * @return string|null
   */
  public function getPrimarytrack(): ?string {
    return $this->primarytrack;
  }

  /**
   * @param string|null $primarytrack
   */
  public function setPrimarytrack(?string $primarytrack): void {
    $this->primarytrack = $primarytrack;
  }

  /**
   * @return string|null
   */
  public function getSecondarytrack(): ?string {
    return $this->secondarytrack;
  }

  /**
   * @param string|null $secondarytrack
   */
  public function setSecondarytrack(?string $secondarytrack): void {
    $this->secondarytrack = $secondarytrack;
  }

  /**
   * @return string|null
   */
  public function getTopicnotes(): ?string {
    return $this->topicnotes;
  }

  /**
   * @param string|null $topicnotes
   */
  public function setTopicnotes(?string $topicnotes): void {
    $this->topicnotes = $topicnotes;
  }

  /**
   * @return string|null
   */
  public function getConnections(): ?string {
    return $this->connections;
  }

  /**
   * @param string|null $connections
   */
  public function setConnections(?string $connections): void {
    $this->connections = $connections;
  }

  /**
   * @return bool|null
   */
  public function getDevrelationship(): ?bool {
    return $this->devrelationship;
  }

  /**
   * @param bool|null $devrelationship
   */
  public function setDevrelationship(?bool $devrelationship): void {
    $this->devrelationship = $devrelationship;
  }

  /**
   * @return string|null
   */
  public function getDevrelationcontact(): ?string {
    return $this->devrelationcontact;
  }

  /**
   * @param string|null $devrelationcontact
   */
  public function setDevrelationcontact(?string $devrelationcontact): void {
    $this->devrelationcontact = $devrelationcontact;
  }

  /**
   * @return bool|null
   */
  public function getWomensreport(): ?bool {
    return $this->womensreport;
  }

  /**
   * @param bool|null $womensreport
   */
  public function setWomensreport(?bool $womensreport): void {
    $this->womensreport = $womensreport;
  }

  /**
   * @return string|null
   */
  public function getLocation(): ?string {
    return $this->location;
  }

  /**
   * @param string|null $location
   */
  public function setLocation(?string $location): void {
    $this->location = $location;
  }

  /**
   * @return \DateTime|null
   */
  public function getPhotomoddate(): ?\DateTime {
    return $this->photomoddate;
  }

  /**
   * @param \DateTime|null $photomoddate
   */
  public function setPhotomoddate(?\DateTime $photomoddate): void {
    $this->photomoddate = $photomoddate;
  }

  /**
   * @return bool|null
   */
  public function getDisplaychinese(): ?bool {
    return $this->displaychinese;
  }

  /**
   * @param bool|null $displaychinese
   */
  public function setDisplaychinese(?bool $displaychinese): void {
    $this->displaychinese = $displaychinese;
  }

  /**
   * @return string|null
   */
  public function getDevorganization(): ?string {
    return $this->devorganization;
  }

  /**
   * @param string|null $devorganization
   */
  public function setDevorganization(?string $devorganization): void {
    $this->devorganization = $devorganization;
  }

  /**
   * @return \DateTime|null
   */
  public function getRolechangedate(): ?\DateTime {
    return $this->rolechangedate;
  }

  /**
   * @param \DateTime|null $rolechangedate
   */
  public function setRolechangedate(?\DateTime $rolechangedate): void {
    $this->rolechangedate = $rolechangedate;
  }

  /**
   * @return string|null
   */
  public function getCventid(): ?string {
    return $this->cventid;
  }

  /**
   * @param string|null $cventid
   */
  public function setCventid(?string $cventid): void {
    $this->cventid = $cventid;
  }

  /**
   * @return string|null
   */
  public function getPhoneticname(): ?string {
    return $this->phoneticname;
  }

  /**
   * @param string|null $phoneticname
   */
  public function setPhoneticname(?string $phoneticname): void {
    $this->phoneticname = $phoneticname;
  }

  /**
   * @return string|null
   */
  public function getNeedsfinaledit(): ?string {
    return $this->needsfinaledit;
  }

  /**
   * @param string|null $needsfinaledit
   */
  public function setNeedsfinaledit(?string $needsfinaledit): void {
    $this->needsfinaledit = $needsfinaledit;
  }

  /**
   * @return string|null
   */
  public function getSchedulenotes(): ?string {
    return $this->schedulenotes;
  }

  /**
   * @param string|null $schedulenotes
   */
  public function setSchedulenotes(?string $schedulenotes): void {
    $this->schedulenotes = $schedulenotes;
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
   * @return string|null
   */
  public function getLinkedin(): ?string {
    return $this->linkedin;
  }

  /**
   * @param string|null $linkedin
   */
  public function setLinkedin(?string $linkedin): void {
    $this->linkedin = $linkedin;
  }

  /**
   * @return string|null
   */
  public function getSpeakerliaison(): ?string {
    return $this->speakerliaison;
  }

  /**
   * @param string|null $speakerliaison
   */
  public function setSpeakerliaison(?string $speakerliaison): void {
    $this->speakerliaison = $speakerliaison;
  }

  /**
   * @return string|null
   */
  public function getFacebook(): ?string {
    return $this->facebook;
  }

  /**
   * @param string|null $facebook
   */
  public function setFacebook(?string $facebook): void {
    $this->facebook = $facebook;
  }

  /**
   * @return string|null
   */
  public function getFacebookfollowers(): ?string {
    return $this->facebookfollowers;
  }

  /**
   * @param string|null $facebookfollowers
   */
  public function setFacebookfollowers(?string $facebookfollowers): void {
    $this->facebookfollowers = $facebookfollowers;
  }

  /**
   * @return string|null
   */
  public function getSalesforceid(): ?string {
    return $this->salesforceid;
  }

  /**
   * @param string|null $salesforceid
   */
  public function setSalesforceid(?string $salesforceid): void {
    $this->salesforceid = $salesforceid;
  }

  /**
   * @return string|null
   */
  public function getInstagram(): ?string {
    return $this->instagram;
  }

  /**
   * @param string|null $instagram
   */
  public function setInstagram(?string $instagram): void {
    $this->instagram = $instagram;
  }

  /**
   * @return \App\Entity\Event
   */
  public function getEvent(): \App\Entity\Event {
    return $this->event;
  }

  /**
   * @param \App\Entity\Event $event
   */
  public function setEvent(\App\Entity\Event $event): void {
    $this->event = $event;
  }



}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpeakerRepository")
 * @ORM\Table(name="speak")
 */
class Speaker {

  /**
   * @ORM\Id()
   * @ORM\GeneratedValue(strategy="NONE")
   * @ORM\Column(name="SpkrID", type="integer", nullable=false)
   */
  private $SpkrID;

  /**
   * @ORM\Column(name="salutation", type="string")
   */
  private $salutation;

  /**
   * @ORM\Column(name="SpkrNm", type="string")
   */
  private $SpkrNm;

  /**
   * @ORM\Column(name="Mname", type="string")
   */
  private $Mname;

  /**
   * @ORM\Column(name="Lname", type="string")
   */
  private $Lname;

  /**
   * @ORM\Column(name="suffix", type="string")
   */
  private $suffix;

  /**
   * @ORM\Column(name="Description", type="string")
   */
  private $Description;

  /**
   * @ORM\Column(name="BioLink", type="string")
   */
  private $BioLink;

  /**
   * @ORM\Column(name="BioPic", type="string")
   */
  private $bioPic;

  /**
   * @ORM\Column(name="BioText", type="string")
   */
  private $BioText;

  /**
   * @ORM\Column(name="speakertype", type="string")
   */
  private $speakertype;

  /**
   * @ORM\Column(name="Status", type="string")
   */
  private $Status;

  /**
   * @ORM\Column(name="PgTitle", type="string")
   */
  private $PgTitle;

  /**
   * @ORM\Column(name="EventID", type="string")
   */
  private $EventID;

  /**
   * @ORM\Column(name="sortorder", type="integer")
   */
  private $sortorder;

  /**
   * @ORM\Column(name="cancelled", type="boolean")
   */
  private $cancelled;

  /**
   * @ORM\Column(name="rawFileType", type="string")
   */
  private $rawFileType;

  /**
   * @ORM\Column(name="printFileType", type="string")
   */
  private $printFileType;

  /**
   * @ORM\Column(name="WebFileType", type="string")
   */
  private $WebFileType;

  /**
   * @ORM\Column(name="notes", type="string")
   */
  private $notes;

  /**
   * @ORM\Column(name="datecreated", type="datetime", nullable=true)
   */
  private $datecreated;

  /**
   * @ORM\Column(name="datemodified", type="datetime", nullable=true)
   */
  private $datemodified;

  /**
   * @ORM\Column(name="createdbyID", type="integer")
   */
  private $createdbyID;

  /**
   * @ORM\Column(name="modifiedbyID", type="integer")
   */
  private $modifiedbyID;

  /**
   * @ORM\Column(name="ipnum", type="integer")
   */
  private $ipnum;

  /**
   * @ORM\Column(name="attendeeID", type="integer")
   */
  private $attendeeID;

  /**
   * @ORM\Column(name="panelID", type="integer")
   */
  private $panelID;

  /**
   * @ORM\Column(name="whoSuggested", type="string")
   */
  private $whoSuggested;

  /**
   * @ORM\Column(name="whoEntered", type="string")
   */
  private $whoEntered;

  /**
   * @ORM\Column(name="dateSuggested", type="datetime", nullable=true)
   */
  private $dateSuggested;

  /**
   * @ORM\Column(name="recBio", type="boolean")
   */
  private $recBio;

  /**
   * @ORM\Column(name="recBioDate", type="string", nullable=true)
   */
  private $recBioDate;

  /**
   * @ORM\Column(name="recPhoto", type="string")
   */
  private $recPhoto;

  /**
   * @ORM\Column(name="recPhotoDate", type="datetime")
   */
  private $recPhotoDate;

  /**
   * @ORM\Column(name="recWaiverDate", type="datetime")
   */
  private $recWaiverDate;

  /**
   * @ORM\Column(name="spkEmail", type="string")
   */
  private $spkEmail;

  /**
   * @ORM\Column(name="twitter", type="string")
   */
  private $twitter;

  /**
   * @ORM\Column(name="twitter2", type="string")
   */
  private $twitter2;

  /**
   * @ORM\Column(name="twitterNotes", type="string")
   */
  private $twitterNotes;

  /**
   * @ORM\Column(name="invitationextend", type="boolean")
   */
  private $invitationextend;

  /**
   * @ORM\Column(name="invitationWhom", type="string")
   */
  private $invitationWhom;

  /**
   * @ORM\Column(name="spideremaildate", type="datetime")
   */
  private $spideremaildate;

  /**
   * @ORM\Column(name="whoconfirmed", type="string")
   */
  private $whoconfirmed;

  /**
   * @ORM\Column(name="city", type="string")
   */
  private $city;

  /**
   * @ORM\Column(name="developmentPriority", type="string")
   */
  private $developmentPriority;

  /**
   * @ORM\Column(name="speakerRole", type="string")
   */
  private $speakerRole;

  /**
   * @ORM\Column(name="speakerTopics", type="string")
   */
  private $speakerTopics;

  /**
   * @ORM\Column(name="primaryTrack", type="string")
   */
  private $primaryTrack;

  /**
   * @ORM\Column(name="secondaryTrack", type="string")
   */
  private $secondaryTrack;

  /**
   * @ORM\Column(name="topicNotes", type="string")
   */
  private $topicNotes;

  /**
   * @ORM\Column(name="connections", type="string")
   */
  private $connections;

  /**
   * @ORM\Column(name="devRelationship", type="string")
   */
  private $devRelationship;

  /**
   * @ORM\Column(name="devRelationContact", type="string")
   */
  private $devRelationContact;

  /**
   * @ORM\Column(name="womensreport", type="boolean")
   */
  private $womensreport;

  /**
   * @ORM\Column(name="location", type="string")
   */
  private $location;

  /**
   * @ORM\Column(name="photoModDate", type="string")
   */
  private $photoModDate;

  /**
   * @ORM\Column(name="displayChinese", type="string")
   */
  private $displayChinese;

  /**
   * @ORM\Column(name="devOrganization", type="string")
   */
  private $devOrganization;

  /**
   * @ORM\Column(name="roleChangedate", type="datetime")
   */
  private $roleChangedate;

  /**
   * @ORM\Column(name="cVentID", type="string")
   */
  private $cVentID;

  /**
   * @ORM\Column(name="phoneticName", type="string")
   */
  private $phoneticName;

  /**
   * @ORM\Column(name="needsfinaledit", type="string")
   */
  private $needsfinaledit;

  /**
   * @ORM\Column(name="scheduleNotes", type="string")
   */
  private $scheduleNotes;

  /**
   * @ORM\Column(name="linkedin", type="string")
   */
  private $linkedin;

  /**
   * @ORM\Column(name="speakerLiaison", type="string")
   */
  private $speakerLiaison;

  /**
   * @ORM\Column(name="Facebook", type="string")
   */
  private $Facebook;

  /**
   * @ORM\Column(name="FacebookFollowers", type="string")
   */
  private $FacebookFollowers;

  /**
   * @ORM\Column(name="salesForceID", type="string")
   */
  private $salesForceID;

  /**
   * @ORM\Column(name="instaGram", type="string")
   */
  private $instaGram;

  /**
   * @ORM\ManyToOne(targetEntity="Event", inversedBy="speakers")
   * @JoinColumn(name="EventID", referencedColumnName="EventID", nullable=true, fieldName="EventID")
   */
  private $event;

  public function __construct()
  {
    $this->panels = new ArrayCollection();
    $this->event = new Event();
  }


  public function getId(): ?int {
    return $this->SpkrID;
  }

  /**
   * @return mixed
   */
  public function getSalutation() {
    return $this->salutation;
  }

  /**
   * @param mixed $salutation
   */
  public function setSalutation($salutation): void {
    $this->salutation = $salutation;
  }

  /**
   * @return mixed
   */
  public function getSpkrNm() {
    return $this->SpkrNm;
  }

  /**
   * @param mixed $SpkrNm
   */
  public function setSpkrNm($SpkrNm): void {
    $this->SpkrNm = $SpkrNm;
  }

  /**
   * @return mixed
   */
  public function getMname() {
    return $this->Mname;
  }

  /**
   * @param mixed $Mname
   */
  public function setMname($Mname): void {
    $this->Mname = $Mname;
  }

  /**
   * @return mixed
   */
  public function getLname() {
    return $this->Lname;
  }

  /**
   * @param mixed $Lname
   */
  public function setLname($Lname): void {
    $this->Lname = $Lname;
  }

  /**
   * @return mixed
   */
  public function getSuffix() {
    return $this->suffix;
  }

  /**
   * @param mixed $suffix
   */
  public function setSuffix($suffix): void {
    $this->suffix = $suffix;
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
  public function getBioLink() {
    return $this->BioLink;
  }

  /**
   * @param mixed $BioLink
   */
  public function setBioLink($BioLink): void {
    $this->BioLink = $BioLink;
  }

  /**
   * @return mixed
   */
  public function getBioPic() {
    return $this->bioPic;
  }

  /**
   * @param mixed $bioPic
   */
  public function setBioPic($bioPic): void {
    $this->bioPic = $bioPic;
  }

  /**
   * @return mixed
   */
  public function getBioText() {
    return $this->BioText;
  }

  /**
   * @param mixed $BioText
   */
  public function setBioText($BioText): void {
    $this->BioText = $BioText;
  }

  /**
   * @return mixed
   */
  public function getSpeakertype() {
    return $this->speakertype;
  }

  /**
   * @param mixed $speakertype
   */
  public function setSpeakertype($speakertype): void {
    $this->speakertype = $speakertype;
  }

  /**
   * @return mixed
   */
  public function getStatus() {
    return $this->Status;
  }

  /**
   * @param mixed $Status
   */
  public function setStatus($Status): void {
    $this->Status = $Status;
  }

  /**
   * @return mixed
   */
  public function getPgTitle() {
    return $this->PgTitle;
  }

  /**
   * @param mixed $PgTitle
   */
  public function setPgTitle($PgTitle): void {
    $this->PgTitle = $PgTitle;
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
  public function getSortorder() {
    return $this->sortorder;
  }

  /**
   * @param mixed $sortorder
   */
  public function setSortorder($sortorder): void {
    $this->sortorder = $sortorder;
  }

  /**
   * @return mixed
   */
  public function getCancelled() {
    return $this->cancelled;
  }

  /**
   * @param mixed $cancelled
   */
  public function setCancelled($cancelled): void {
    $this->cancelled = $cancelled;
  }

  /**
   * @return mixed
   */
  public function getRawFileType() {
    return $this->rawFileType;
  }

  /**
   * @param mixed $rawFileType
   */
  public function setRawFileType($rawFileType): void {
    $this->rawFileType = $rawFileType;
  }

  /**
   * @return mixed
   */
  public function getPrintFileType() {
    return $this->printFileType;
  }

  /**
   * @param mixed $printFileType
   */
  public function setPrintFileType($printFileType): void {
    $this->printFileType = $printFileType;
  }

  /**
   * @return mixed
   */
  public function getWebFileType() {
    return $this->WebFileType;
  }

  /**
   * @param mixed $WebFileType
   */
  public function setWebFileType($WebFileType): void {
    $this->WebFileType = $WebFileType;
  }

  /**
   * @return mixed
   */
  public function getNotes() {
    return $this->notes;
  }

  /**
   * @param mixed $notes
   */
  public function setNotes($notes): void {
    $this->notes = $notes;
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
  public function getCreatedbyID() {
    return $this->createdbyID;
  }

  /**
   * @param mixed $createdbyID
   */
  public function setCreatedbyID($createdbyID): void {
    $this->createdbyID = $createdbyID;
  }

  /**
   * @return mixed
   */
  public function getModifiedbyID() {
    return $this->modifiedbyID;
  }

  /**
   * @param mixed $modifiedbyID
   */
  public function setModifiedbyID($modifiedbyID): void {
    $this->modifiedbyID = $modifiedbyID;
  }

  /**
   * @return mixed
   */
  public function getIpnum() {
    return $this->ipnum;
  }

  /**
   * @param mixed $ipnum
   */
  public function setIpnum($ipnum): void {
    $this->ipnum = $ipnum;
  }

  /**
   * @return mixed
   */
  public function getAttendeeID() {
    return $this->attendeeID;
  }

  /**
   * @param mixed $attendeeID
   */
  public function setAttendeeID($attendeeID): void {
    $this->attendeeID = $attendeeID;
  }

  /**
   * @return mixed
   */
  public function getPanelID() {
    return $this->panelID;
  }

  /**
   * @param mixed $panelID
   */
  public function setPanelID($panelID): void {
    $this->panelID = $panelID;
  }

  /**
   * @return mixed
   */
  public function getWhoSuggested() {
    return $this->whoSuggested;
  }

  /**
   * @param mixed $whoSuggested
   */
  public function setWhoSuggested($whoSuggested): void {
    $this->whoSuggested = $whoSuggested;
  }

  /**
   * @return mixed
   */
  public function getWhoEntered() {
    return $this->whoEntered;
  }

  /**
   * @param mixed $whoEntered
   */
  public function setWhoEntered($whoEntered): void {
    $this->whoEntered = $whoEntered;
  }

  /**
   * @return mixed
   */
  public function getDateSuggested() {
    return $this->dateSuggested;
  }

  /**
   * @param mixed $dateSuggested
   */
  public function setDateSuggested($dateSuggested): void {
    $this->dateSuggested = $dateSuggested;
  }


  /**
   * @return mixed
   */
  public function getRecBioDate() {
    return $this->recBioDate;
  }

  /**
   * @param mixed $recBioDate
   */
  public function setRecBioDate($recBioDate): void {
    $this->recBioDate = $recBioDate;
  }

  /**
   * @return mixed
   */
  public function getRecPhoto() {
    return $this->recPhoto;
  }

  /**
   * @param mixed $recPhoto
   */
  public function setRecPhoto($recPhoto): void {
    $this->recPhoto = $recPhoto;
  }

  /**
   * @return mixed
   */
  public function getRecBio() {
    return $this->recBio;
  }

  /**
   * @param mixed $recBio
   */
  public function setRecBio($recBio): void {
    $this->recBio = $recBio;
  }

  /**
   * @return mixed
   */
  public function getRecPhotoDate() {
    return $this->recPhotoDate;
  }

  /**
   * @param mixed $recPhotoDate
   */
  public function setRecPhotoDate($recPhotoDate): void {
    $this->recPhotoDate = $recPhotoDate;
  }

  /**
   * @return mixed
   */
  public function getRecWaiverDate() {
    return $this->recWaiverDate;
  }

  /**
   * @param mixed $recWaiverDate
   */
  public function setRecWaiverDate($recWaiverDate): void {
    $this->recWaiverDate = $recWaiverDate;
  }

  /**
   * @return mixed
   */
  public function getSpkEmail() {
    return $this->spkEmail;
  }

  /**
   * @param mixed $spkEmail
   */
  public function setSpkEmail($spkEmail): void {
    $this->spkEmail = $spkEmail;
  }

  /**
   * @return mixed
   */
  public function getTwitter() {
    return $this->twitter;
  }

  /**
   * @param mixed $twitter
   */
  public function setTwitter($twitter): void {
    $this->twitter = $twitter;
  }

  /**
   * @return mixed
   */
  public function getTwitter2() {
    return $this->twitter2;
  }

  /**
   * @param mixed $twitter2
   */
  public function setTwitter2($twitter2): void {
    $this->twitter2 = $twitter2;
  }

  /**
   * @return mixed
   */
  public function getTwitterNotes() {
    return $this->twitterNotes;
  }

  /**
   * @param mixed $twitterNotes
   */
  public function setTwitterNotes($twitterNotes): void {
    $this->twitterNotes = $twitterNotes;
  }

  /**
   * @return mixed
   */
  public function getInvitationextend() {
    return $this->invitationextend;
  }

  /**
   * @param mixed $invitationextend
   */
  public function setInvitationextend($invitationextend): void {
    $this->invitationextend = $invitationextend;
  }

  /**
   * @return mixed
   */
  public function getInvitationWhom() {
    return $this->invitationWhom;
  }

  /**
   * @param mixed $invitationWhom
   */
  public function setInvitationWhom($invitationWhom): void {
    $this->invitationWhom = $invitationWhom;
  }

  /**
   * @return mixed
   */
  public function getSpideremaildate() {
    return $this->spideremaildate;
  }

  /**
   * @param mixed $spideremaildate
   */
  public function setSpideremaildate($spideremaildate): void {
    $this->spideremaildate = $spideremaildate;
  }

  /**
   * @return mixed
   */
  public function getWhoconfirmed() {
    return $this->whoconfirmed;
  }

  /**
   * @param mixed $whoconfirmed
   */
  public function setWhoconfirmed($whoconfirmed): void {
    $this->whoconfirmed = $whoconfirmed;
  }

  /**
   * @return mixed
   */
  public function getCity() {
    return $this->city;
  }

  /**
   * @param mixed $city
   */
  public function setCity($city): void {
    $this->city = $city;
  }

  /**
   * @return mixed
   */
  public function getDevelopmentPriority() {
    return $this->developmentPriority;
  }

  /**
   * @param mixed $developmentPriority
   */
  public function setDevelopmentPriority($developmentPriority): void {
    $this->developmentPriority = $developmentPriority;
  }

  /**
   * @return mixed
   */
  public function getSpeakerRole() {
    return $this->speakerRole;
  }

  /**
   * @param mixed $speakerRole
   */
  public function setSpeakerRole($speakerRole): void {
    $this->speakerRole = $speakerRole;
  }

  /**
   * @return mixed
   */
  public function getSpeakerTopics() {
    return $this->speakerTopics;
  }

  /**
   * @param mixed $speakerTopics
   */
  public function setSpeakerTopics($speakerTopics): void {
    $this->speakerTopics = $speakerTopics;
  }

  /**
   * @return mixed
   */
  public function getPrimaryTrack() {
    return $this->primaryTrack;
  }

  /**
   * @param mixed $primaryTrack
   */
  public function setPrimaryTrack($primaryTrack): void {
    $this->primaryTrack = $primaryTrack;
  }

  /**
   * @return mixed
   */
  public function getSecondaryTrack() {
    return $this->secondaryTrack;
  }

  /**
   * @param mixed $secondaryTrack
   */
  public function setSecondaryTrack($secondaryTrack): void {
    $this->secondaryTrack = $secondaryTrack;
  }

  /**
   * @return mixed
   */
  public function getTopicNotes() {
    return $this->topicNotes;
  }

  /**
   * @param mixed $topicNotes
   */
  public function setTopicNotes($topicNotes): void {
    $this->topicNotes = $topicNotes;
  }

  /**
   * @return mixed
   */
  public function getConnections() {
    return $this->connections;
  }

  /**
   * @param mixed $connections
   */
  public function setConnections($connections): void {
    $this->connections = $connections;
  }

  /**
   * @return mixed
   */
  public function getDevRelationship() {
    return $this->devRelationship;
  }

  /**
   * @param mixed $devRelationship
   */
  public function setDevRelationship($devRelationship): void {
    $this->devRelationship = $devRelationship;
  }

  /**
   * @return mixed
   */
  public function getDevRelationContact() {
    return $this->devRelationContact;
  }

  /**
   * @param mixed $devRelationContact
   */
  public function setDevRelationContact($devRelationContact): void {
    $this->devRelationContact = $devRelationContact;
  }

  /**
   * @return mixed
   */
  public function getWomensreport() {
    return $this->womensreport;
  }

  /**
   * @param mixed $womensreport
   */
  public function setWomensreport($womensreport): void {
    $this->womensreport = $womensreport;
  }

  /**
   * @return mixed
   */
  public function getLocation() {
    return $this->location;
  }

  /**
   * @param mixed $location
   */
  public function setLocation($location): void {
    $this->location = $location;
  }

  /**
   * @return mixed
   */
  public function getPhotoModDate() {
    return $this->photoModDate;
  }

  /**
   * @param mixed $photoModDate
   */
  public function setPhotoModDate($photoModDate): void {
    $this->photoModDate = $photoModDate;
  }

  /**
   * @return mixed
   */
  public function getDisplayChinese() {
    return $this->displayChinese;
  }

  /**
   * @param mixed $displayChinese
   */
  public function setDisplayChinese($displayChinese): void {
    $this->displayChinese = $displayChinese;
  }

  /**
   * @return mixed
   */
  public function getDevOrganization() {
    return $this->devOrganization;
  }

  /**
   * @param mixed $devOrganization
   */
  public function setDevOrganization($devOrganization): void {
    $this->devOrganization = $devOrganization;
  }

  /**
   * @return mixed
   */
  public function getRoleChangedate() {
    return $this->roleChangedate;
  }

  /**
   * @param mixed $roleChangedate
   */
  public function setRoleChangedate($roleChangedate): void {
    $this->roleChangedate = $roleChangedate;
  }

  /**
   * @return mixed
   */
  public function getCVentID() {
    return $this->cVentID;
  }

  /**
   * @param mixed $cVentID
   */
  public function setCVentID($cVentID): void {
    $this->cVentID = $cVentID;
  }

  /**
   * @return mixed
   */
  public function getPhoneticName() {
    return $this->phoneticName;
  }

  /**
   * @param mixed $phoneticName
   */
  public function setPhoneticName($phoneticName): void {
    $this->phoneticName = $phoneticName;
  }

  /**
   * @return mixed
   */
  public function getNeedsfinaledit() {
    return $this->needsfinaledit;
  }

  /**
   * @param mixed $needsfinaledit
   */
  public function setNeedsfinaledit($needsfinaledit): void {
    $this->needsfinaledit = $needsfinaledit;
  }

  /**
   * @return mixed
   */
  public function getScheduleNotes() {
    return $this->scheduleNotes;
  }

  /**
   * @param mixed $scheduleNotes
   */
  public function setScheduleNotes($scheduleNotes): void {
    $this->scheduleNotes = $scheduleNotes;
  }

  /**
   * @return mixed
   */
  public function getLinkedin() {
    return $this->linkedin;
  }

  /**
   * @param mixed $linkedin
   */
  public function setLinkedin($linkedin): void {
    $this->linkedin = $linkedin;
  }

  /**
   * @return mixed
   */
  public function getSpeakerLiaison() {
    return $this->speakerLiaison;
  }

  /**
   * @param mixed $speakerLiaison
   */
  public function setSpeakerLiaison($speakerLiaison): void {
    $this->speakerLiaison = $speakerLiaison;
  }

  /**
   * @return mixed
   */
  public function getFacebook() {
    return $this->Facebook;
  }

  /**
   * @param mixed $Facebook
   */
  public function setFacebook($Facebook): void {
    $this->Facebook = $Facebook;
  }

  /**
   * @return mixed
   */
  public function getFacebookFollowers() {
    return $this->FacebookFollowers;
  }

  /**
   * @param mixed $FacebookFollowers
   */
  public function setFacebookFollowers($FacebookFollowers): void {
    $this->FacebookFollowers = $FacebookFollowers;
  }

  /**
   * @return mixed
   */
  public function getSalesForceID() {
    return $this->salesForceID;
  }

  /**
   * @param mixed $salesForceID
   */
  public function setSalesForceID($salesForceID): void {
    $this->salesForceID = $salesForceID;
  }

  /**
   * @return mixed
   */
  public function getInstaGram() {
    return $this->instaGram;
  }

  /**
   * @param mixed $instaGram
   */
  public function setInstaGram($instaGram): void {
    $this->instaGram = $instaGram;
  }

  /**
   * @return mixed
   */
  public function getSpeakerId() : int {
    return $this->SpkrID;
  }

  /**
   * @param mixed $speaker_id
   */
  public function setSpeakerId($speaker_id): void {
    $this->SpkrID = $speaker_id;
  }

  /**
   * @return mixed
   */
  public function getEvent() {
    return $this->event;
  }

  /**
   * @param mixed $event
   */
  public function setEvent($event): void {
    $this->event = $event;
  }

  /**
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getPanels(): \Doctrine\Common\Collections\Collection {
    return $this->panels;
  }

  /**
   * @param \Doctrine\Common\Collections\Collection $panels
   */
  public function setPanels(\Doctrine\Common\Collections\Collection $panels): void {
    $this->panels = $panels;
  }



}

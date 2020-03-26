<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository", readOnly=TRUE)
 * @ORM\Table(name="Events")
 * @property int $id
 */
class Event {


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
   * @ORM\Column(name="EventID", type="string", length=255, nullable=true, unique=FALSE)
   * @ORM\GeneratedValue(strategy="NONE")
   */
  private $eventid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Name", type="string", length=255, nullable=true)
   */
  private $name;

  /**
   * @var string|null
   *
   * @ORM\Column(name="nameShort", type="string", length=250, nullable=true)
   */
  private $nameshort;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Type", type="string", length=255, nullable=true)
   */
  private $type;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Description", type="string", length=0, nullable=true)
   */
  private $description;

  /**
   * @var string|null
   *
   * @ORM\Column(name="titleLogo", type="string", length=0, nullable=true)
   */
  private $titlelogo;

  /**
   * @var string|null
   *
   * @ORM\Column(name="file1", type="string", length=255, nullable=true)
   */
  private $file1;

  /**
   * @var string|null
   *
   * @ORM\Column(name="file2", type="string", length=255, nullable=true)
   */
  private $file2;

  /**
   * @var string|null
   *
   * @ORM\Column(name="file3", type="string", length=255, nullable=true)
   */
  private $file3;

  /**
   * @var string|null
   *
   * @ORM\Column(name="file4", type="string", length=255, nullable=true)
   */
  private $file4;

  /**
   * @var string|null
   *
   * @ORM\Column(name="doc1", type="string", length=255, nullable=true)
   */
  private $doc1;

  /**
   * @var string|null
   *
   * @ORM\Column(name="doc2", type="string", length=255, nullable=true)
   */
  private $doc2;

  /**
   * @var string|null
   *
   * @ORM\Column(name="doc3", type="string", length=255, nullable=true)
   */
  private $doc3;

  /**
   * @var string|null
   *
   * @ORM\Column(name="doc4", type="string", length=255, nullable=true)
   */
  private $doc4;

  /**
   * @var int|null
   *
   * @ORM\Column(name="MoY", type="integer", nullable=true)
   */
  private $moy;

  /**
   * @var int|null
   *
   * @ORM\Column(name="DoM", type="integer", nullable=true)
   */
  private $dom;

  /**
   * @var int|null
   *
   * @ORM\Column(name="Year", type="integer", nullable=true)
   */
  private $year;

  /**
   * @var int|null
   *
   * @ORM\Column(name="E_Moy", type="integer", nullable=true)
   */
  private $eMoy;

  /**
   * @var int|null
   *
   * @ORM\Column(name="E_Dom", type="integer", nullable=true)
   */
  private $eDom;

  /**
   * @var int|null
   *
   * @ORM\Column(name="E_Year", type="integer", nullable=true)
   */
  private $eYear;

  /**
   * @var string|null
   *
   * @ORM\Column(name="etime", type="string", length=255, nullable=true)
   */
  private $etime;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Venue", type="string", length=0, nullable=true)
   */
  private $venue;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Speakers", type="string", length=0, nullable=true)
   */
  private $speakers;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="HPShow", type="boolean", nullable=true)
   */
  private $hpshow;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="MIHPshow", type="boolean", nullable=true)
   */
  private $mihpshow;

  /**
   * @var string|null
   *
   * @ORM\Column(name="blurb", type="string", length=0, nullable=true)
   */
  private $blurb;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="publish", type="boolean", nullable=true)
   */
  private $publish;

  /**
   * @var int|null
   *
   * @ORM\Column(name="regdeadMoY", type="integer", nullable=true)
   */
  private $regdeadmoy;

  /**
   * @var int|null
   *
   * @ORM\Column(name="regdeadDoM", type="integer", nullable=true)
   */
  private $regdeaddom;

  /**
   * @var int|null
   *
   * @ORM\Column(name="regdeadYear", type="integer", nullable=true)
   */
  private $regdeadyear;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="CalDisplay", type="boolean", nullable=true)
   */
  private $caldisplay;

  /**
   * @var string|null
   *
   * @ORM\Column(name="Picture", type="string", length=255, nullable=true)
   */
  private $picture;

  /**
   * @var int|null
   *
   * @ORM\Column(name="eventPrice", type="integer", nullable=true)
   */
  private $eventprice;

  /**
   * @var string|null
   *
   * @ORM\Column(name="confirmationEmail", type="string", length=0, nullable=true)
   */
  private $confirmationemail;

  /**
   * @var string|null
   *
   * @ORM\Column(name="confirmationWeb", type="string", length=0, nullable=true)
   */
  private $confirmationweb;

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
   * @var \DateTime|null
   *
   * @ORM\Column(name="dateEvent", type="datetime", nullable=true)
   */
  private $dateevent;

  /**
   * @var bool|null
   *
   * @ORM\Column(name="splashPage", type="boolean", nullable=true)
   */
  private $splashpage;

  /**
   * @var string|null
   *
   * @ORM\Column(name="splashURL", type="string", length=300, nullable=true)
   */
  private $splashurl;

  /**
   * @var int|null
   *
   * @ORM\Column(name="dateAsNum", type="integer", nullable=true)
   */
  private $dateasnum;

  /**
   * @var string|null
   *
   * @ORM\Column(name="campaignName", type="string", length=300, nullable=true)
   */
  private $campaignname;

  /**
   * @var string|null
   *
   * @ORM\Column(name="campaignID", type="string", length=250, nullable=true)
   */
  private $campaignid;

  /**
   * @var string|null
   *
   * @ORM\Column(name="campaignType", type="string", length=250, nullable=true)
   */
  private $campaigntype;

  /**
   * @var string|null
   *
   * @ORM\Column(name="campaignOwner", type="string", length=50, nullable=true)
   */
  private $campaignowner;

  /**
   * @var string|null
   *
   * @ORM\Column(name="campaignTypePublic", type="string", length=250, nullable=true)
   */
  private $campaigntypepublic;

  /**
   * @var string|null
   *
   * @ORM\Column(name="CventID", type="string", length=250, nullable=true)
   */
  private $cventid;



  /**
   * @ORM\OneToMany(targetEntity="Panel", mappedBy="EventID")
   * @ORM\JoinColumn(name="EventID", fieldName="EventID", referencedColumnName="EventID")
   * @var Collection
   */
  private $panels;

  private $tracks;

  public function __construct() {
    $this->panels = new ArrayCollection();
    $this->speakers = new ArrayCollection();
    $this->tracks = new ArrayCollection();
  }

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
   * @return string
   */
  public function getEventid(): string {
    return $this->eventid;
  }

  /**
   * @param string $eventid
   */
  public function setEventid(string $eventid): void {
    $this->eventid = $eventid;
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void {
    $this->name = $name;
  }

  /**
   * @return string|null
   */
  public function getNameshort(): ?string {
    return $this->nameshort;
  }

  /**
   * @param string|null $nameshort
   */
  public function setNameshort(?string $nameshort): void {
    $this->nameshort = $nameshort;
  }

  /**
   * @return string|null
   */
  public function getType(): ?string {
    return $this->type;
  }

  /**
   * @param string|null $type
   */
  public function setType(?string $type): void {
    $this->type = $type;
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
  public function getTitlelogo(): ?string {
    return $this->titlelogo;
  }

  /**
   * @param string|null $titlelogo
   */
  public function setTitlelogo(?string $titlelogo): void {
    $this->titlelogo = $titlelogo;
  }

  /**
   * @return string|null
   */
  public function getFile1(): ?string {
    return $this->file1;
  }

  /**
   * @param string|null $file1
   */
  public function setFile1(?string $file1): void {
    $this->file1 = $file1;
  }

  /**
   * @return string|null
   */
  public function getFile2(): ?string {
    return $this->file2;
  }

  /**
   * @param string|null $file2
   */
  public function setFile2(?string $file2): void {
    $this->file2 = $file2;
  }

  /**
   * @return string|null
   */
  public function getFile3(): ?string {
    return $this->file3;
  }

  /**
   * @param string|null $file3
   */
  public function setFile3(?string $file3): void {
    $this->file3 = $file3;
  }

  /**
   * @return string|null
   */
  public function getFile4(): ?string {
    return $this->file4;
  }

  /**
   * @param string|null $file4
   */
  public function setFile4(?string $file4): void {
    $this->file4 = $file4;
  }

  /**
   * @return string|null
   */
  public function getDoc1(): ?string {
    return $this->doc1;
  }

  /**
   * @param string|null $doc1
   */
  public function setDoc1(?string $doc1): void {
    $this->doc1 = $doc1;
  }

  /**
   * @return string|null
   */
  public function getDoc2(): ?string {
    return $this->doc2;
  }

  /**
   * @param string|null $doc2
   */
  public function setDoc2(?string $doc2): void {
    $this->doc2 = $doc2;
  }

  /**
   * @return string|null
   */
  public function getDoc3(): ?string {
    return $this->doc3;
  }

  /**
   * @param string|null $doc3
   */
  public function setDoc3(?string $doc3): void {
    $this->doc3 = $doc3;
  }

  /**
   * @return string|null
   */
  public function getDoc4(): ?string {
    return $this->doc4;
  }

  /**
   * @param string|null $doc4
   */
  public function setDoc4(?string $doc4): void {
    $this->doc4 = $doc4;
  }

  /**
   * @return int|null
   */
  public function getMoy(): ?int {
    return $this->moy;
  }

  /**
   * @param int|null $moy
   */
  public function setMoy(?int $moy): void {
    $this->moy = $moy;
  }

  /**
   * @return int|null
   */
  public function getDom(): ?int {
    return $this->dom;
  }

  /**
   * @param int|null $dom
   */
  public function setDom(?int $dom): void {
    $this->dom = $dom;
  }

  /**
   * @return int|null
   */
  public function getYear(): ?int {
    return $this->year;
  }

  /**
   * @param int|null $year
   */
  public function setYear(?int $year): void {
    $this->year = $year;
  }

  /**
   * @return int|null
   */
  public function getEMoy(): ?int {
    return $this->eMoy;
  }

  /**
   * @param int|null $eMoy
   */
  public function setEMoy(?int $eMoy): void {
    $this->eMoy = $eMoy;
  }

  /**
   * @return int|null
   */
  public function getEDom(): ?int {
    return $this->eDom;
  }

  /**
   * @param int|null $eDom
   */
  public function setEDom(?int $eDom): void {
    $this->eDom = $eDom;
  }

  /**
   * @return int|null
   */
  public function getEYear(): ?int {
    return $this->eYear;
  }

  /**
   * @param int|null $eYear
   */
  public function setEYear(?int $eYear): void {
    $this->eYear = $eYear;
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
  public function getVenue(): ?string {
    return $this->venue;
  }

  /**
   * @param string|null $venue
   */
  public function setVenue(?string $venue): void {
    $this->venue = $venue;
  }

  /**
   * @return string|null
   */
  public function getSpeakers(): ?string {
    return $this->speakers;
  }

  /**
   * @param string|null $speakers
   */
  public function setSpeakers(?string $speakers): void {
    $this->speakers = $speakers;
  }

  /**
   * @return bool|null
   */
  public function getHpshow(): ?bool {
    return $this->hpshow;
  }

  /**
   * @param bool|null $hpshow
   */
  public function setHpshow(?bool $hpshow): void {
    $this->hpshow = $hpshow;
  }

  /**
   * @return bool|null
   */
  public function getMihpshow(): ?bool {
    return $this->mihpshow;
  }

  /**
   * @param bool|null $mihpshow
   */
  public function setMihpshow(?bool $mihpshow): void {
    $this->mihpshow = $mihpshow;
  }

  /**
   * @return string|null
   */
  public function getBlurb(): ?string {
    return $this->blurb;
  }

  /**
   * @param string|null $blurb
   */
  public function setBlurb(?string $blurb): void {
    $this->blurb = $blurb;
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
   * @return int|null
   */
  public function getRegdeadmoy(): ?int {
    return $this->regdeadmoy;
  }

  /**
   * @param int|null $regdeadmoy
   */
  public function setRegdeadmoy(?int $regdeadmoy): void {
    $this->regdeadmoy = $regdeadmoy;
  }

  /**
   * @return int|null
   */
  public function getRegdeaddom(): ?int {
    return $this->regdeaddom;
  }

  /**
   * @param int|null $regdeaddom
   */
  public function setRegdeaddom(?int $regdeaddom): void {
    $this->regdeaddom = $regdeaddom;
  }

  /**
   * @return int|null
   */
  public function getRegdeadyear(): ?int {
    return $this->regdeadyear;
  }

  /**
   * @param int|null $regdeadyear
   */
  public function setRegdeadyear(?int $regdeadyear): void {
    $this->regdeadyear = $regdeadyear;
  }

  /**
   * @return bool|null
   */
  public function getCaldisplay(): ?bool {
    return $this->caldisplay;
  }

  /**
   * @param bool|null $caldisplay
   */
  public function setCaldisplay(?bool $caldisplay): void {
    $this->caldisplay = $caldisplay;
  }

  /**
   * @return string|null
   */
  public function getPicture(): ?string {
    return $this->picture;
  }

  /**
   * @param string|null $picture
   */
  public function setPicture(?string $picture): void {
    $this->picture = $picture;
  }

  /**
   * @return int|null
   */
  public function getEventprice(): ?int {
    return $this->eventprice;
  }

  /**
   * @param int|null $eventprice
   */
  public function setEventprice(?int $eventprice): void {
    $this->eventprice = $eventprice;
  }

  /**
   * @return string|null
   */
  public function getConfirmationemail(): ?string {
    return $this->confirmationemail;
  }

  /**
   * @param string|null $confirmationemail
   */
  public function setConfirmationemail(?string $confirmationemail): void {
    $this->confirmationemail = $confirmationemail;
  }

  /**
   * @return string|null
   */
  public function getConfirmationweb(): ?string {
    return $this->confirmationweb;
  }

  /**
   * @param string|null $confirmationweb
   */
  public function setConfirmationweb(?string $confirmationweb): void {
    $this->confirmationweb = $confirmationweb;
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
   * @return \DateTime|null
   */
  public function getDateevent(): ?\DateTime {
    return $this->dateevent;
  }

  /**
   * @param \DateTime|null $dateevent
   */
  public function setDateevent(?\DateTime $dateevent): void {
    $this->dateevent = $dateevent;
  }

  /**
   * @return bool|null
   */
  public function getSplashpage(): ?bool {
    return $this->splashpage;
  }

  /**
   * @param bool|null $splashpage
   */
  public function setSplashpage(?bool $splashpage): void {
    $this->splashpage = $splashpage;
  }

  /**
   * @return string|null
   */
  public function getSplashurl(): ?string {
    return $this->splashurl;
  }

  /**
   * @param string|null $splashurl
   */
  public function setSplashurl(?string $splashurl): void {
    $this->splashurl = $splashurl;
  }

  /**
   * @return int|null
   */
  public function getDateasnum(): ?int {
    return $this->dateasnum;
  }

  /**
   * @param int|null $dateasnum
   */
  public function setDateasnum(?int $dateasnum): void {
    $this->dateasnum = $dateasnum;
  }

  /**
   * @return string|null
   */
  public function getCampaignname(): ?string {
    return $this->campaignname;
  }

  /**
   * @param string|null $campaignname
   */
  public function setCampaignname(?string $campaignname): void {
    $this->campaignname = $campaignname;
  }

  /**
   * @return string|null
   */
  public function getCampaignid(): ?string {
    return $this->campaignid;
  }

  /**
   * @param string|null $campaignid
   */
  public function setCampaignid(?string $campaignid): void {
    $this->campaignid = $campaignid;
  }

  /**
   * @return string|null
   */
  public function getCampaigntype(): ?string {
    return $this->campaigntype;
  }

  /**
   * @param string|null $campaigntype
   */
  public function setCampaigntype(?string $campaigntype): void {
    $this->campaigntype = $campaigntype;
  }

  /**
   * @return string|null
   */
  public function getCampaignowner(): ?string {
    return $this->campaignowner;
  }

  /**
   * @param string|null $campaignowner
   */
  public function setCampaignowner(?string $campaignowner): void {
    $this->campaignowner = $campaignowner;
  }

  /**
   * @return string|null
   */
  public function getCampaigntypepublic(): ?string {
    return $this->campaigntypepublic;
  }

  /**
   * @param string|null $campaigntypepublic
   */
  public function setCampaigntypepublic(?string $campaigntypepublic): void {
    $this->campaigntypepublic = $campaigntypepublic;
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

  /**
   * @return \Doctrine\Common\Collections\ArrayCollection
   */
  public function getTracks(): \Doctrine\Common\Collections\ArrayCollection {
    return $this->tracks;
  }

  /**
   * @param \Doctrine\Common\Collections\ArrayCollection $tracks
   */
  public function setTracks(\Doctrine\Common\Collections\ArrayCollection $tracks): void {
    $this->tracks = $tracks;
  }




}

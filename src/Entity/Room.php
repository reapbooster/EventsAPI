<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository", readOnly=TRUE)
 * @ORM\Table(name="gcHiltonRooms")
 *
 * @property int $roomId
 * @property string $rname
 */
class Room {

  /**
   * @var int
   *
   * @ORM\Column(name="room_id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $roomId;

  /**
   * @var string|null
   *
   * @ORM\Column(name="rName", type="string", length=250, nullable=true)
   */
  private $rname;

  /**
   * @var int|null
   *
   * @ORM\Column(name="schoolhousecap", type="integer", nullable=true)
   */
  private $schoolhousecap;

  /**
   * @var int|null
   *
   * @ORM\Column(name="roundscap", type="integer", nullable=true)
   */
  private $roundscap;

  /**
   * @var int|null
   *
   * @ORM\Column(name="theatercap", type="integer", nullable=true)
   */
  private $theatercap;

  /**
   * @var int|null
   *
   * @ORM\Column(name="hollowSquare", type="integer", nullable=true)
   */
  private $hollowsquare;

  /**
   * @var int|null
   *
   * @ORM\Column(name="conference", type="integer", nullable=true)
   */
  private $conference;

  /**
   * @var string|null
   *
   * @ORM\Column(name="notes", type="string", length=0, nullable=true)
   */
  private $notes;

  /**
   * @var int|null
   *
   * @ORM\Column(name="sortorder", type="integer", nullable=true)
   */
  private $sortorder;

  /**
   * @var string|null
   *
   * @ORM\Column(name="roomGroup", type="string", length=50, nullable=true)
   */
  private $roomgroup;

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
   * @ORM\Column(name="eventType", type="string", length=50, nullable=true)
   */
  private $eventtype;

  /**
   * @var int|null
   *
   * @ORM\Column(name="lounge", type="integer", nullable=true)
   */
  private $lounge;

  /**
   * @var int|null
   *
   * @ORM\Column(name="reception", type="integer", nullable=true)
   */
  private $reception;

  /**
   * @var int|null
   *
   * @ORM\Column(name="tour", type="integer", nullable=true)
   */
  private $tour;

  /**
   * @var int|null
   *
   * @ORM\Column(name="hollowCircle", type="integer", nullable=true)
   */
  private $hollowcircle;

  /**
   * @var int|null
   *
   * @ORM\Column(name="uShape", type="integer", nullable=true)
   */
  private $ushape;

  function __construct() {
    $this->panels = new ArrayCollection();
  }


  public function getId(): ?int {
    return $this->roomId;
  }

  /**
   * @return int
   */
  public function getRoomId(): int {
    return $this->roomId;
  }

  /**
   * @param int $roomId
   */
  public function setRoomId(int $roomId): void {
    $this->roomId = $roomId;
  }

  /**
   * @return string
   */
  public function getRname(): string {
    return $this->rname;
  }

  /**
   * @param string $rname
   */
  public function setRname(string $rname): void {
    $this->rname = $rname;
  }

  /**
   * @return int|null
   */
  public function getSchoolhousecap(): ?int {
    return $this->schoolhousecap;
  }

  /**
   * @param int|null $schoolhousecap
   */
  public function setSchoolhousecap(?int $schoolhousecap): void {
    $this->schoolhousecap = $schoolhousecap;
  }

  /**
   * @return int|null
   */
  public function getRoundscap(): ?int {
    return $this->roundscap;
  }

  /**
   * @param int|null $roundscap
   */
  public function setRoundscap(?int $roundscap): void {
    $this->roundscap = $roundscap;
  }

  /**
   * @return int|null
   */
  public function getTheatercap(): ?int {
    return $this->theatercap;
  }

  /**
   * @param int|null $theatercap
   */
  public function setTheatercap(?int $theatercap): void {
    $this->theatercap = $theatercap;
  }

  /**
   * @return int|null
   */
  public function getHollowsquare(): ?int {
    return $this->hollowsquare;
  }

  /**
   * @param int|null $hollowsquare
   */
  public function setHollowsquare(?int $hollowsquare): void {
    $this->hollowsquare = $hollowsquare;
  }

  /**
   * @return int|null
   */
  public function getConference(): ?int {
    return $this->conference;
  }

  /**
   * @param int|null $conference
   */
  public function setConference(?int $conference): void {
    $this->conference = $conference;
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
   * @return string|null
   */
  public function getRoomgroup(): ?string {
    return $this->roomgroup;
  }

  /**
   * @param string|null $roomgroup
   */
  public function setRoomgroup(?string $roomgroup): void {
    $this->roomgroup = $roomgroup;
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
  public function getEventtype(): ?string {
    return $this->eventtype;
  }

  /**
   * @param string|null $eventtype
   */
  public function setEventtype(?string $eventtype): void {
    $this->eventtype = $eventtype;
  }

  /**
   * @return int|null
   */
  public function getLounge(): ?int {
    return $this->lounge;
  }

  /**
   * @param int|null $lounge
   */
  public function setLounge(?int $lounge): void {
    $this->lounge = $lounge;
  }

  /**
   * @return int|null
   */
  public function getReception(): ?int {
    return $this->reception;
  }

  /**
   * @param int|null $reception
   */
  public function setReception(?int $reception): void {
    $this->reception = $reception;
  }

  /**
   * @return int|null
   */
  public function getTour(): ?int {
    return $this->tour;
  }

  /**
   * @param int|null $tour
   */
  public function setTour(?int $tour): void {
    $this->tour = $tour;
  }

  /**
   * @return int|null
   */
  public function getHollowcircle(): ?int {
    return $this->hollowcircle;
  }

  /**
   * @param int|null $hollowcircle
   */
  public function setHollowcircle(?int $hollowcircle): void {
    $this->hollowcircle = $hollowcircle;
  }

  /**
   * @return int|null
   */
  public function getUshape(): ?int {
    return $this->ushape;
  }

  /**
   * @param int|null $ushape
   */
  public function setUshape(?int $ushape): void {
    $this->ushape = $ushape;
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

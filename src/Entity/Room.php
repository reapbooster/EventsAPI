<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 * @ORM\Table(name="gcHiltonRooms")
 */
class Room
{
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(name="room_id", type="integer")
   */
  private $id;

  /**
   * @ORM\Column(name="rName", type="string")
   */
  private $rName;

  /**
   * @ORM\Column(name="schoolhousecap", type="string")
   */
  private $schoolhousecap;

  /**
   * @ORM\Column(name="roundscap",type="string")
   */
  private $roundscap;

  /**
   * @ORM\Column(name="theatercap", type="string")
   */
  private $theatercap;

  /**
   * @ORM\Column(name="hollowSquare", type="string")
   */
  private $hollowSquare;

  /**
   * @ORM\Column(name="conference", type="string")
   */
  private $conference;

  /**
   * @ORM\Column(name="notes", type="string")
   */
  private $notes;

  /**
   * @ORM\Column(name="sortOrder", type="integer")
   */
  private $sortOrder;

  /**
   * @ORM\Column(name="roomGroup", type="string")
   */
  private $roomGroup;

  /**
   * @ORM\Column(name="datecreated", type="datetime")
   */
  private $datecreated;

  /**
   * @ORM\Column(name="datemodified", type="datetime")
   */
  private $datemodified;

  /**
   * @ORM\Column(name="eventType", type="string")
   */
  private $eventType;

  /**
   * @ORM\Column(name="lounge", type="string")
   */
  private $lounge;

  /**
   * @ORM\Column(name="reception", type="string")
   */
  private $reception;

  /**
   * @ORM\Column(name="tour", type="string")
   */
  private $tour;

  /**
   * @ORM\Column(name="hollowCircle", type="string")
   */
  private $hollowCircle;

  /**
   * @ORM\Column(name="uShape", type="string")
   */
  private $uShape;


  public function getId(): ?int {
    return $this->id;
  }


  /**
   * @return mixed
   */
  public function getRName() {
    return $this->rName;
  }

  /**
   * @param mixed $rName
   */
  public function setRName($rName): void {
    $this->rName = $rName;
  }

  /**
   * @return mixed
   */
  public function getSchoolhousecap() {
    return $this->schoolhousecap;
  }

  /**
   * @param mixed $schoolhousecap
   */
  public function setSchoolhousecap($schoolhousecap): void {
    $this->schoolhousecap = $schoolhousecap;
  }

  /**
   * @return mixed
   */
  public function getRoundscap() {
    return $this->roundscap;
  }

  /**
   * @param mixed $roundscap
   */
  public function setRoundscap($roundscap): void {
    $this->roundscap = $roundscap;
  }

  /**
   * @return mixed
   */
  public function getTheatercap() {
    return $this->theatercap;
  }

  /**
   * @param mixed $theatercap
   */
  public function setTheatercap($theatercap): void {
    $this->theatercap = $theatercap;
  }

  /**
   * @return mixed
   */
  public function getHollowSquare() {
    return $this->hollowSquare;
  }

  /**
   * @param mixed $hollowSquare
   */
  public function setHollowSquare($hollowSquare): void {
    $this->hollowSquare = $hollowSquare;
  }

  /**
   * @return mixed
   */
  public function getConference() {
    return $this->conference;
  }

  /**
   * @param mixed $conference
   */
  public function setConference($conference): void {
    $this->conference = $conference;
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
  public function getSortOrder() {
    return $this->sortOrder;
  }

  /**
   * @param mixed $sortOrder
   */
  public function setSortOrder($sortOrder): void {
    $this->sortOrder = $sortOrder;
  }

  /**
   * @return mixed
   */
  public function getRoomGroup() {
    return $this->roomGroup;
  }

  /**
   * @param mixed $roomGroup
   */
  public function setRoomGroup($roomGroup): void {
    $this->roomGroup = $roomGroup;
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
  public function getEventType() {
    return $this->eventType;
  }

  /**
   * @param mixed $eventType
   */
  public function setEventType($eventType): void {
    $this->eventType = $eventType;
  }

  /**
   * @return mixed
   */
  public function getLounge() {
    return $this->lounge;
  }

  /**
   * @param mixed $lounge
   */
  public function setLounge($lounge): void {
    $this->lounge = $lounge;
  }

  /**
   * @return mixed
   */
  public function getReception() {
    return $this->reception;
  }

  /**
   * @param mixed $reception
   */
  public function setReception($reception): void {
    $this->reception = $reception;
  }

  /**
   * @return mixed
   */
  public function getTour() {
    return $this->tour;
  }

  /**
   * @param mixed $tour
   */
  public function setTour($tour): void {
    $this->tour = $tour;
  }

  /**
   * @return mixed
   */
  public function getHollowCircle() {
    return $this->hollowCircle;
  }

  /**
   * @param mixed $hollowCircle
   */
  public function setHollowCircle($hollowCircle): void {
    $this->hollowCircle = $hollowCircle;
  }

  /**
   * @return mixed
   */
  public function getUShape() {
    return $this->uShape;
  }

  /**
   * @param mixed $uShape
   */
  public function setUShape($uShape): void {
    $this->uShape = $uShape;
  }
}

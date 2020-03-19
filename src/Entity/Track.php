<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrackRepository")
 * @ORM\Table(name="gcTracks")
 */
class Track {

  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(name="track_ID", type="integer")
   */
  private $id;

  /**
   * @ORM\Column(name="trackName", type="string")
   */
  private $trackName;

  /**
   * @ORM\Column(name="trackDescription", type="string")
   */
  private $trackDescription;

  /**
   * @ORM\Column(name="event_ID", type="integer")
   */
  private $event_ID;

  /**
   * @ORM\Column(name="datecreated", type="datetime")
   */
  private $datecreated;

  /**
   * @ORM\Column(name="datemodified", type="datetime")
   */
  private $datemodified;

  /**
   * @ORM\Column(name="tracktype", type="string")
   */
  private $tracktype;

  public function getId(): ?int {
    return $this->id;
  }

  /**
   * @return mixed
   */
  public function getTrackName() {
    return $this->trackName;
  }

  /**
   * @param mixed $trackName
   */
  public function setTrackName($trackName): void {
    $this->trackName = $trackName;
  }

  /**
   * @return mixed
   */
  public function getTrackDescription() {
    return $this->trackDescription;
  }

  /**
   * @param mixed $trackDescription
   */
  public function setTrackDescription($trackDescription): void {
    $this->trackDescription = $trackDescription;
  }

  /**
   * @return mixed
   */
  public function getEventID() {
    return $this->event_ID;
  }

  /**
   * @param mixed $event_ID
   */
  public function setEventID($event_ID): void {
    $this->event_ID = $event_ID;
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
  public function getTracktype() {
    return $this->tracktype;
  }

  /**
   * @param mixed $tracktype
   */
  public function setTracktype($tracktype): void {
    $this->tracktype = $tracktype;
  }


}
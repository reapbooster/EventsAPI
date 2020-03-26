<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrackRepository", readOnly=true)
 * @ORM\Table(name="gcTracks",
 *   indexes={@ORM\Index(name="track_ID", columns={"track_ID"})}
 * )
 * @property int $trackId
 * @property int $trackName
 */
class Track {

  /**
   * @var int
   *
   * @ORM\Column(name="track_ID", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $trackId;

  /**
   * @var string|null
   *
   * @ORM\Column(name="trackName", type="string", length=250, nullable=true)
   */
  private $trackname;

  /**
   * @var string|null
   *
   * @ORM\Column(name="trackDescription", type="string", length=0, nullable=true)
   */
  private $trackdescription;

  /**
   * @var string|null
   *
   * @ORM\Column(name="event_ID", type="string", length=50, nullable=true)
   */
  private $eventId;

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
   * @ORM\Column(name="tracktype", type="string", length=250, nullable=true)
   */
  private $tracktype;

  /**
   * @ORM\OneToOne(targetEntity="Event", mappedBy="EventID")
   * @ORM\JoinColumn(name="EventID", referencedColumnName="EventID")
   * @var \App\Entity\Event
   */
  private $event;

  private $panels;

  function __construct() {
    $this->event = new Event();
  }


  public function getId(): ?int {
    return $this->trackId;
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


}

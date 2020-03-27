<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrackRepository", readOnly=true)
 * @ORM\Table(name="gcTracks")
 * @property int $trackId
 * @property string $trackname
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

  function __construct() {
    $this->event = new Event();
  }


  public function getId(): ?int {
    return $this->trackId;
  }

  /**
   * @return int
   */
  public function getTrackId(): int {
    return $this->trackId;
  }

  /**
   * @param int $trackId
   */
  public function setTrackId(int $trackId): void {
    $this->trackId = $trackId;
  }

  /**
   * @return int
   */
  public function getTrackname(): string {
    return $this->trackname;
  }

  /**
   * @param int $trackname
   */
  public function setTrackname(string $trackname): void {
    $this->trackname = $trackname;
  }

  /**
   * @return string|null
   */
  public function getTrackdescription(): ?string {
    return $this->trackdescription;
  }

  /**
   * @param string|null $trackdescription
   */
  public function setTrackdescription(?string $trackdescription): void {
    $this->trackdescription = $trackdescription;
  }

  /**
   * @return string|null
   */
  public function getEventId(): ?string {
    return $this->eventId;
  }

  /**
   * @param string|null $eventId
   */
  public function setEventId(?string $eventId): void {
    $this->eventId = $eventId;
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
  public function getTracktype(): ?string {
    return $this->tracktype;
  }

  /**
   * @param string|null $tracktype
   */
  public function setTracktype(?string $tracktype): void {
    $this->tracktype = $tracktype;
  }





}

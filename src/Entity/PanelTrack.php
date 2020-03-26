<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanelTrackRepository", readOnly=TRUE)
 * @ORM\Table(name="gctracklinks")
 * @property int $id
 * @property int $panel_id
 * @property int $track_id
 */
class PanelTrack {

  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(name="id", type="integer")
   */
  private $id;

  /**
   * @ORM\Id()
   * @ORM\GeneratedValue(strategy="NONE")
   * @ORM\Column(name="panel_id")
   * @var integer
   */
  private $panel_id;

  /**
   * @ORM\Id()
   * @ORM\GeneratedValue(strategy="NONE")
   * @ORM\Column(name="track_id")
   * @var integer
   */
  private $track_id;

  /**
   * @ORM\ManyToMany(targetEntity="Panel", mappedBy="id" )
   * @ORM\JoinColumn(name="panel_id", referencedColumnName="ID")
   * @var \App\Entity\Panel
   */
  private $panel;

  /**
   * @ORM\OneToOne(targetEntity="Track", mappedBy="panel")
   * @ORM\JoinColumn(name="track_id", referencedColumnName="track_ID")
   * @var \App\Entity\Track
   */
  private $track;


  public function getId(): ?int {
    return $this->id;
  }

  /**
   * @return int
   */
  public function getPanelId(): int {
    return $this->panel_id;
  }

  /**
   * @param int $panel_id
   */
  public function setPanelId(int $panel_id): void {
    $this->panel_id = $panel_id;
  }

  /**
   * @return int
   */
  public function getTrackId(): int {
    return $this->track_id;
  }

  /**
   * @param int $track_id
   */
  public function setTrackId(int $track_id): void {
    $this->track_id = $track_id;
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
  public function getTrack() {
    return $this->track;
  }

  /**
   * @param mixed $track
   */
  public function setTrack($track): void {
    $this->track = $track;
  }




}

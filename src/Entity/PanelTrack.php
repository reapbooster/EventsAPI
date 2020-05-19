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
   * @var integer
   *
   * @ORM\Column(name="panel_id", type="integer", nullable=FALSE, unique=FALSE)
   */
  private $panel_id;

  /**
   * @var integer
   *
   * @ORM\Column(name="track_id", type="integer", nullable=FALSE, unique=FALSE)
   */
  private $track_id;


  public function getId(): ?int {
    return $this->id;
  }

  /**
   * @return int
   */
  public function getPanelId(): ?int {
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
  public function getTrackId(): ?int {
    return $this->track_id;
  }

  /**
   * @param int $track_id
   */
  public function setTrackId(int $track_id): void {
    $this->track_id = $track_id;
  }





}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanelSpeakerRepository", readOnly=TRUE)
 * @ORM\Table(name="gcspeakerlinks",
 *   indexes={
 *      @ORM\Index(name="panel_id", columns={"panel_id"}),
 *      @ORM\Index(name="speaker_id", columns={"speaker_id"}),
 *   }
 * )
 * @property int $speaker_id;
 * @property int $panel_id;
 */
class PanelSpeaker {

  /**
   * @ORM\Id
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   * @var int
   */
  private $id;

  /**
   * @ORM\Column(name="speaker_id", type="integer")
   * @var int
   */
  private $speaker_id;

  /**
   * @ORM\Column(name="panel_id", type="integer")
   * @var int
   */
  private $panel_id;

  /**
   * @var string
   */
  private $role;

  /**
   * @var int
   */
  private $showfloworder;

  /**
   * @var int
   */
  private $datecreated;

  /**
   * @var int
   */
  private $datemodified;

  /**
   * @var string
   */
  private $micontactidMod;

  /**
   * @ORM\ManyToMany(targetEntity="Speaker", mappedBy="panels")
   * @ORM\JoinColumn(name="speaker_id", referencedColumnName="SpkrID")
   * @var \App\Entity\Speaker
   */
  private $speaker;

  /**
   * @ORM\ManyToMany(targetEntity="Panel", mappedBy="speakers")
   * @ORM\JoinColumn(name="panel_id", referencedColumnName="id")
   * @var \App\Entity\Panel
   */
  private $panel;

  /**
   * @return int|null
   */
  public function getId(): ?int {
    return $this->id;
  }

  /**
   * @return mixed
   */
  public function getSpeakerId() {
    return $this->speaker_id;
  }

  /**
   * @param mixed $speaker_id
   */
  public function setSpeakerId($speaker_id): void {
    $this->speaker_id = $speaker_id;
  }

  /**
   * @return mixed
   */
  public function getPanelId() {
    return $this->panel_id;
  }

  /**
   * @param mixed $panel_id
   */
  public function setPanelId($panel_id): void {
    $this->panel_id = $panel_id;
  }

  /**
   * @return mixed
   */
  public function getRole() {
    return $this->role;
  }

  /**
   * @param mixed $role
   */
  public function setRole($role): void {
    $this->role = $role;
  }

  /**
   * @return mixed
   */
  public function getShowfloworder() {
    return $this->showfloworder;
  }

  /**
   * @param mixed $showfloworder
   */
  public function setShowfloworder($showfloworder): void {
    $this->showfloworder = $showfloworder;
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
  public function getMicontactidMod() {
    return $this->micontactidMod;
  }

  /**
   * @param mixed $micontactidMod
   */
  public function setMicontactidMod($micontactidMod): void {
    $this->micontactidMod = $micontactidMod;
  }


}

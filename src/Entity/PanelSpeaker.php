<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanelSpeakerRepository", readOnly=TRUE)
 * @ORM\Table(name="gcspeakerlinks")
 * @property int $speaker_id;
 * @property int $panel_id;
 * @property string $role;
 */
class PanelSpeaker {

  /**
   * @ORM\Column(type="integer", nullable=FALSE, unique=TRUE)
   */
  private $id;

  /**
   * @var int
   * @ORM\Column(name="speaker_id", type="integer", nullable=FALSE, unique=TRUE)
   */
  private $speaker_id;

  /**
   * @var int
   *
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="NONE")
   * @ORM\Column(name="panel_id", type="integer", nullable=FALSE, unique=FALSE)
   */
  private $panel_id;

  /**
   *
   * @ORM\Column(name="role", type="string")
   * @var string
   */
  private $role;

  /**
   * @ORM\Column(name="showfloworder", type="integer")
   * @var int
   */
  private $showfloworder;

  /**
   * @ORM\Column(name="datecreated", type="datetime")
   */
  private $datecreated;

  /**
   * @ORM\Column(name="datemodified", type="datetime")
   * @var int
   */
  private $datemodified;

  /**
   * @var string
   */
  private $micontactidMod;

  /**
   * @var \App\Entity\Panel $panel
   *
   * @ORM\ManyToOne(targetEntity="App\Entity\Panel")
   * @ORM\JoinColumn(name="panel_id", referencedColumnName="ID")
   */
  private $panel;


  /**
   * @var \App\Entity\Speaker $speaker
   *
   * @ORM\OneToOne(targetEntity="App\Entity\Speaker");
   * @ORM\JoinColumn(name="speaker_id", referencedColumnName="SpkrID")

  private $speaker;
   */

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

  public function getSpeaker(): Speaker {
    return new Speaker();
  }

  public function getPanelUrl(): ?string {
    return (!empty($this->panel_id)) ? "/panels/" . $this->getPanelId() : NULL;
  }

  public function getSpeakerUrl(): ?string {
    return (!empty($this->speaker_id)) ? "/speakers/" . $this->getSpeakerId() : NULL;
  }

}

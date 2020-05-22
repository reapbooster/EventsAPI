<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanelRoomRepository", readOnly=TRUE)
 * @ORM\Table(name="gcroomlinks")
 * @property int $id
 * @property int $panel_id
 * @property int $room_id
 */
class PanelRoom {

  /**
   * @var int $id
   *
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="NONE")
   * @ORM\Column(name="id", type="integer", nullable=FALSE, unique=TRUE)
   */
  private $id;

  /**
   * @var int $panel_id
   *
   * @ORM\Column(name="panel_id", type="integer", nullable=FALSE, unique=FALSE)
   */
  private $panel_id;

  /**
   * @var int $room_id
   *
   * @ORM\Column(name="room_id", type="integer", nullable=FALSE, unique=FALSE)
   */
  private $room_id;

  /**
   * @ORM\Column(name="type", type="string")
   */
  private $type;

  /**
   * @ORM\Column(name="datecreated", type="datetime")
   */
  private $datecreated;

  /**
   * @ORM\Column(name="datemodified", type="datetime")
   */
  private $datemodified;

  /**
   * @return int|null
   */
  public function getId(): int {
    return $this->panel_id;
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
  public function getRoomId() {
    return $this->room_id;
  }

  /**
   * @param mixed $room_id
   */
  public function setRoomId($room_id): void {
    $this->room_id = $room_id;
  }

  /**
   * @return mixed
   */
  public function getType() {
    return $this->type;
  }

  /**
   * @param mixed $type
   */
  public function setType($type): void {
    $this->type = $type;
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
   * @return Panel[]
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
  public function getRoom() {
    return $this->room;
  }

  /**
   * @param mixed $room
   */
  public function setRoom($room): void {
    $this->room = $room;
  }

}

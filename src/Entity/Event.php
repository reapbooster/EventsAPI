<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 * @ORM\Table(name="Events")
 */
class Event {


  /**
   * @ORM\Id()
   * @ORM\GeneratedValue(strategy="NONE")
   * @ORM\Column(name="EventID", type="string", nullable=true, unique=false)
   */
  private $EventID;

  /**
   * @ORM\Column(name="Name", type="string", length=255, nullable=true)
   */
  private $Name;

  /**
   * @ORM\Column(name="nameShort", type="string", length=255, nullable=true)
   */
  private $nameShort;

  /**
   * @ORM\Column(name="Type", type="string", length=255, nullable=true)
   */
  private $Type;

  /**
   * @ORM\Column(name="Description", type="text", nullable=true)
   */
  private $Description;

  /**
   * @ORM\OneToMany(targetEntity="Panel", mappedBy="event")
   * @ORM\JoinColumn(name="EventID", fieldName="EventID")
   */
  private $panels;

  public function __construct() {
    $this->panels = new ArrayCollection();
  }

  public function getId(): ?string {
    return $this->EventID;
  }

  public function getEventID(): ?string {
    return $this->EventID;
  }


  public function getName(): ?string {
    return $this->Name;
  }

  public function setName(?string $Name): self {
    $this->Name = $Name;

    return $this;
  }

  public function getNameShort(): ?string {
    return $this->nameShort;
  }

  public function setNameShort(?string $nameShort): self {
    $this->nameShort = $nameShort;

    return $this;
  }

  public function getType(): ?string {
    return $this->Type;
  }

  public function setType(?string $Type): self {
    $this->Type = $Type;

    return $this;
  }

  public function getDescription(): ?string {
    return $this->Description;
  }

  public function setDescription(?string $Description): self {
    $this->Description = $Description;

    return $this;
  }

  /**
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getPanels(): ? Collection {
    return $this->panels;
  }

  /**
   * @param \Doctrine\Common\Collections\Collection $panels
   */
  public function setPanels(Collection $panels) {
    $this->panels = $panels;
    return $this;
  }

}

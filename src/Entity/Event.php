<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 * @ORM\Table(name="Events")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="EventID", type="string", length=255, nullable=true)
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventID(): ?string
    {
        return $this->EventID;
    }

    public function setEventID(?string $EventID): self
    {
        $this->EventID = $EventID;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getNameShort(): ?string
    {
        return $this->nameShort;
    }

    public function setNameShort(?string $nameShort): self
    {
        $this->nameShort = $nameShort;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

}

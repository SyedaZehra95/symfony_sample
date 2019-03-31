<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UnattendedRepository")
 */
class Unattended
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $zone;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $imageBase;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yob;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $ethnicity;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $emotion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getImageBase(): ?string
    {
        return $this->imageBase;
    }

    public function setImageBase(?string $imageBase): self
    {
        $this->imageBase = $imageBase;

        return $this;
    }

    public function getYob(): ?int
    {
        return $this->yob;
    }

    public function setYob(?int $yob): self
    {
        $this->yob = $yob;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEthnicity(): ?string
    {
        return $this->ethnicity;
    }

    public function setEthnicity(?string $ethnicity): self
    {
        $this->ethnicity = $ethnicity;

        return $this;
    }

    public function getEmotion(): ?string
    {
        return $this->emotion;
    }

    public function setEmotion(?string $emotion): self
    {
        $this->emotion = $emotion;

        return $this;
    }
}

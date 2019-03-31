<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\SpottedCasesRepository")
 */
class SpottedCases
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $caseId;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $galleryCase;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $zone;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $gallery;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $ethnicity;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $imageBase;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $spottedAt;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $emotion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCaseId(): ?string
    {
        return $this->caseId;
    }

    public function setCaseId(?string $caseId): self
    {
        $this->caseId = $caseId;

        return $this;
    }

    public function getGalleryCase(): ?string
    {
        return $this->galleryCase;
    }

    public function setGalleryCase(?string $galleryCase): self
    {
        $this->galleryCase = $galleryCase;

        return $this;
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

    public function getGallery(): ?string
    {
        return $this->gallery;
    }

    public function setGallery(?string $gallery): self
    {
        $this->gallery = $gallery;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

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

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(?string $age): self
    {
        $this->age = $age;

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

    public function getImageBase(): ?string
    {
        return $this->imageBase;
    }

    public function setImageBase(?string $imageBase): self
    {
        $this->imageBase = $imageBase;

        return $this;
    }

    public function getSpottedAt(): ?string
    {
        return $this->spottedAt;
    }

    public function setSpottedAt(?string $spottedAt): self
    {
        $this->spottedAt = $spottedAt;

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

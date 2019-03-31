<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\GalleryRepository")
 */
class Gallery
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer",unique=true)
     */
    private $caseID;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $gallery;

    /**
     * @ORM\Column(type="text")
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $transactionID;

    /**
     * @ORM\Column(type="boolean")
     */
    private $eyes;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=3)
     */
    private $x;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=3)
     */
    private $y_left;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=3)
     */
    private $x_right;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=3)
     */
    private $y_right;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=3)
     */
    private $confidence;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=3)
     */
    private $eyeConfidence;

    /**
     * @ORM\Column(type="boolean")
     */
    private $rejected;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCaseID(): ?int
    {
        return $this->caseID;
    }

    public function setCaseID(int $caseID)
    {
        $this->caseID = $caseID;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getGallery(): ?string
    {
        return $this->gallery;
    }

    public function setGallery(string $gallery)
    {
        $this->gallery = $gallery;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }

    public function getTransactionID(): ?string
    {
        return $this->transactionID;
    }

    public function setTransactionID(string $transactionID)
    {
        $this->transactionID = $transactionID;

        return $this;
    }

    public function getEyes(): ?bool
    {
        return $this->eyes;
    }

    public function setEyes(bool $eyes)
    {
        $this->eyes = $eyes;

        return $this;
    }

    public function getXLeft()
    {
        return $this->x;
    }

    public function setXLeft($x)
    {
        $this->x = $x;

        return $this;
    }

    public function getYLeft()
    {
        return $this->y_left;
    }

    public function setYLeft($y_left)
    {
        $this->y_left = $y_left;

        return $this;
    }

    public function getXRight()
    {
        return $this->x_right;
    }

    public function setXRight($x_right)
    {
        $this->x_right = $x_right;

        return $this;
    }

    public function getYRight()
    {
        return $this->y_right;
    }

    public function setYRight($y_right)
    {
        $this->y_right = $y_right;

        return $this;
    }

    public function getConfidence()
    {
        return $this->confidence;
    }

    public function setConfidence($confidence)
    {
        $this->confidence = $confidence;

        return $this;
    }

    public function getEyeConfidence()
    {
        return $this->eyeConfidence;
    }

    public function setEyeConfidence($eyeConfidence)
    {
        $this->eyeConfidence = $eyeConfidence;

        return $this;
    }

    public function getRejected(): ?bool
    {
        return $this->rejected;
    }

    public function setRejected(bool $rejected)
    {
        $this->rejected = $rejected;

        return $this;
    }
}

<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\GenderRepository")
 */
class Gender
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $time;

    /**
     * @ORM\Column(type="integer")
     */
    private $male;

    /**
     * @ORM\Column(type="integer")
     */
    private $female;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getMale(): ?int
    {
        return $this->male;
    }

    public function setMale(int $male): self
    {
        $this->male = $male;

        return $this;
    }

    public function getFemale(): ?int
    {
        return $this->female;
    }

    public function setFemale(int $female): self
    {
        $this->female = $female;

        return $this;
    }
}

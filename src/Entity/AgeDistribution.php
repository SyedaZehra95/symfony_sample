<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AgeDistributionRepository")
 */
class AgeDistribution
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
    private $count;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AgeRange", inversedBy="ageDistribution",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $AgeRange;

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

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getAgeRange(): ?AgeRange
    {
        return $this->AgeRange;
    }

    public function setAgeRange(?AgeRange $AgeRange): self
    {
        $this->AgeRange = $AgeRange;

        return $this;
    }
}

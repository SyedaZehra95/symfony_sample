<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AgeRangeRepository")
 */
class AgeRange
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
    private $distribution;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDistribution(): ?string
    {
        return $this->distribution;
    }

    public function setDistribution(string $distribution): self
    {
        $this->distribution = $distribution;

        return $this;
    }
}

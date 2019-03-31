<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InboundOutboundRepository")
 */
class InboundOutbound
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="json")
     */
    private $requestData = [];

    /**
     * @ORM\Column(type="json")
     */
    private $responceData = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deviceName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreatedTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequestData(): ?array
    {
        return $this->requestData;
    }

    public function setRequestData(array $requestData): self
    {
        $this->requestData = $requestData;

        return $this;
    }

    public function getResponceData(): ?array
    {
        return $this->responceData;
    }

    public function setResponceData(array $responceData): self
    {
        $this->responceData = $responceData;

        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(string $deviceName): self
    {
        $this->deviceName = $deviceName;

        return $this;
    }

    public function getCreatedTime(): ?\DateTimeInterface
    {
        return $this->CreatedTime;
    }

    public function setCreatedTime(\DateTimeInterface $CreatedTime): self
    {
        $this->CreatedTime = $CreatedTime;

        return $this;
    }
}

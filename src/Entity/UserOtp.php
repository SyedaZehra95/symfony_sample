<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UserOTPRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class UserOtp
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deviceId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mobileNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $otp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $CreatedAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(string $deviceId): self
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber(string $mobileNumber): self
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    public function getOtp(): ?int
    {
        return $this->otp;
    }

    public function setOtp(int $otp): self
    {
        $this->otp = $otp;

        return $this;
    }
    /**
     * Pre persist event listener
     *
     * @ORM\PrePersist
     */
    public function beforeSave()
    {
        $this->CreatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
    }

    /**
     * Get created date/time
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }
    /**
     * @param \DateTime
     *
     * @return Account
     */
    public function setCreatedAt($created)
    {
        $this->CreatedAt = $created;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

}

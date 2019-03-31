<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserSessionRepository")
 */
class UserSession
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
    private $ServerVersion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DeviceId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ApplicationVersion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PlatForm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PlatFormVersion;

    /**
     * @ORM\Column(type="integer")
     */
    private $PlatformViewPortWidth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Language;

    /**
     * @ORM\Column(type="boolean")
     */
    private $IsLogin;

    /**
     * @ORM\Column(type="integer")
     */
    private $ProfileId;

    /**
     * @ORM\Column(type="datetime")
     */
    private $LastLoginDateTime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SessionToken;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServerVersion(): ?string
    {
        return $this->ServerVersion;
    }

    public function setServerVersion(string $ServerVersion): self
    {
        $this->ServerVersion = $ServerVersion;

        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->DeviceId;
    }

    public function setDeviceId(string $DeviceId): self
    {
        $this->DeviceId = $DeviceId;

        return $this;
    }

    public function getApplicationVersion(): ?string
    {
        return $this->ApplicationVersion;
    }

    public function setApplicationVersion(string $ApplicationVersion): self
    {
        $this->ApplicationVersion = $ApplicationVersion;

        return $this;
    }

    public function getPlatForm(): ?string
    {
        return $this->PlatForm;
    }

    public function setPlatForm(string $PlatForm): self
    {
        $this->PlatForm = $PlatForm;

        return $this;
    }

    public function getPlatFormVersion(): ?string
    {
        return $this->PlatFormVersion;
    }

    public function setPlatFormVersion(string $PlatFormVersion): self
    {
        $this->PlatFormVersion = $PlatFormVersion;

        return $this;
    }

    public function getPlatformViewPortWidth(): ?int
    {
        return $this->PlatformViewPortWidth;
    }

    public function setPlatformViewPortWidth(int $PlatformViewPortWidth): self
    {
        $this->PlatformViewPortWidth = $PlatformViewPortWidth;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    public function setLanguage(string $Language): self
    {
        $this->Language = $Language;

        return $this;
    }

    public function getIsLogin(): ?bool
    {
        return $this->IsLogin;
    }

    public function setIsLogin(bool $IsLogin): self
    {
        $this->IsLogin = $IsLogin;

        return $this;
    }

    public function getProfileId(): ?int
    {
        return $this->ProfileId;
    }

    public function setProfileId(int $ProfileId): self
    {
        $this->ProfileId = $ProfileId;

        return $this;
    }

    public function getLastLoginDateTime(): ?\DateTimeInterface
    {
        return $this->LastLoginDateTime;
    }

    public function setLastLoginDateTime(\DateTimeInterface $LastLoginDateTime): self
    {
        $this->LastLoginDateTime = $LastLoginDateTime;

        return $this;
    }

    public function getSessionToken(): ?string
    {
        return $this->SessionToken;
    }

    public function setSessionToken(string $SessionToken): self
    {
        $this->SessionToken = $SessionToken;

        return $this;
    }
}

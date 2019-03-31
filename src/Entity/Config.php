<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConfigRepository")
 */
class Config
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $CreatedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $UpdatedAt;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

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
        $this->UpdatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
    }
    /**
     * Pre update event handler
     *
     * @ORM\PreUpdate
     */
    public function doPreUpdate()
    {
        $this->UpdatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
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
    /**
     * Get last update date/time
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->UpdatedAt;
    }
    /**
     * @param \DateTime
     *
     * @return Account
     */
    public function setUpdatedAt($updated)
    {
        $this->UpdatedAt = $updated;
        return $this;
    }
}

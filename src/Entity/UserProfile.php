<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\UserProfileRepository")
 * @UniqueEntity("email",message="That email is already registered")
 * @UniqueEntity("mobileNumber",message="mobileNumber  already exists. Please try another one.")
 * @ORM\HasLifecycleCallbacks()
 */
class UserProfile
{
    /**
     * @ORM\Id()
     * @Groups({"read"})
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"write","read"})
     * @Assert\NotBlank()
     * @ORM\Column(type="integer")
     */
    private $userId;


    /**
     * @Groups({"write","read"})
     * @Assert\NotBlank()
     *
     * @Assert\Type(
     *     type="string",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @Groups({"write","read"})
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @Groups({"write","read"})
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @Assert\Type(
     *     type="numeric",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @Groups({"write","read"})
     * @ORM\Column(type="bigint", length=255)
     */
    private $mobileNumber;

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



    /**
     * @Groups({"write","read"})
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    private $deviceId;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->firstName = $FirstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->lastName = $LastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $Email): self
    {
        $this->email = $Email;

        return $this;
    }

    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber(string $MobileNumber): self
    {
        $this->mobileNumber = $MobileNumber;

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

    

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
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
}

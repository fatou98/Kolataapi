<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * 
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer 
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
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="text")
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $mobileNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

  
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ref_code;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tailor")
     */
    private $tailor;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRefCode(): ?string
    {
        return $this->ref_code;
    }

    public function setRefCode(string $ref_code): self
    {
        $this->ref_code = $ref_code;

        return $this;
    }

    public function getTailor(): ?Tailor
    {
        return $this->tailor;
    }

    public function setTailor(?Tailor $tailor): self
    {
        $this->tailor = $tailor;

        return $this;
    }
    
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * 
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class OrderCustomer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="text")
     */
    private $tissu;

    /**
     * @ORM\Column(type="text")
     */
    private $modele;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $delyveryDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $amountOrder;

    /**
     * @ORM\Column(type="integer")
     */
    private $avanceAmount;

    /**
     * @ORM\Column(type="integer")
     */
    private $restAmount;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statut;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deliveryStatut;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer")
     */
    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tailor")
     */
    private $tailor;

   
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $epaule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $blouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poitrine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longueurManche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longueurJupe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longueurRobe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longueurHaut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ceinture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cuisse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tourManche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tete;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }

    public function setCreationDate(string $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getTissu(): ?string
    {
        return $this->tissu;
    }

    public function setTissu(string $tissu): self
    {
        $this->tissu = $tissu;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getDelyveryDate(): ?string
    {
        return $this->delyveryDate;
    }

    public function setDelyveryDate(string $delyveryDate): self
    {
        $this->delyveryDate = $delyveryDate;

        return $this;
    }

    public function getAmountOrder(): ?int
    {
        return $this->amountOrder;
    }

    public function setAmountOrder(int $amountOrder): self
    {
        $this->amountOrder = $amountOrder;

        return $this;
    }

    public function getAvanceAmount(): ?int
    {
        return $this->avanceAmount;
    }

    public function setAvanceAmount(int $avanceAmount): self
    {
        $this->avanceAmount = $avanceAmount;

        return $this;
    }

    public function getRestAmount(): ?int
    {
        return $this->restAmount;
    }

    public function setRestAmount(int $restAmount): self
    {
        $this->restAmount = $restAmount;

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDeliveryStatut(): ?bool
    {
        return $this->deliveryStatut;
    }

    public function setDeliveryStatut(bool $deliveryStatut): self
    {
        $this->deliveryStatut = $deliveryStatut;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

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
    
    public function getEpaule(): ?string
    {
        return $this->epaule;
    }

    public function setEpaule(string $epaule): self
    {
        $this->epaule = $epaule;

        return $this;
    }

    public function getManche(): ?string
    {
        return $this->manche;
    }

    public function setManche(string $manche): self
    {
        $this->manche = $manche;

        return $this;
    }

    public function getBlouse(): ?string
    {
        return $this->blouse;
    }

    public function setBlouse(string $blouse): self
    {
        $this->blouse = $blouse;

        return $this;
    }

    public function getPoitrine(): ?string
    {
        return $this->poitrine;
    }

    public function setPoitrine(string $poitrine): self
    {
        $this->poitrine = $poitrine;

        return $this;
    }

    public function getLongueurManche(): ?string
    {
        return $this->longueurManche;
    }

    public function setLongueurManche(string $longueurManche): self
    {
        $this->longueurManche = $longueurManche;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getLongueurJupe(): ?string
    {
        return $this->longueurJupe;
    }

    public function setLongueurJupe(string $longueurJupe): self
    {
        $this->longueurJupe = $longueurJupe;

        return $this;
    }

    public function getLongueurRobe(): ?string
    {
        return $this->longueurRobe;
    }

    public function setLongueurRobe(string $longueurRobe): self
    {
        $this->longueurRobe = $longueurRobe;

        return $this;
    }

    public function getLongueurHaut(): ?string
    {
        return $this->longueurHaut;
    }

    public function setLongueurHaut(string $longueurHaut): self
    {
        $this->longueurHaut = $longueurHaut;

        return $this;
    }

    public function getCeinture(): ?string
    {
        return $this->ceinture;
    }

    public function setCeinture(string $ceinture): self
    {
        $this->ceinture = $ceinture;

        return $this;
    }

    public function getCuisse(): ?string
    {
        return $this->cuisse;
    }

    public function setCuisse(string $cuisse): self
    {
        $this->cuisse = $cuisse;

        return $this;
    }

    public function getTourManche(): ?string
    {
        return $this->tourManche;
    }

    public function setTourManche(string $tourManche): self
    {
        $this->tourManche = $tourManche;

        return $this;
    }

    public function getTete(): ?string
    {
        return $this->tete;
    }

    public function setTete(string $tete): self
    {
        $this->tete = $tete;

        return $this;
    }

}

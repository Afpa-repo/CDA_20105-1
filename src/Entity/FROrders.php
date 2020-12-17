<?php

namespace App\Entity;

use App\Repository\FROrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FROrdersRepository::class)
 */
class FROrders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $orders_Reference;

    /**
     * @ORM\Column(type="date")
     */
    private $orders_Date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $orders_observation;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $orders_TotalShipment;

    /**
     * @ORM\ManyToOne(targetEntity=FRPersonnes::class)
     */
    private $personnes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdersReference(): ?string
    {
        return $this->orders_Reference;
    }

    public function setOrdersReference(string $orders_Reference): self
    {
        $this->orders_Reference = $orders_Reference;

        return $this;
    }

    public function getOrdersDate(): ?\DateTimeInterface
    {
        return $this->orders_Date;
    }

    public function setOrdersDate(\DateTimeInterface $orders_Date): self
    {
        $this->orders_Date = $orders_Date;

        return $this;
    }

    public function getOrdersObservation(): ?string
    {
        return $this->orders_observation;
    }

    public function setOrdersObservation(?string $orders_observation): self
    {
        $this->orders_observation = $orders_observation;

        return $this;
    }

    public function getOrdersTotalShipment(): ?string
    {
        return $this->orders_TotalShipment;
    }

    public function setOrdersTotalShipment(string $orders_TotalShipment): self
    {
        $this->orders_TotalShipment = $orders_TotalShipment;

        return $this;
    }

    public function getPersonnes(): ?FRPersonnes
    {
        return $this->personnes;
    }

    public function setPersonnes(?FRPersonnes $personnes): self
    {
        $this->personnes = $personnes;

        return $this;
    }
}

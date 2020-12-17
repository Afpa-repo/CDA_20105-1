<?php

namespace App\Entity;

use App\Repository\FRSuppliersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FRSuppliersRepository::class)
 */
class FRSuppliers
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
    private $suppliers_Name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $suppliers_Type;

    /**
     * @ORM\ManyToOne(targetEntity=FRContactDetails::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $contactDetails;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSuppliersName(): ?string
    {
        return $this->suppliers_Name;
    }

    public function setSuppliersName(string $suppliers_Name): self
    {
        $this->suppliers_Name = $suppliers_Name;

        return $this;
    }

    public function getSuppliersType(): ?string
    {
        return $this->suppliers_Type;
    }

    public function setSuppliersType(string $suppliers_Type): self
    {
        $this->suppliers_Type = $suppliers_Type;

        return $this;
    }

    public function getContactDetails(): ?FRContactDetails
    {
        return $this->contactDetails;
    }

    public function setContactDetails(?FRContactDetails $contactDetails): self
    {
        $this->contactDetails = $contactDetails;

        return $this;
    }
}

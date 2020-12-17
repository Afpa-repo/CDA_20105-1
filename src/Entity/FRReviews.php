<?php

namespace App\Entity;

use App\Repository\FRReviewsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FRReviewsRepository::class)
 */
class FRReviews
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=FRProducts::class)
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity=FRPersonnes::class, inversedBy="fRReviews")
     */
    private $personne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?FRProducts
    {
        return $this->product;
    }

    public function setProduct(?FRProducts $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getPersonne(): ?FRPersonnes
    {
        return $this->personne;
    }

    public function setPersonne(?FRPersonnes $personne): self
    {
        $this->personne = $personne;

        return $this;
    }
}

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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reviews_comments;

    /**
     * @ORM\Column(type="integer")
     */
    private $reviews_Rate;

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

    public function getReviewsComments(): ?string
    {
        return $this->reviews_comments;
    }

    public function setReviewsComments(?string $reviews_comments): self
    {
        $this->reviews_comments = $reviews_comments;

        return $this;
    }

    public function getReviewsRate(): ?int
    {
        return $this->reviews_Rate;
    }

    public function setReviewsRate(int $reviews_Rate): self
    {
        $this->reviews_Rate = $reviews_Rate;

        return $this;
    }
}

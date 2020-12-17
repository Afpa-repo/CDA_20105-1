<?php

namespace App\Entity;

use App\Repository\FRCustomerReviewsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FRCustomerReviewsRepository::class)
 */
class FRCustomerReviews
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customerReviews_Comments;

    /**
     * @ORM\Column(type="integer")
     */
    private $customerReviews_Rate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerReviewsComments(): ?string
    {
        return $this->customerReviews_Comments;
    }

    public function setCustomerReviewsComments(string $customerReviews_Comments): self
    {
        $this->customerReviews_Comments = $customerReviews_Comments;

        return $this;
    }

    public function getCustomerReviewsRate(): ?int
    {
        return $this->customerReviews_Rate;
    }

    public function setCustomerReviewsRate(int $customerReviews_Rate): self
    {
        $this->customerReviews_Rate = $customerReviews_Rate;

        return $this;
    }
}

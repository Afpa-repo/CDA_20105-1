<?php

namespace App\Entity;

use App\Repository\FRCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FRCategoryRepository::class)
 */
class FRCategory
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
    private $category_Name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryName(): ?string
    {
        return $this->category_Name;
    }

    public function setCategoryName(string $category_Name): self
    {
        $this->category_Name = $category_Name;

        return $this;
    }
}

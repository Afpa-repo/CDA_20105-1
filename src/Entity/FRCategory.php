<?php

namespace App\Entity;

use App\Repository\FRCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=FRCategory::class, inversedBy="CategoryFK")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=FRCategory::class, mappedBy="category")
     */
    private $CategoryFK;

    public function __construct()
    {
        $this->CategoryFK = new ArrayCollection();
    }

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

    public function getCategory(): ?self
    {
        return $this->category;
    }

    public function setCategory(?self $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getCategoryFK(): Collection
    {
        return $this->CategoryFK;
    }

    public function addCategoryFK(self $categoryFK): self
    {
        if (!$this->CategoryFK->contains($categoryFK)) {
            $this->CategoryFK[] = $categoryFK;
            $categoryFK->setCategory($this);
        }

        return $this;
    }

    public function removeCategoryFK(self $categoryFK): self
    {
        if ($this->CategoryFK->removeElement($categoryFK)) {
            // set the owning side to null (unless already changed)
            if ($categoryFK->getCategory() === $this) {
                $categoryFK->setCategory(null);
            }
        }

        return $this;
    }
}

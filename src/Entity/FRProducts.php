<?php

namespace App\Entity;

use App\Repository\FRProductsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FRProductsRepository::class)
 */
class FRProducts
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
    private $products_reference;

    /**
     * @ORM\Column(type="string", length=5500)
     */
    private $products_Details;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2)
     */
    private $products_PurchasePrice;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2)
     */
    private $products_SalePrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $products_Picture;

    /**
     * @ORM\Column(type="integer")
     */
    private $products_Stock;

    /**
     * @ORM\Column(type="integer")
     */
    private $products_Visible;

    /**
     * @ORM\ManyToOne(targetEntity=FRCategory::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity=FRSuppliers::class)
     */
    private $Suppliers;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $products_AverageGrade;

    /**
     * @ORM\Column(type="date")
     */
    private $products_DateAdded;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $products_Authors;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $products_Editor;

    public function __construct()
    {
        $this->Suppliers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductsReference(): ?string
    {
        return $this->products_reference;
    }

    public function setProductsReference(string $products_reference): self
    {
        $this->products_reference = $products_reference;

        return $this;
    }

    public function getProductsDetails(): ?string
    {
        return $this->products_Details;
    }

    public function setProductsDetails(string $products_Details): self
    {
        $this->products_Details = $products_Details;

        return $this;
    }

    public function getProductsPurchasePrice(): ?string
    {
        return $this->products_PurchasePrice;
    }

    public function setProductsPurchasePrice(string $products_PurchasePrice): self
    {
        $this->products_PurchasePrice = $products_PurchasePrice;

        return $this;
    }

    public function getProductsSalePrice(): ?string
    {
        return $this->products_SalePrice;
    }

    public function setProductsSalePrice(string $products_SalePrice): self
    {
        $this->products_SalePrice = $products_SalePrice;

        return $this;
    }

    public function getProductsPicture(): ?string
    {
        return $this->products_Picture;
    }

    public function setProductsPicture(?string $products_Picture): self
    {
        $this->products_Picture = $products_Picture;

        return $this;
    }

    public function getProductsStock(): ?int
    {
        return $this->products_Stock;
    }

    public function setProductsStock(int $products_Stock): self
    {
        $this->products_Stock = $products_Stock;

        return $this;
    }

    public function getProductsVisible(): ?int
    {
        return $this->products_Visible;
    }

    public function setProductsVisible(int $products_Visible): self
    {
        $this->products_Visible = $products_Visible;

        return $this;
    }

    public function getCategory(): ?FRCategory
    {
        return $this->category;
    }

    public function setCategory(?FRCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|FRSuppliers[]
     */
    public function getSuppliers(): Collection
    {
        return $this->Suppliers;
    }

    public function addSupplier(FRSuppliers $supplier): self
    {
        if (!$this->Suppliers->contains($supplier)) {
            $this->Suppliers[] = $supplier;
        }

        return $this;
    }

    public function removeSupplier(FRSuppliers $supplier): self
    {
        $this->Suppliers->removeElement($supplier);

        return $this;
    }

    public function getProductsAverageGrade(): ?string
    {
        return $this->products_AverageGrade;
    }

    public function setProductsAverageGrade(?string $products_AverageGrade): self
    {
        $this->products_AverageGrade = $products_AverageGrade;

        return $this;
    }

    public function getProductsDateAdded(): ?\DateTimeInterface
    {
        return $this->products_DateAdded;
    }

    public function setProductsDateAdded(\DateTimeInterface $products_DateAdded): self
    {
        $this->products_DateAdded = $products_DateAdded;

        return $this;
    }

    public function getProductsAuthors(): ?string
    {
        return $this->products_Authors;
    }

    public function setProductsAuthors(string $products_Authors): self
    {
        $this->products_Authors = $products_Authors;

        return $this;
    }

    public function getProductsEditor(): ?string
    {
        return $this->products_Editor;
    }

    public function setProductsEditor(string $products_Editor): self
    {
        $this->products_Editor = $products_Editor;

        return $this;
    }

}

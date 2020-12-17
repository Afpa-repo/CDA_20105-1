<?php

namespace App\Entity;

use App\Repository\FROrderDetailsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FROrderDetailsRepository::class)
 */
class FROrderDetails
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $orderDetails_QuantityOrdered;

    /**
     * @ORM\Column(type="date")
     */
    private $orderDetails_DeliveryDate;

    /**
     * @ORM\Column(type="decimal", precision=4, scale=2)
     */
    private $orderDetails_TaxeCoefficient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orderDetails_DeliveryAdress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $orderDetails_BillingAdress;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $orderDetails_Payment;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $orderDetails_Send;

    /**
     * @ORM\ManyToOne(targetEntity=FROrders::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderFK;

    /**
     * @ORM\ManyToOne(targetEntity=FRProducts::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderDetailsQuantityOrdered(): ?int
    {
        return $this->orderDetails_QuantityOrdered;
    }

    public function setOrderDetailsQuantityOrdered(int $orderDetails_QuantityOrdered): self
    {
        $this->orderDetails_QuantityOrdered = $orderDetails_QuantityOrdered;

        return $this;
    }

    public function getOrderDetailsDeliveryDate(): ?\DateTimeInterface
    {
        return $this->orderDetails_DeliveryDate;
    }

    public function setOrderDetailsDeliveryDate(\DateTimeInterface $orderDetails_DeliveryDate): self
    {
        $this->orderDetails_DeliveryDate = $orderDetails_DeliveryDate;

        return $this;
    }

    public function getOrderDetailsTaxeCoefficient(): ?string
    {
        return $this->orderDetails_TaxeCoefficient;
    }

    public function setOrderDetailsTaxeCoefficient(string $orderDetails_TaxeCoefficient): self
    {
        $this->orderDetails_TaxeCoefficient = $orderDetails_TaxeCoefficient;

        return $this;
    }

    public function getOrderDetailsDeliveryAdress(): ?string
    {
        return $this->orderDetails_DeliveryAdress;
    }

    public function setOrderDetailsDeliveryAdress(string $orderDetails_DeliveryAdress): self
    {
        $this->orderDetails_DeliveryAdress = $orderDetails_DeliveryAdress;

        return $this;
    }

    public function getOrderDetailsBillingAdress(): ?string
    {
        return $this->orderDetails_BillingAdress;
    }

    public function setOrderDetailsBillingAdress(?string $orderDetails_BillingAdress): self
    {
        $this->orderDetails_BillingAdress = $orderDetails_BillingAdress;

        return $this;
    }

    public function getOrderDetailsPayment(): ?string
    {
        return $this->orderDetails_Payment;
    }

    public function setOrderDetailsPayment(string $orderDetails_Payment): self
    {
        $this->orderDetails_Payment = $orderDetails_Payment;

        return $this;
    }

    public function getOrderDetailsSend(): ?string
    {
        return $this->orderDetails_Send;
    }

    public function setOrderDetailsSend(string $orderDetails_Send): self
    {
        $this->orderDetails_Send = $orderDetails_Send;

        return $this;
    }

    public function getOrderFK(): ?FROrders
    {
        return $this->orderFK;
    }

    public function setOrderFK(?FROrders $orderFK): self
    {
        $this->orderFK = $orderFK;

        return $this;
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

}

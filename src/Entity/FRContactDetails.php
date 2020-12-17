<?php

namespace App\Entity;

use App\Repository\FRContactDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FRContactDetailsRepository::class)
 */
class FRContactDetails
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $contactDetails_number;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $contactDetails_Street;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $contactDetails_Complement;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $contactDetails_City;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $contactDetails_Postcode;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $contactDetails_country;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $contactDetails_PhoneNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contactDetails_Email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContactDetailsNumber(): ?string
    {
        return $this->contactDetails_number;
    }

    public function setContactDetailsNumber(string $contactDetails_number): self
    {
        $this->contactDetails_number = $contactDetails_number;

        return $this;
    }

    public function getContactDetailsStreet(): ?string
    {
        return $this->contactDetails_Street;
    }

    public function setContactDetailsStreet(string $contactDetails_Street): self
    {
        $this->contactDetails_Street = $contactDetails_Street;

        return $this;
    }

    public function getContactDetailsComplement(): ?string
    {
        return $this->contactDetails_Complement;
    }

    public function setContactDetailsComplement(?string $contactDetails_Complement): self
    {
        $this->contactDetails_Complement = $contactDetails_Complement;

        return $this;
    }

    public function getContactDetailsCity(): ?string
    {
        return $this->contactDetails_City;
    }

    public function setContactDetailsCity(string $contactDetails_City): self
    {
        $this->contactDetails_City = $contactDetails_City;

        return $this;
    }

    public function getContactDetailsPostcode(): ?string
    {
        return $this->contactDetails_Postcode;
    }

    public function setContactDetailsPostcode(string $contactDetails_Postcode): self
    {
        $this->contactDetails_Postcode = $contactDetails_Postcode;

        return $this;
    }

    public function getContactDetailsCountry(): ?string
    {
        return $this->contactDetails_country;
    }

    public function setContactDetailsCountry(string $contactDetails_country): self
    {
        $this->contactDetails_country = $contactDetails_country;

        return $this;
    }

    public function getContactDetailsPhoneNumber(): ?string
    {
        return $this->contactDetails_PhoneNumber;
    }

    public function setContactDetailsPhoneNumber(string $contactDetails_PhoneNumber): self
    {
        $this->contactDetails_PhoneNumber = $contactDetails_PhoneNumber;

        return $this;
    }

    public function getContactDetailsEmail(): ?string
    {
        return $this->contactDetails_Email;
    }

    public function setContactDetailsEmail(string $contactDetails_Email): self
    {
        $this->contactDetails_Email = $contactDetails_Email;

        return $this;
    }
}

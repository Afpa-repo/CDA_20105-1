<?php

namespace App\Entity;

use App\Repository\FRPersonnesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FRPersonnesRepository::class)
 */
class FRPersonnes
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
    private $personnes_Name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $personnes_LastName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $personnes_ClientCategory;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $personnes_Client;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $personnes_Team;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $personnes_Employee;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $personnes_Password;

    /**
     * @ORM\ManyToOne(targetEntity=FRPersonnes::class)
     */
    private $personnes;

    /**
     * @ORM\ManyToOne(targetEntity=FRContactDetails::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $contactDetails;

    /**
     * @ORM\OneToMany(targetEntity=FRReviews::class, mappedBy="personne")
     */
    private $fRReviews;

    public function __construct()
    {
        $this->fRReviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonnesName(): ?string
    {
        return $this->personnes_Name;
    }

    public function setPersonnesName(string $personnes_Name): self
    {
        $this->personnes_Name = $personnes_Name;

        return $this;
    }

    public function getPersonnesLastName(): ?string
    {
        return $this->personnes_LastName;
    }

    public function setPersonnesLastName(string $personnes_LastName): self
    {
        $this->personnes_LastName = $personnes_LastName;

        return $this;
    }

    public function getPersonnesClientCategory(): ?string
    {
        return $this->personnes_ClientCategory;
    }

    public function setPersonnesClientCategory(?string $personnes_ClientCategory): self
    {
        $this->personnes_ClientCategory = $personnes_ClientCategory;

        return $this;
    }

    public function getPersonnesClient(): ?string
    {
        return $this->personnes_Client;
    }

    public function setPersonnesClient(string $personnes_Client): self
    {
        $this->personnes_Client = $personnes_Client;

        return $this;
    }

    public function getPersonnesTeam(): ?string
    {
        return $this->personnes_Team;
    }

    public function setPersonnesTeam(?string $personnes_Team): self
    {
        $this->personnes_Team = $personnes_Team;

        return $this;
    }

    public function getPersonnesEmployee(): ?string
    {
        return $this->personnes_Employee;
    }

    public function setPersonnesEmployee(string $personnes_Employee): self
    {
        $this->personnes_Employee = $personnes_Employee;

        return $this;
    }

    public function getPersonnesPassword(): ?string
    {
        return $this->personnes_Password;
    }

    public function setPersonnesPassword(string $personnes_Password): self
    {
        $this->personnes_Password = $personnes_Password;

        return $this;
    }

    public function getPersonnes(): ?self
    {
        return $this->personnes;
    }

    public function setPersonnes(?self $personnes): self
    {
        $this->personnes = $personnes;

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

    /**
     * @return Collection|FRReviews[]
     */
    public function getFRReviews(): Collection
    {
        return $this->fRReviews;
    }

    public function addFRReview(FRReviews $fRReview): self
    {
        if (!$this->fRReviews->contains($fRReview)) {
            $this->fRReviews[] = $fRReview;
            $fRReview->setPersonne($this);
        }

        return $this;
    }

    public function removeFRReview(FRReviews $fRReview): self
    {
        if ($this->fRReviews->removeElement($fRReview)) {
            // set the owning side to null (unless already changed)
            if ($fRReview->getPersonne() === $this) {
                $fRReview->setPersonne(null);
            }
        }

        return $this;
    }
}

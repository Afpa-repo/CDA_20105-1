<?php

namespace App\Entity;

use App\Repository\FRPersonnesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FRPersonnesRepository::class)
 * @UniqueEntity(
 *     fields={"personnes_Email"},
 *     message="L'email que vous avez indiqué est déjà utilisé !"
 * )
 */
class FRPersonnes implements UserInterface
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
     * @Assert\Regex("/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/")
     */
    private $personnes_LastName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\Regex("/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/")
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
     * @ORM\Column(type="string", length=100)
     * @Assert\Regex("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/" , message="Votre mot de passe doit contenir une majuscule et un chiffre")
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractères")
     */
    private $personnes_Password;

    /**
     * @Assert\Regex("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/", message="Votre mot de passe doit contenir une majuscule et un chiffre")
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractères")
     * @Assert\EqualTo(propertyPath="personnes_Password", message="Votre mot de passe n'est pas identique")
     */
    public $confirm_password;

    /**
     * @ORM\ManyToOne(targetEntity=FRPersonnes::class)
     */
    private $personnes;

    /**
     * @ORM\ManyToOne(targetEntity=FRContactDetails::class)
     */
    private $contactDetails;

    /**
     * @ORM\OneToMany(targetEntity=FRReviews::class, mappedBy="personne")
     */
    private $fRReviews;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $personnes_EnableAccount;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $personnes_Email;


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

    public function setPersonnesClient(string $personnes_Client ): self
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

    public function getPersonnesEnableAccount(): ?string
    {
        return $this->personnes_EnableAccount;
    }

    public function setPersonnesEnableAccount(string $personnes_EnableAccount): self
    {
        $this->personnes_EnableAccount = $personnes_EnableAccount;

        return $this;
    }

    public function getPersonnesEmail(): ?string
    {
        return $this->personnes_Email;
    }

    public function setPersonnesEmail(string $personnes_Email): self
    {
        $this->personnes_Email = $personnes_Email;

        return $this;
    }

    public function getRoles()
    {
        return ['ROLE_PERSONNE'];
    }


    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }


    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getPassword()
    {
        return $this->getPersonnesPassword();
    }

    public function getUsername()
    {
        {
            return $this->getPersonnesEmail();
        }
    }
}

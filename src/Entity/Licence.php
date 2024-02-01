<?php

namespace App\Entity;

use App\Repository\LicenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LicenceRepository::class)]
class Licence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length:255)]
    private ?string $datenaiss = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    private ?string $sexe = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $codepostal = null;

    #[ORM\Column(length:255)]
    private ?string $datecreat = null;

    #[ORM\Column(length: 255)]
    private ?string $nomlicence = null;

    #[ORM\OneToOne(mappedBy: 'numlicence', cascade: ['persist', 'remove'])]
    private ?Boxeur $boxeur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatenaiss(): ?string
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(string $datenaiss): static
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(string $codepostal): static
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getDatecreat(): ?string
    {
        return $this->datecreat;
    }

    public function setDatecreat(string $datecreat): static
    {
        $this->datecreat = $datecreat;

        return $this;
    }

    public function getNomlicence(): ?string
    {
        return $this->nomlicence;
    }

    public function setNomlicence(string $nomlicence): static
    {
        $this->nomlicence = $nomlicence;

        return $this;
    }

    public function getBoxeur(): ?Boxeur
    {
        return $this->boxeur;
    }

    public function setBoxeur(?Boxeur $boxeur): static
    {
        // unset the owning side of the relation if necessary
        if ($boxeur === null && $this->boxeur !== null) {
            $this->boxeur->setNumlicence(null);
        }

        // set the owning side of the relation if necessary
        if ($boxeur !== null && $boxeur->getNumlicence() !== $this) {
            $boxeur->setNumlicence($this);
        }

        $this->boxeur = $boxeur;

        return $this;
    }

    
}

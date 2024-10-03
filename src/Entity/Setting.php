<?php

namespace App\Entity;

use App\Repository\SettingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SettingRepository::class)]
class Setting
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $local = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $rights = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $metadescription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titletag = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $altlogo = null;

    #[ORM\OneToMany(targetEntity: Socialmedia::class, mappedBy: 'setting')]
    private Collection $socialmedia;

    #[ORM\Column(nullable: true)]
    private ?int $maxexperience = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxprojects = null;

    #[ORM\Column(nullable: true)]
    private ?int $maxskills = null;

    public function __construct()
    {
        $this->socialmedia = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getLocal(): ?string
    {
        return $this->local;
    }

    public function setLocal(?string $local): static
    {
        $this->local = $local;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getRights(): ?string
    {
        return $this->rights;
    }

    public function setRights(?string $rights): static
    {
        $this->rights = $rights;

        return $this;
    }

    public function getMetadescription(): ?string
    {
        return $this->metadescription;
    }

    public function setMetadescription(?string $metadescription): static
    {
        $this->metadescription = $metadescription;

        return $this;
    }

    public function getTitletag(): ?string
    {
        return $this->titletag;
    }

    public function setTitletag(?string $titletag): static
    {
        $this->titletag = $titletag;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getAltlogo(): ?string
    {
        return $this->altlogo;
    }

    public function setAltlogo(?string $altlogo): static
    {
        $this->altlogo = $altlogo;

        return $this;
    }

    /**
     * @return Collection<int, Socialmedia>
     */
    public function getSocialmedia(): Collection
    {
        return $this->socialmedia;
    }

    public function addSocialmedia(Socialmedia $socialmedia): static
    {
        if (!$this->socialmedia->contains($socialmedia)) {
            $this->socialmedia->add($socialmedia);
            $socialmedia->setSetting($this);
        }

        return $this;
    }

    public function removeSocialmedia(Socialmedia $socialmedia): static
    {
        if ($this->socialmedia->removeElement($socialmedia)) {
            // set the owning side to null (unless already changed)
            if ($socialmedia->getSetting() === $this) {
                $socialmedia->setSetting(null);
            }
        }

        return $this;
    }

    public function getMaxexperience(): ?int
    {
        return $this->maxexperience;
    }

    public function setMaxexperience(?int $maxexperience): static
    {
        $this->maxexperience = $maxexperience;

        return $this;
    }

    public function getMaxprojects(): ?int
    {
        return $this->maxprojects;
    }

    public function setMaxprojects(?int $maxprojects): static
    {
        $this->maxprojects = $maxprojects;

        return $this;
    }

    public function getMaxskills(): ?int
    {
        return $this->maxskills;
    }

    public function setMaxskills(?int $maxskills): static
    {
        $this->maxskills = $maxskills;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $post = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $company = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $local = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logocompany = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $altlogocompany = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPost(): ?string
    {
        return $this->post;
    }

    public function setPost(?string $post): static
    {
        $this->post = $post;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): static
    {
        $this->company = $company;

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

   

    public function getLogocompany(): ?string
    {
        return $this->logocompany;
    }

    public function setLogocompany(?string $logocompany): static
    {
        $this->logocompany = $logocompany;

        return $this;
    }

    public function getAltlogocompany(): ?string
    {
        return $this->altlogocompany;
    }

    public function setAltlogocompany(?string $altlogocompany): static
    {
        $this->altlogocompany = $altlogocompany;

        return $this;
    }
}

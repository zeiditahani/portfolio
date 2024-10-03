<?php

namespace App\Entity;

use App\Repository\BannerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BannerRepository::class)]
class Banner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $h1 = null;
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $span = null;
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $spann = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $altimage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getH1(): ?string
    {
        return $this->h1;
    }

    public function setH1(?string $h1): static
    {
        $this->h1 = $h1;

        return $this;
    }
    public function getHh(): ?string
    {
        return $this->hh;
    }

    public function setHh(?string $hh): static
    {
        $this->hh = $hh;

        return $this;
    }

    public function getSpan(): ?string
    {
        return $this->span;
    }

    public function setSpan(?string $span): static
    {
        $this->span = $span;

        return $this;
    }
    public function getSpann(): ?string
    {
        return $this->spann;
    }

    public function setSpann(?string $spann): static
    {
        $this->spann = $spann;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getAltimage(): ?string
    {
        return $this->altimage;
    }

    public function setAltimage(?string $altimage): static
    {
        $this->altimage = $altimage;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\ContactsectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactsectionRepository::class)]
class Contactsection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $span = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $altimage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle1(): ?string
    {
        return $this->title1;
    }

    public function setTitle1(?string $title1): static
    {
        $this->title1 = $title1;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

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

    public function getTitle2(): ?string
    {
        return $this->title2;
    }

    public function setTitle2(?string $title2): static
    {
        $this->title2 = $title2;

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

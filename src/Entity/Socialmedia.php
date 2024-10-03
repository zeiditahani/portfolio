<?php

namespace App\Entity;

use App\Repository\SocialmediaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SocialmediaRepository::class)]
class Socialmedia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $icone = null;

    #[ORM\ManyToOne(inversedBy: 'socialmedia')]
    #[ORM\JoinColumn(name: 'setting_id', referencedColumnName: 'id')]
    private ?Setting $setting = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIcone(): ?string
    {
        return $this->icone;
    }

    public function setIcone(?string $icone): static
    {
        $this->icone = $icone;

        return $this;
    }

    public function getSetting(): ?Setting
    {
        return $this->setting;
    }

    public function setSetting(?Setting $setting): static
    {
        $this->setting = $setting;

        return $this;
    }
    public function __toString(): string
{ return $this->id.' '.$this->link;
}
}

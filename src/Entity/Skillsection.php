<?php

namespace App\Entity;

use App\Repository\SkillsectionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillsectionRepository::class)]
class Skillsection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
     private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $projectedcompleted = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $satisfiedclients = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $yearsexperience = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

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

    public function getProjectedcompleted(): ?string
    {
        return $this->projectedcompleted;
    }

    public function setProjectedcompleted(?string $projectedcompleted): static
    {
        $this->projectedcompleted = $projectedcompleted;

        return $this;
    }

    public function getSatisfiedclients(): ?string
    {
        return $this->satisfiedclients;
    }

    public function setSatisfiedclients(?string $satisfiedclients): static
    {
        $this->satisfiedclients = $satisfiedclients;

        return $this;
    }

    public function getYearsexperience(): ?string
    {
        return $this->yearsexperience;
    }

    public function setYearsexperience(?string $yearsexperience): static
    {
        $this->yearsexperience = $yearsexperience;

        return $this;
    }
}

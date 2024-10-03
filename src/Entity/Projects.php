<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectsRepository::class)]
class Projects
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
    private ?string $link = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $altimage = null;

    #[ORM\ManyToOne(inversedBy: 'projects')]
    private ?Projectstype $projectstype = null;

    #[ORM\ManyToMany(targetEntity: Langage::class, inversedBy: 'projects')]
    private Collection $langage;

    public function __construct()
    {
        $this->langage = new ArrayCollection();
    }

   




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

    public function getProjectstype(): ?Projectstype
    {
        return $this->projectstype;
    }

    public function setProjectstype(?Projectstype $projectstype): static
    {
        $this->projectstype = $projectstype;

        return $this;
    }

    /**
     * @return Collection<int, Langage>
     */
    public function getLangage(): Collection
    {
        return $this->langage;
    }

    public function addLangage(Langage $langage): static
    {
        if (!$this->langage->contains($langage)) {
            $this->langage->add($langage);
        }

        return $this;
    }

    public function removeLangage(Langage $langage): static
    {
        $this->langage->removeElement($langage);

        return $this;
    }

}

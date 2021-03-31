<?php

namespace App\Entity;

use App\Repository\TimelineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TimelineRepository::class)
 */
class Timeline
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $nameTechnology;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?\DateTimeInterface $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?\DateTimeInterface $finish_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameTechnology(): ?string
    {
        return $this->nameTechnology;
    }

    public function setNameTechnology(string $nameTechnology): self
    {
        $this->nameTechnology = $nameTechnology;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getFinishAt(): ?\DateTimeInterface
    {
        return $this->finish_at;
    }

    public function setFinishAt(\DateTimeInterface $finish_at): self
    {
        $this->finish_at = $finish_at;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}

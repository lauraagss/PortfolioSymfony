<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 * @Vich\Uploadable
 */
class Project
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $technology;

    /**
     * @ORM\Column(type="datetime")
     */
    private $create_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $finish_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $image = null;

    /**
     * @ORM\Column(type="datetime")
     */
    private $update_at;
    /**
     * @var File|null $imageFile
     * @Vich\UploadableField(mapping="images_projets", fileNameProperty="image")
     */
    private ?File $imageFile = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $documentation;
    /**
     * @var File|null $docfile
     * @Vich\UploadableField(mapping="documentation_projets", fileNameProperty="documentation")
     */
    private ?File $docFile = null;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bilan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getTechnology(): ?string
    {
        return $this->technology;
    }

    public function setTechnology(string $technology): self
    {
        $this->technology = $technology;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->create_at;
    }

    public function setCreateAt(\DateTimeInterface $create_at): self
    {
        $this->create_at = $create_at;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image = null): self
    {
        $this->image = $image;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->update_at;
    }

    public function setUpdateAt(\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File|null $imageFile
     * @throws \Exception
     */
    public function setImageFile(?File $imageFile): void
    {
        $this->imageFile = $imageFile;
        if ($imageFile){
            $this->update_at = new \DateTime();
        }
    }

    /**
     * @return mixed
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param mixed $documentation
     */
    public function setDocumentation($documentation): void
    {
        $this->documentation = $documentation;
    }

    /**
     * @return File|null
     */
    public function getDocFile(): ?File
    {
        return $this->docFile;
    }

    /**
     * @param File|null $docFile
     */
    public function setDocFile(?File $docFile): void
    {
        $this->docFile = $docFile;
        if ($docFile){
            $this->update_at = new \DateTime();
        }
    }

    /**
     * @return mixed
     */
    public function getBilan()
    {
        return $this->bilan;
    }

    /**
     * @param mixed $bilan
     */
    public function setBilan($bilan): void
    {
        $this->bilan = $bilan;
    }
}

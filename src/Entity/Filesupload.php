<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filesupload
 *
 * @ORM\Table(name="FilesUpload")
 * @ORM\Entity
 */
class Filesupload
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Fichier", type="string", length=200, nullable=false)
     */
    private $fichier;

    /**
     * @var int
     *
     * @ORM\Column(name="Taille", type="integer", nullable=false)
     */
    private $taille;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TailleX", type="integer", nullable=true)
     */
    private $taillex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TailleY", type="integer", nullable=true)
     */
    private $tailley;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires", type="string", length=500, nullable=true)
     */
    private $commentaires;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DocID", type="integer", nullable=true)
     */
    private $docid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateUpload", type="datetime", nullable=true)
     */
    private $dateupload;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getTaillex(): ?int
    {
        return $this->taillex;
    }

    public function setTaillex(?int $taillex): self
    {
        $this->taillex = $taillex;

        return $this;
    }

    public function getTailley(): ?int
    {
        return $this->tailley;
    }

    public function setTailley(?int $tailley): self
    {
        $this->tailley = $tailley;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getDocid(): ?int
    {
        return $this->docid;
    }

    public function setDocid(?int $docid): self
    {
        $this->docid = $docid;

        return $this;
    }

    public function getDateupload(): ?\DateTimeInterface
    {
        return $this->dateupload;
    }

    public function setDateupload(?\DateTimeInterface $dateupload): self
    {
        $this->dateupload = $dateupload;

        return $this;
    }


}

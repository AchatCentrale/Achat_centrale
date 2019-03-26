<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity
 */
class Historique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_exp", type="string", length=255, nullable=false, options={"fixed"=true})
     */
    private $mailExp;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_dest", type="string", length=255, nullable=false, options={"fixed"=true})
     */
    private $mailDest;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vdate", type="datetime", nullable=false)
     */
    private $vdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_retour", type="string", length=2000, nullable=true)
     */
    private $codeRetour;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_code_retour", type="integer", nullable=true)
     */
    private $idCodeRetour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_erreur", type="string", length=255, nullable=true)
     */
    private $codeErreur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SubjectMessage", type="string", length=500, nullable=true)
     */
    private $subjectmessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BodyMessage", type="string", length=5000, nullable=true)
     */
    private $bodymessage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailExp(): ?string
    {
        return $this->mailExp;
    }

    public function setMailExp(string $mailExp): self
    {
        $this->mailExp = $mailExp;

        return $this;
    }

    public function getMailDest(): ?string
    {
        return $this->mailDest;
    }

    public function setMailDest(string $mailDest): self
    {
        $this->mailDest = $mailDest;

        return $this;
    }

    public function getVdate(): ?\DateTimeInterface
    {
        return $this->vdate;
    }

    public function setVdate(\DateTimeInterface $vdate): self
    {
        $this->vdate = $vdate;

        return $this;
    }

    public function getCodeRetour(): ?string
    {
        return $this->codeRetour;
    }

    public function setCodeRetour(?string $codeRetour): self
    {
        $this->codeRetour = $codeRetour;

        return $this;
    }

    public function getIdCodeRetour(): ?int
    {
        return $this->idCodeRetour;
    }

    public function setIdCodeRetour(?int $idCodeRetour): self
    {
        $this->idCodeRetour = $idCodeRetour;

        return $this;
    }

    public function getCodeErreur(): ?string
    {
        return $this->codeErreur;
    }

    public function setCodeErreur(?string $codeErreur): self
    {
        $this->codeErreur = $codeErreur;

        return $this;
    }

    public function getSubjectmessage(): ?string
    {
        return $this->subjectmessage;
    }

    public function setSubjectmessage(?string $subjectmessage): self
    {
        $this->subjectmessage = $subjectmessage;

        return $this;
    }

    public function getBodymessage(): ?string
    {
        return $this->bodymessage;
    }

    public function setBodymessage(?string $bodymessage): self
    {
        $this->bodymessage = $bodymessage;

        return $this;
    }


}

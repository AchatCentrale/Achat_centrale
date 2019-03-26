<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NousContacter
 *
 * @ORM\Table(name="NOUS_CONTACTER")
 * @ORM\Entity
 */
class NousContacter
{
    /**
     * @var int
     *
     * @ORM\Column(name="NC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ncId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_SOCIETE", type="string", length=50, nullable=true)
     */
    private $ncSociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_NOM", type="string", length=50, nullable=true)
     */
    private $ncNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_PRENOM", type="string", length=50, nullable=true)
     */
    private $ncPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_SIRET", type="string", length=50, nullable=true)
     */
    private $ncSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_MAIL", type="string", length=100, nullable=true)
     */
    private $ncMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_TEL", type="string", length=50, nullable=true)
     */
    private $ncTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_OBJET", type="string", length=50, nullable=true)
     */
    private $ncObjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_COMMENTAIRE", type="string", length=7000, nullable=true)
     */
    private $ncCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_TEMPO", type="string", length=50, nullable=true)
     */
    private $ncTempo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="NC_DATE", type="datetime", nullable=true)
     */
    private $ncDate;

    public function getNcId(): ?int
    {
        return $this->ncId;
    }

    public function getSoId(): ?int
    {
        return $this->soId;
    }

    public function setSoId(?int $soId): self
    {
        $this->soId = $soId;

        return $this;
    }

    public function getNcSociete(): ?string
    {
        return $this->ncSociete;
    }

    public function setNcSociete(?string $ncSociete): self
    {
        $this->ncSociete = $ncSociete;

        return $this;
    }

    public function getNcNom(): ?string
    {
        return $this->ncNom;
    }

    public function setNcNom(?string $ncNom): self
    {
        $this->ncNom = $ncNom;

        return $this;
    }

    public function getNcPrenom(): ?string
    {
        return $this->ncPrenom;
    }

    public function setNcPrenom(?string $ncPrenom): self
    {
        $this->ncPrenom = $ncPrenom;

        return $this;
    }

    public function getNcSiret(): ?string
    {
        return $this->ncSiret;
    }

    public function setNcSiret(?string $ncSiret): self
    {
        $this->ncSiret = $ncSiret;

        return $this;
    }

    public function getNcMail(): ?string
    {
        return $this->ncMail;
    }

    public function setNcMail(?string $ncMail): self
    {
        $this->ncMail = $ncMail;

        return $this;
    }

    public function getNcTel(): ?string
    {
        return $this->ncTel;
    }

    public function setNcTel(?string $ncTel): self
    {
        $this->ncTel = $ncTel;

        return $this;
    }

    public function getNcObjet(): ?string
    {
        return $this->ncObjet;
    }

    public function setNcObjet(?string $ncObjet): self
    {
        $this->ncObjet = $ncObjet;

        return $this;
    }

    public function getNcCommentaire(): ?string
    {
        return $this->ncCommentaire;
    }

    public function setNcCommentaire(?string $ncCommentaire): self
    {
        $this->ncCommentaire = $ncCommentaire;

        return $this;
    }

    public function getNcTempo(): ?string
    {
        return $this->ncTempo;
    }

    public function setNcTempo(?string $ncTempo): self
    {
        $this->ncTempo = $ncTempo;

        return $this;
    }

    public function getNcDate(): ?\DateTimeInterface
    {
        return $this->ncDate;
    }

    public function setNcDate(?\DateTimeInterface $ncDate): self
    {
        $this->ncDate = $ncDate;

        return $this;
    }


}

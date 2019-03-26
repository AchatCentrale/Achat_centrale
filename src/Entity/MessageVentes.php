<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageVentes
 *
 * @ORM\Table(name="MESSAGE_VENTES")
 * @ORM\Entity
 */
class MessageVentes
{
    /**
     * @var int
     *
     * @ORM\Column(name="MV_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mvId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ID", type="integer", nullable=true)
     */
    private $meId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_CLIENT", type="integer", nullable=true)
     */
    private $mvClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_CLIENT_U", type="integer", nullable=true)
     */
    private $mvClientU;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_FOURN", type="integer", nullable=true)
     */
    private $mvFourn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_FOURN_U", type="integer", nullable=true)
     */
    private $mvFournU;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MV_SUJET", type="string", length=200, nullable=true)
     */
    private $mvSujet;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MV_DT_VENTE", type="datetime", nullable=true)
     */
    private $mvDtVente;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MV_MONTANT", type="float", precision=53, scale=0, nullable=true)
     */
    private $mvMontant;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MV_MONTANT_PUB", type="float", precision=53, scale=0, nullable=true)
     */
    private $mvMontantPub;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MV_COMMIS_PCT", type="float", precision=53, scale=0, nullable=true)
     */
    private $mvCommisPct;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MV_COMMIS_EUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $mvCommisEur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MV_COMMENT", type="text", length=16, nullable=true)
     */
    private $mvComment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_STATUS", type="integer", nullable=true)
     */
    private $mvStatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="INS_DATE", type="datetime", nullable=true)
     */
    private $insDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="INS_USER", type="string", length=100, nullable=true)
     */
    private $insUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MAJ_DATE", type="datetime", nullable=true)
     */
    private $majDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAJ_USER", type="string", length=100, nullable=true)
     */
    private $majUser;

    public function getMvId(): ?int
    {
        return $this->mvId;
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

    public function getMeId(): ?int
    {
        return $this->meId;
    }

    public function setMeId(?int $meId): self
    {
        $this->meId = $meId;

        return $this;
    }

    public function getMvClient(): ?int
    {
        return $this->mvClient;
    }

    public function setMvClient(?int $mvClient): self
    {
        $this->mvClient = $mvClient;

        return $this;
    }

    public function getMvClientU(): ?int
    {
        return $this->mvClientU;
    }

    public function setMvClientU(?int $mvClientU): self
    {
        $this->mvClientU = $mvClientU;

        return $this;
    }

    public function getMvFourn(): ?int
    {
        return $this->mvFourn;
    }

    public function setMvFourn(?int $mvFourn): self
    {
        $this->mvFourn = $mvFourn;

        return $this;
    }

    public function getMvFournU(): ?int
    {
        return $this->mvFournU;
    }

    public function setMvFournU(?int $mvFournU): self
    {
        $this->mvFournU = $mvFournU;

        return $this;
    }

    public function getMvSujet(): ?string
    {
        return $this->mvSujet;
    }

    public function setMvSujet(?string $mvSujet): self
    {
        $this->mvSujet = $mvSujet;

        return $this;
    }

    public function getMvDtVente(): ?\DateTimeInterface
    {
        return $this->mvDtVente;
    }

    public function setMvDtVente(?\DateTimeInterface $mvDtVente): self
    {
        $this->mvDtVente = $mvDtVente;

        return $this;
    }

    public function getMvMontant(): ?float
    {
        return $this->mvMontant;
    }

    public function setMvMontant(?float $mvMontant): self
    {
        $this->mvMontant = $mvMontant;

        return $this;
    }

    public function getMvMontantPub(): ?float
    {
        return $this->mvMontantPub;
    }

    public function setMvMontantPub(?float $mvMontantPub): self
    {
        $this->mvMontantPub = $mvMontantPub;

        return $this;
    }

    public function getMvCommisPct(): ?float
    {
        return $this->mvCommisPct;
    }

    public function setMvCommisPct(?float $mvCommisPct): self
    {
        $this->mvCommisPct = $mvCommisPct;

        return $this;
    }

    public function getMvCommisEur(): ?float
    {
        return $this->mvCommisEur;
    }

    public function setMvCommisEur(?float $mvCommisEur): self
    {
        $this->mvCommisEur = $mvCommisEur;

        return $this;
    }

    public function getMvComment(): ?string
    {
        return $this->mvComment;
    }

    public function setMvComment(?string $mvComment): self
    {
        $this->mvComment = $mvComment;

        return $this;
    }

    public function getMvStatus(): ?int
    {
        return $this->mvStatus;
    }

    public function setMvStatus(?int $mvStatus): self
    {
        $this->mvStatus = $mvStatus;

        return $this;
    }

    public function getInsDate(): ?\DateTimeInterface
    {
        return $this->insDate;
    }

    public function setInsDate(?\DateTimeInterface $insDate): self
    {
        $this->insDate = $insDate;

        return $this;
    }

    public function getInsUser(): ?string
    {
        return $this->insUser;
    }

    public function setInsUser(?string $insUser): self
    {
        $this->insUser = $insUser;

        return $this;
    }

    public function getMajDate(): ?\DateTimeInterface
    {
        return $this->majDate;
    }

    public function setMajDate(?\DateTimeInterface $majDate): self
    {
        $this->majDate = $majDate;

        return $this;
    }

    public function getMajUser(): ?string
    {
        return $this->majUser;
    }

    public function setMajUser(?string $majUser): self
    {
        $this->majUser = $majUser;

        return $this;
    }


}

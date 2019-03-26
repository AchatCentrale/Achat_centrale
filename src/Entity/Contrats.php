<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrats
 *
 * @ORM\Table(name="CONTRATS", indexes={@ORM\Index(name="IDX_B45BA520DA314FF6", columns={"CO_CATEGORIE"}), @ORM\Index(name="IDX_B45BA5203F592A49", columns={"CL_ID"})})
 * @ORM\Entity
 */
class Contrats
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_USER", type="integer", nullable=true)
     */
    private $coUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_TIER", type="string", length=100, nullable=true)
     */
    private $coTier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_DESCR", type="string", length=200, nullable=true)
     */
    private $coDescr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CO_DEBUT", type="datetime", nullable=true)
     */
    private $coDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CO_RENOUV", type="datetime", nullable=true)
     */
    private $coRenouv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_DUREE", type="integer", nullable=true)
     */
    private $coDuree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_PREAVIS", type="integer", nullable=true)
     */
    private $coPreavis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_CONTACT", type="string", length=100, nullable=true)
     */
    private $coContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_CONT_TEL", type="string", length=50, nullable=true)
     */
    private $coContTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_CONT_MAIL", type="string", length=200, nullable=true)
     */
    private $coContMail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_CONFIDENT", type="integer", nullable=true)
     */
    private $coConfident;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CO_MONTANT", type="float", precision=53, scale=0, nullable=true)
     */
    private $coMontant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_ECHEANCE", type="string", length=50, nullable=true)
     */
    private $coEcheance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_MODE_PAIE", type="string", length=50, nullable=true)
     */
    private $coModePaie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_COMMENT", type="text", length=16, nullable=true)
     */
    private $coComment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_STATUS", type="integer", nullable=true)
     */
    private $coStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_ALERT", type="integer", nullable=true)
     */
    private $coAlert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_TEMPO", type="string", length=50, nullable=true)
     */
    private $coTempo;

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

    /**
     * @var \ContratsCat
     *
     * @ORM\ManyToOne(targetEntity="ContratsCat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CO_CATEGORIE", referencedColumnName="CC_ID")
     * })
     */
    private $coCategorie;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CL_ID", referencedColumnName="CL_ID")
     * })
     */
    private $cl;

    public function getCoId(): ?int
    {
        return $this->coId;
    }

    public function getCoUser(): ?int
    {
        return $this->coUser;
    }

    public function setCoUser(?int $coUser): self
    {
        $this->coUser = $coUser;

        return $this;
    }

    public function getCoTier(): ?string
    {
        return $this->coTier;
    }

    public function setCoTier(?string $coTier): self
    {
        $this->coTier = $coTier;

        return $this;
    }

    public function getCoDescr(): ?string
    {
        return $this->coDescr;
    }

    public function setCoDescr(?string $coDescr): self
    {
        $this->coDescr = $coDescr;

        return $this;
    }

    public function getCoDebut(): ?\DateTimeInterface
    {
        return $this->coDebut;
    }

    public function setCoDebut(?\DateTimeInterface $coDebut): self
    {
        $this->coDebut = $coDebut;

        return $this;
    }

    public function getCoRenouv(): ?\DateTimeInterface
    {
        return $this->coRenouv;
    }

    public function setCoRenouv(?\DateTimeInterface $coRenouv): self
    {
        $this->coRenouv = $coRenouv;

        return $this;
    }

    public function getCoDuree(): ?int
    {
        return $this->coDuree;
    }

    public function setCoDuree(?int $coDuree): self
    {
        $this->coDuree = $coDuree;

        return $this;
    }

    public function getCoPreavis(): ?int
    {
        return $this->coPreavis;
    }

    public function setCoPreavis(?int $coPreavis): self
    {
        $this->coPreavis = $coPreavis;

        return $this;
    }

    public function getCoContact(): ?string
    {
        return $this->coContact;
    }

    public function setCoContact(?string $coContact): self
    {
        $this->coContact = $coContact;

        return $this;
    }

    public function getCoContTel(): ?string
    {
        return $this->coContTel;
    }

    public function setCoContTel(?string $coContTel): self
    {
        $this->coContTel = $coContTel;

        return $this;
    }

    public function getCoContMail(): ?string
    {
        return $this->coContMail;
    }

    public function setCoContMail(?string $coContMail): self
    {
        $this->coContMail = $coContMail;

        return $this;
    }

    public function getCoConfident(): ?int
    {
        return $this->coConfident;
    }

    public function setCoConfident(?int $coConfident): self
    {
        $this->coConfident = $coConfident;

        return $this;
    }

    public function getCoMontant(): ?float
    {
        return $this->coMontant;
    }

    public function setCoMontant(?float $coMontant): self
    {
        $this->coMontant = $coMontant;

        return $this;
    }

    public function getCoEcheance(): ?string
    {
        return $this->coEcheance;
    }

    public function setCoEcheance(?string $coEcheance): self
    {
        $this->coEcheance = $coEcheance;

        return $this;
    }

    public function getCoModePaie(): ?string
    {
        return $this->coModePaie;
    }

    public function setCoModePaie(?string $coModePaie): self
    {
        $this->coModePaie = $coModePaie;

        return $this;
    }

    public function getCoComment(): ?string
    {
        return $this->coComment;
    }

    public function setCoComment(?string $coComment): self
    {
        $this->coComment = $coComment;

        return $this;
    }

    public function getCoStatus(): ?int
    {
        return $this->coStatus;
    }

    public function setCoStatus(?int $coStatus): self
    {
        $this->coStatus = $coStatus;

        return $this;
    }

    public function getCoAlert(): ?int
    {
        return $this->coAlert;
    }

    public function setCoAlert(?int $coAlert): self
    {
        $this->coAlert = $coAlert;

        return $this;
    }

    public function getCoTempo(): ?string
    {
        return $this->coTempo;
    }

    public function setCoTempo(?string $coTempo): self
    {
        $this->coTempo = $coTempo;

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

    public function getCoCategorie(): ?ContratsCat
    {
        return $this->coCategorie;
    }

    public function setCoCategorie(?ContratsCat $coCategorie): self
    {
        $this->coCategorie = $coCategorie;

        return $this;
    }

    public function getCl(): ?Clients
    {
        return $this->cl;
    }

    public function setCl(?Clients $cl): self
    {
        $this->cl = $cl;

        return $this;
    }


}

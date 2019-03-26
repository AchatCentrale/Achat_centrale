<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="CLIENTS", indexes={@ORM\Index(name="IDX_3F8DD06E425165C3", columns={"CE_ID"})})
 * @ORM\Entity
 */
class Clients
{
    /**
     * @var int
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RE_ID", type="integer", nullable=true)
     */
    private $reId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="COC_ID", type="integer", nullable=true)
     */
    private $cocId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_REF", type="string", length=50, nullable=true)
     */
    private $clRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_RAISONSOC", type="string", length=100, nullable=true)
     */
    private $clRaisonsoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_SIRET", type="string", length=14, nullable=true)
     */
    private $clSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ADRESSE1", type="string", length=100, nullable=true)
     */
    private $clAdresse1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ADRESSE2", type="string", length=100, nullable=true)
     */
    private $clAdresse2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_CP", type="string", length=10, nullable=true)
     */
    private $clCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_VILLE", type="string", length=50, nullable=true)
     */
    private $clVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_PAYS", type="string", length=50, nullable=true)
     */
    private $clPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_TEL", type="string", length=50, nullable=true)
     */
    private $clTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_FAX", type="string", length=50, nullable=true)
     */
    private $clFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_MAIL", type="string", length=100, nullable=true)
     */
    private $clMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_MAIL_FACT", type="string", length=100, nullable=true)
     */
    private $clMailFact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_WEB", type="string", length=100, nullable=true)
     */
    private $clWeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CL_DT_ADHESION", type="datetime", nullable=true)
     */
    private $clDtAdhesion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_LOGO", type="string", length=200, nullable=true)
     */
    private $clLogo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_PRESCRIPT", type="integer", nullable=true)
     */
    private $clPrescript;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CL_TARIF", type="float", precision=53, scale=0, nullable=true)
     */
    private $clTarif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_CODE_PROMO", type="string", length=50, nullable=true)
     */
    private $clCodePromo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_STATUS", type="integer", nullable=true)
     */
    private $clStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ADHESION", type="string", length=50, nullable=true)
     */
    private $clAdhesion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ACTIVITE", type="integer", nullable=true)
     */
    private $clActivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_GROUPE", type="integer", nullable=true)
     */
    private $clGroupe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_CLASSIF", type="integer", nullable=true)
     */
    private $clClassif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_EFFECTIF", type="integer", nullable=true)
     */
    private $clEffectif;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CL_CA", type="float", precision=53, scale=0, nullable=true)
     */
    private $clCa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CL_MASQ_HA", type="float", precision=53, scale=0, nullable=true)
     */
    private $clMasqHa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CL_MASQ_VT", type="float", precision=53, scale=0, nullable=true)
     */
    private $clMasqVt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ETIQUETTE", type="string", length=500, nullable=true)
     */
    private $clEtiquette;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ORIGINE_DET", type="string", length=100, nullable=true)
     */
    private $clOrigineDet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_TEMPO", type="string", length=50, nullable=true)
     */
    private $clTempo;

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
     * @var \ClientsEtat
     *
     * @ORM\ManyToOne(targetEntity="ClientsEtat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CE_ID", referencedColumnName="CE_ID")
     * })
     */
    private $ce;

    public function getClId(): ?int
    {
        return $this->clId;
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

    public function getReId(): ?int
    {
        return $this->reId;
    }

    public function setReId(?int $reId): self
    {
        $this->reId = $reId;

        return $this;
    }

    public function getCocId(): ?int
    {
        return $this->cocId;
    }

    public function setCocId(?int $cocId): self
    {
        $this->cocId = $cocId;

        return $this;
    }

    public function getClRef(): ?string
    {
        return $this->clRef;
    }

    public function setClRef(?string $clRef): self
    {
        $this->clRef = $clRef;

        return $this;
    }

    public function getClRaisonsoc(): ?string
    {
        return $this->clRaisonsoc;
    }

    public function setClRaisonsoc(?string $clRaisonsoc): self
    {
        $this->clRaisonsoc = $clRaisonsoc;

        return $this;
    }

    public function getClSiret(): ?string
    {
        return $this->clSiret;
    }

    public function setClSiret(?string $clSiret): self
    {
        $this->clSiret = $clSiret;

        return $this;
    }

    public function getClAdresse1(): ?string
    {
        return $this->clAdresse1;
    }

    public function setClAdresse1(?string $clAdresse1): self
    {
        $this->clAdresse1 = $clAdresse1;

        return $this;
    }

    public function getClAdresse2(): ?string
    {
        return $this->clAdresse2;
    }

    public function setClAdresse2(?string $clAdresse2): self
    {
        $this->clAdresse2 = $clAdresse2;

        return $this;
    }

    public function getClCp(): ?string
    {
        return $this->clCp;
    }

    public function setClCp(?string $clCp): self
    {
        $this->clCp = $clCp;

        return $this;
    }

    public function getClVille(): ?string
    {
        return $this->clVille;
    }

    public function setClVille(?string $clVille): self
    {
        $this->clVille = $clVille;

        return $this;
    }

    public function getClPays(): ?string
    {
        return $this->clPays;
    }

    public function setClPays(?string $clPays): self
    {
        $this->clPays = $clPays;

        return $this;
    }

    public function getClTel(): ?string
    {
        return $this->clTel;
    }

    public function setClTel(?string $clTel): self
    {
        $this->clTel = $clTel;

        return $this;
    }

    public function getClFax(): ?string
    {
        return $this->clFax;
    }

    public function setClFax(?string $clFax): self
    {
        $this->clFax = $clFax;

        return $this;
    }

    public function getClMail(): ?string
    {
        return $this->clMail;
    }

    public function setClMail(?string $clMail): self
    {
        $this->clMail = $clMail;

        return $this;
    }

    public function getClMailFact(): ?string
    {
        return $this->clMailFact;
    }

    public function setClMailFact(?string $clMailFact): self
    {
        $this->clMailFact = $clMailFact;

        return $this;
    }

    public function getClWeb(): ?string
    {
        return $this->clWeb;
    }

    public function setClWeb(?string $clWeb): self
    {
        $this->clWeb = $clWeb;

        return $this;
    }

    public function getClDtAdhesion(): ?\DateTimeInterface
    {
        return $this->clDtAdhesion;
    }

    public function setClDtAdhesion(?\DateTimeInterface $clDtAdhesion): self
    {
        $this->clDtAdhesion = $clDtAdhesion;

        return $this;
    }

    public function getClLogo(): ?string
    {
        return $this->clLogo;
    }

    public function setClLogo(?string $clLogo): self
    {
        $this->clLogo = $clLogo;

        return $this;
    }

    public function getClPrescript(): ?int
    {
        return $this->clPrescript;
    }

    public function setClPrescript(?int $clPrescript): self
    {
        $this->clPrescript = $clPrescript;

        return $this;
    }

    public function getClTarif(): ?float
    {
        return $this->clTarif;
    }

    public function setClTarif(?float $clTarif): self
    {
        $this->clTarif = $clTarif;

        return $this;
    }

    public function getClCodePromo(): ?string
    {
        return $this->clCodePromo;
    }

    public function setClCodePromo(?string $clCodePromo): self
    {
        $this->clCodePromo = $clCodePromo;

        return $this;
    }

    public function getClStatus(): ?int
    {
        return $this->clStatus;
    }

    public function setClStatus(?int $clStatus): self
    {
        $this->clStatus = $clStatus;

        return $this;
    }

    public function getClAdhesion(): ?string
    {
        return $this->clAdhesion;
    }

    public function setClAdhesion(?string $clAdhesion): self
    {
        $this->clAdhesion = $clAdhesion;

        return $this;
    }

    public function getClActivite(): ?int
    {
        return $this->clActivite;
    }

    public function setClActivite(?int $clActivite): self
    {
        $this->clActivite = $clActivite;

        return $this;
    }

    public function getClGroupe(): ?int
    {
        return $this->clGroupe;
    }

    public function setClGroupe(?int $clGroupe): self
    {
        $this->clGroupe = $clGroupe;

        return $this;
    }

    public function getClClassif(): ?int
    {
        return $this->clClassif;
    }

    public function setClClassif(?int $clClassif): self
    {
        $this->clClassif = $clClassif;

        return $this;
    }

    public function getClEffectif(): ?int
    {
        return $this->clEffectif;
    }

    public function setClEffectif(?int $clEffectif): self
    {
        $this->clEffectif = $clEffectif;

        return $this;
    }

    public function getClCa(): ?float
    {
        return $this->clCa;
    }

    public function setClCa(?float $clCa): self
    {
        $this->clCa = $clCa;

        return $this;
    }

    public function getClMasqHa(): ?float
    {
        return $this->clMasqHa;
    }

    public function setClMasqHa(?float $clMasqHa): self
    {
        $this->clMasqHa = $clMasqHa;

        return $this;
    }

    public function getClMasqVt(): ?float
    {
        return $this->clMasqVt;
    }

    public function setClMasqVt(?float $clMasqVt): self
    {
        $this->clMasqVt = $clMasqVt;

        return $this;
    }

    public function getClEtiquette(): ?string
    {
        return $this->clEtiquette;
    }

    public function setClEtiquette(?string $clEtiquette): self
    {
        $this->clEtiquette = $clEtiquette;

        return $this;
    }

    public function getClOrigineDet(): ?string
    {
        return $this->clOrigineDet;
    }

    public function setClOrigineDet(?string $clOrigineDet): self
    {
        $this->clOrigineDet = $clOrigineDet;

        return $this;
    }

    public function getClTempo(): ?string
    {
        return $this->clTempo;
    }

    public function setClTempo(?string $clTempo): self
    {
        $this->clTempo = $clTempo;

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

    public function getCe(): ?ClientsEtat
    {
        return $this->ce;
    }

    public function setCe(?ClientsEtat $ce): self
    {
        $this->ce = $ce;

        return $this;
    }


}

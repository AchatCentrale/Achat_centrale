<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuditsDetail
 *
 * @ORM\Table(name="AUDITS_DETAIL", indexes={@ORM\Index(name="IDX_813F0100389136A3", columns={"AE_ID"})})
 * @ORM\Entity
 */
class AuditsDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="AD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_REF", type="string", length=50, nullable=true)
     */
    private $adRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_DESCR", type="string", length=200, nullable=true)
     */
    private $adDescr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AD_PRIX_ACTU", type="float", precision=53, scale=0, nullable=true)
     */
    private $adPrixActu;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AD_PRIX_CA", type="float", precision=53, scale=0, nullable=true)
     */
    private $adPrixCa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AD_QTE", type="integer", nullable=true)
     */
    private $adQte;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AD_ECO_EUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $adEcoEur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AD_ECO_PCT", type="float", precision=53, scale=0, nullable=true)
     */
    private $adEcoPct;

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
     * @var \AuditsEntete
     *
     * @ORM\ManyToOne(targetEntity="AuditsEntete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AE_ID", referencedColumnName="AE_ID")
     * })
     */
    private $ae;

    public function getAdId(): ?int
    {
        return $this->adId;
    }

    public function getPrId(): ?int
    {
        return $this->prId;
    }

    public function setPrId(?int $prId): self
    {
        $this->prId = $prId;

        return $this;
    }

    public function getAdRef(): ?string
    {
        return $this->adRef;
    }

    public function setAdRef(?string $adRef): self
    {
        $this->adRef = $adRef;

        return $this;
    }

    public function getAdDescr(): ?string
    {
        return $this->adDescr;
    }

    public function setAdDescr(?string $adDescr): self
    {
        $this->adDescr = $adDescr;

        return $this;
    }

    public function getAdPrixActu(): ?float
    {
        return $this->adPrixActu;
    }

    public function setAdPrixActu(?float $adPrixActu): self
    {
        $this->adPrixActu = $adPrixActu;

        return $this;
    }

    public function getAdPrixCa(): ?float
    {
        return $this->adPrixCa;
    }

    public function setAdPrixCa(?float $adPrixCa): self
    {
        $this->adPrixCa = $adPrixCa;

        return $this;
    }

    public function getAdQte(): ?int
    {
        return $this->adQte;
    }

    public function setAdQte(?int $adQte): self
    {
        $this->adQte = $adQte;

        return $this;
    }

    public function getAdEcoEur(): ?float
    {
        return $this->adEcoEur;
    }

    public function setAdEcoEur(?float $adEcoEur): self
    {
        $this->adEcoEur = $adEcoEur;

        return $this;
    }

    public function getAdEcoPct(): ?float
    {
        return $this->adEcoPct;
    }

    public function setAdEcoPct(?float $adEcoPct): self
    {
        $this->adEcoPct = $adEcoPct;

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

    public function getAe(): ?AuditsEntete
    {
        return $this->ae;
    }

    public function setAe(?AuditsEntete $ae): self
    {
        $this->ae = $ae;

        return $this;
    }


}

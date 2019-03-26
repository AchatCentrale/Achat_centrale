<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeEntete
 *
 * @ORM\Table(name="COMMANDE_ENTETE", indexes={@ORM\Index(name="IDX_BD3767A9FD61DBA2", columns={"ME_ID"})})
 * @ORM\Entity
 */
class CommandeEntete
{
    /**
     * @var int
     *
     * @ORM\Column(name="CE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ceId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CE_DATE", type="date", nullable=true)
     */
    private $ceDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CE_DATE_LIV", type="date", nullable=true)
     */
    private $ceDateLiv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CE_PORT", type="float", precision=53, scale=0, nullable=true)
     */
    private $cePort;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CE_PORT_TVA", type="float", precision=53, scale=0, nullable=true)
     */
    private $cePortTva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CE_TOTAL", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceTotal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CE_ETIQ_CB", type="integer", nullable=true)
     */
    private $ceEtiqCb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CE_ETIQ_PV", type="integer", nullable=true)
     */
    private $ceEtiqPv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CE_ETIQ_IMG", type="string", length=100, nullable=true)
     */
    private $ceEtiqImg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CE_ARLEQUIN", type="string", length=50, nullable=true)
     */
    private $ceArlequin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CE_TEMPO", type="string", length=50, nullable=true)
     */
    private $ceTempo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CE_STATUS", type="integer", nullable=true)
     */
    private $ceStatus;

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
     * @var \MessageEntete
     *
     * @ORM\ManyToOne(targetEntity="MessageEntete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ME_ID", referencedColumnName="ME_ID")
     * })
     */
    private $me;

    public function getCeId(): ?int
    {
        return $this->ceId;
    }

    public function getClId(): ?int
    {
        return $this->clId;
    }

    public function setClId(?int $clId): self
    {
        $this->clId = $clId;

        return $this;
    }

    public function getCeDate(): ?\DateTimeInterface
    {
        return $this->ceDate;
    }

    public function setCeDate(?\DateTimeInterface $ceDate): self
    {
        $this->ceDate = $ceDate;

        return $this;
    }

    public function getCeDateLiv(): ?\DateTimeInterface
    {
        return $this->ceDateLiv;
    }

    public function setCeDateLiv(?\DateTimeInterface $ceDateLiv): self
    {
        $this->ceDateLiv = $ceDateLiv;

        return $this;
    }

    public function getCePort(): ?float
    {
        return $this->cePort;
    }

    public function setCePort(?float $cePort): self
    {
        $this->cePort = $cePort;

        return $this;
    }

    public function getCePortTva(): ?float
    {
        return $this->cePortTva;
    }

    public function setCePortTva(?float $cePortTva): self
    {
        $this->cePortTva = $cePortTva;

        return $this;
    }

    public function getCeTotal(): ?float
    {
        return $this->ceTotal;
    }

    public function setCeTotal(?float $ceTotal): self
    {
        $this->ceTotal = $ceTotal;

        return $this;
    }

    public function getCeEtiqCb(): ?int
    {
        return $this->ceEtiqCb;
    }

    public function setCeEtiqCb(?int $ceEtiqCb): self
    {
        $this->ceEtiqCb = $ceEtiqCb;

        return $this;
    }

    public function getCeEtiqPv(): ?int
    {
        return $this->ceEtiqPv;
    }

    public function setCeEtiqPv(?int $ceEtiqPv): self
    {
        $this->ceEtiqPv = $ceEtiqPv;

        return $this;
    }

    public function getCeEtiqImg(): ?string
    {
        return $this->ceEtiqImg;
    }

    public function setCeEtiqImg(?string $ceEtiqImg): self
    {
        $this->ceEtiqImg = $ceEtiqImg;

        return $this;
    }

    public function getCeArlequin(): ?string
    {
        return $this->ceArlequin;
    }

    public function setCeArlequin(?string $ceArlequin): self
    {
        $this->ceArlequin = $ceArlequin;

        return $this;
    }

    public function getCeTempo(): ?string
    {
        return $this->ceTempo;
    }

    public function setCeTempo(?string $ceTempo): self
    {
        $this->ceTempo = $ceTempo;

        return $this;
    }

    public function getCeStatus(): ?int
    {
        return $this->ceStatus;
    }

    public function setCeStatus(?int $ceStatus): self
    {
        $this->ceStatus = $ceStatus;

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

    public function getMe(): ?MessageEntete
    {
        return $this->me;
    }

    public function setMe(?MessageEntete $me): self
    {
        $this->me = $me;

        return $this;
    }


}

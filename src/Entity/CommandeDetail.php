<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeDetail
 *
 * @ORM\Table(name="COMMANDE_DETAIL", indexes={@ORM\Index(name="IDX_8002F979425165C3", columns={"CE_ID"})})
 * @ORM\Entity
 */
class CommandeDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="CD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cdId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NC_ID", type="integer", nullable=true)
     */
    private $ncId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CD_DATE", type="datetime", nullable=true)
     */
    private $cdDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_QTE", type="integer", nullable=true)
     */
    private $cdQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_DETAIL", type="string", length=50, nullable=true)
     */
    private $cdDetail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_REF", type="string", length=100, nullable=true)
     */
    private $cdRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_EAN", type="string", length=20, nullable=true)
     */
    private $cdEan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_NOM", type="string", length=200, nullable=true)
     */
    private $cdNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_DESCR_COURTE", type="string", length=500, nullable=true)
     */
    private $cdDescrCourte;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CD_PRIX_PUBLIC", type="float", precision=53, scale=0, nullable=true)
     */
    private $cdPrixPublic;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CD_PRIX_CA", type="float", precision=53, scale=0, nullable=true)
     */
    private $cdPrixCa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CD_PRIX_VC", type="float", precision=53, scale=0, nullable=true)
     */
    private $cdPrixVc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL1", type="integer", nullable=true)
     */
    private $cdDecl1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL2", type="integer", nullable=true)
     */
    private $cdDecl2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL3", type="integer", nullable=true)
     */
    private $cdDecl3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL4", type="integer", nullable=true)
     */
    private $cdDecl4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL5", type="integer", nullable=true)
     */
    private $cdDecl5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_STATUS", type="integer", nullable=true)
     */
    private $cdStatus;

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
     * @var \CommandeEntete
     *
     * @ORM\ManyToOne(targetEntity="CommandeEntete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CE_ID", referencedColumnName="CE_ID")
     * })
     */
    private $ce;

    public function getCdId(): ?int
    {
        return $this->cdId;
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

    public function getNcId(): ?int
    {
        return $this->ncId;
    }

    public function setNcId(?int $ncId): self
    {
        $this->ncId = $ncId;

        return $this;
    }

    public function getCdDate(): ?\DateTimeInterface
    {
        return $this->cdDate;
    }

    public function setCdDate(?\DateTimeInterface $cdDate): self
    {
        $this->cdDate = $cdDate;

        return $this;
    }

    public function getCdQte(): ?int
    {
        return $this->cdQte;
    }

    public function setCdQte(?int $cdQte): self
    {
        $this->cdQte = $cdQte;

        return $this;
    }

    public function getCdDetail(): ?string
    {
        return $this->cdDetail;
    }

    public function setCdDetail(?string $cdDetail): self
    {
        $this->cdDetail = $cdDetail;

        return $this;
    }

    public function getCdRef(): ?string
    {
        return $this->cdRef;
    }

    public function setCdRef(?string $cdRef): self
    {
        $this->cdRef = $cdRef;

        return $this;
    }

    public function getCdEan(): ?string
    {
        return $this->cdEan;
    }

    public function setCdEan(?string $cdEan): self
    {
        $this->cdEan = $cdEan;

        return $this;
    }

    public function getCdNom(): ?string
    {
        return $this->cdNom;
    }

    public function setCdNom(?string $cdNom): self
    {
        $this->cdNom = $cdNom;

        return $this;
    }

    public function getCdDescrCourte(): ?string
    {
        return $this->cdDescrCourte;
    }

    public function setCdDescrCourte(?string $cdDescrCourte): self
    {
        $this->cdDescrCourte = $cdDescrCourte;

        return $this;
    }

    public function getCdPrixPublic(): ?float
    {
        return $this->cdPrixPublic;
    }

    public function setCdPrixPublic(?float $cdPrixPublic): self
    {
        $this->cdPrixPublic = $cdPrixPublic;

        return $this;
    }

    public function getCdPrixCa(): ?float
    {
        return $this->cdPrixCa;
    }

    public function setCdPrixCa(?float $cdPrixCa): self
    {
        $this->cdPrixCa = $cdPrixCa;

        return $this;
    }

    public function getCdPrixVc(): ?float
    {
        return $this->cdPrixVc;
    }

    public function setCdPrixVc(?float $cdPrixVc): self
    {
        $this->cdPrixVc = $cdPrixVc;

        return $this;
    }

    public function getCdDecl1(): ?int
    {
        return $this->cdDecl1;
    }

    public function setCdDecl1(?int $cdDecl1): self
    {
        $this->cdDecl1 = $cdDecl1;

        return $this;
    }

    public function getCdDecl2(): ?int
    {
        return $this->cdDecl2;
    }

    public function setCdDecl2(?int $cdDecl2): self
    {
        $this->cdDecl2 = $cdDecl2;

        return $this;
    }

    public function getCdDecl3(): ?int
    {
        return $this->cdDecl3;
    }

    public function setCdDecl3(?int $cdDecl3): self
    {
        $this->cdDecl3 = $cdDecl3;

        return $this;
    }

    public function getCdDecl4(): ?int
    {
        return $this->cdDecl4;
    }

    public function setCdDecl4(?int $cdDecl4): self
    {
        $this->cdDecl4 = $cdDecl4;

        return $this;
    }

    public function getCdDecl5(): ?int
    {
        return $this->cdDecl5;
    }

    public function setCdDecl5(?int $cdDecl5): self
    {
        $this->cdDecl5 = $cdDecl5;

        return $this;
    }

    public function getCdStatus(): ?int
    {
        return $this->cdStatus;
    }

    public function setCdStatus(?int $cdStatus): self
    {
        $this->cdStatus = $cdStatus;

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

    public function getCe(): ?CommandeEntete
    {
        return $this->ce;
    }

    public function setCe(?CommandeEntete $ce): self
    {
        $this->ce = $ce;

        return $this;
    }


}

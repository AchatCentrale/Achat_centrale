<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PanierTemp
 *
 * @ORM\Table(name="PANIER_TEMP")
 * @ORM\Entity
 */
class PanierTemp
{
    /**
     * @var int
     *
     * @ORM\Column(name="PT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ptId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=true)
     */
    private $ccId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FO_ID", type="integer", nullable=true)
     */
    private $foId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ID", type="integer", nullable=true)
     */
    private $meId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NC_ID", type="integer", nullable=true)
     */
    private $ncId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PT_DATE", type="date", nullable=true)
     */
    private $ptDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_QTE", type="integer", nullable=true)
     */
    private $ptQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PT_DETAIL", type="string", length=50, nullable=true)
     */
    private $ptDetail;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PT_PRIX_VC", type="float", precision=53, scale=0, nullable=true)
     */
    private $ptPrixVc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL1", type="integer", nullable=true)
     */
    private $ptDecl1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL2", type="integer", nullable=true)
     */
    private $ptDecl2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL3", type="integer", nullable=true)
     */
    private $ptDecl3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL4", type="integer", nullable=true)
     */
    private $ptDecl4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL5", type="integer", nullable=true)
     */
    private $ptDecl5;

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

    public function getPtId(): ?int
    {
        return $this->ptId;
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

    public function getCcId(): ?int
    {
        return $this->ccId;
    }

    public function setCcId(?int $ccId): self
    {
        $this->ccId = $ccId;

        return $this;
    }

    public function getFoId(): ?int
    {
        return $this->foId;
    }

    public function setFoId(?int $foId): self
    {
        $this->foId = $foId;

        return $this;
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

    public function getMeId(): ?int
    {
        return $this->meId;
    }

    public function setMeId(?int $meId): self
    {
        $this->meId = $meId;

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

    public function getPtDate(): ?\DateTimeInterface
    {
        return $this->ptDate;
    }

    public function setPtDate(?\DateTimeInterface $ptDate): self
    {
        $this->ptDate = $ptDate;

        return $this;
    }

    public function getPtQte(): ?int
    {
        return $this->ptQte;
    }

    public function setPtQte(?int $ptQte): self
    {
        $this->ptQte = $ptQte;

        return $this;
    }

    public function getPtDetail(): ?string
    {
        return $this->ptDetail;
    }

    public function setPtDetail(?string $ptDetail): self
    {
        $this->ptDetail = $ptDetail;

        return $this;
    }

    public function getPtPrixVc(): ?float
    {
        return $this->ptPrixVc;
    }

    public function setPtPrixVc(?float $ptPrixVc): self
    {
        $this->ptPrixVc = $ptPrixVc;

        return $this;
    }

    public function getPtDecl1(): ?int
    {
        return $this->ptDecl1;
    }

    public function setPtDecl1(?int $ptDecl1): self
    {
        $this->ptDecl1 = $ptDecl1;

        return $this;
    }

    public function getPtDecl2(): ?int
    {
        return $this->ptDecl2;
    }

    public function setPtDecl2(?int $ptDecl2): self
    {
        $this->ptDecl2 = $ptDecl2;

        return $this;
    }

    public function getPtDecl3(): ?int
    {
        return $this->ptDecl3;
    }

    public function setPtDecl3(?int $ptDecl3): self
    {
        $this->ptDecl3 = $ptDecl3;

        return $this;
    }

    public function getPtDecl4(): ?int
    {
        return $this->ptDecl4;
    }

    public function setPtDecl4(?int $ptDecl4): self
    {
        $this->ptDecl4 = $ptDecl4;

        return $this;
    }

    public function getPtDecl5(): ?int
    {
        return $this->ptDecl5;
    }

    public function setPtDecl5(?int $ptDecl5): self
    {
        $this->ptDecl5 = $ptDecl5;

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

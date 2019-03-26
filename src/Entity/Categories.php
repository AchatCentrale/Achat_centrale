<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="Categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="CatID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CatIDParent", type="integer", nullable=true)
     */
    private $catidparent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatDescription", type="string", length=100, nullable=true)
     */
    private $catdescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatTitre", type="string", length=100, nullable=true)
     */
    private $cattitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatTitreReq", type="string", length=100, nullable=true)
     */
    private $cattitrereq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatLien", type="string", length=300, nullable=true)
     */
    private $catlien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatLienRW", type="string", length=100, nullable=true)
     */
    private $catlienrw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatTagDescr", type="string", length=200, nullable=true)
     */
    private $cattagdescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatTagKeyword", type="string", length=1000, nullable=true)
     */
    private $cattagkeyword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatImage", type="string", length=100, nullable=true)
     */
    private $catimage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatImage_H", type="string", length=100, nullable=true)
     */
    private $catimageH;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatBandeau", type="string", length=100, nullable=true)
     */
    private $catbandeau;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CatSort", type="integer", nullable=true)
     */
    private $catsort;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CatDate", type="datetime", nullable=true)
     */
    private $catdate;

    public function getCatid(): ?int
    {
        return $this->catid;
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

    public function getCatidparent(): ?int
    {
        return $this->catidparent;
    }

    public function setCatidparent(?int $catidparent): self
    {
        $this->catidparent = $catidparent;

        return $this;
    }

    public function getCatdescription(): ?string
    {
        return $this->catdescription;
    }

    public function setCatdescription(?string $catdescription): self
    {
        $this->catdescription = $catdescription;

        return $this;
    }

    public function getCattitre(): ?string
    {
        return $this->cattitre;
    }

    public function setCattitre(?string $cattitre): self
    {
        $this->cattitre = $cattitre;

        return $this;
    }

    public function getCattitrereq(): ?string
    {
        return $this->cattitrereq;
    }

    public function setCattitrereq(?string $cattitrereq): self
    {
        $this->cattitrereq = $cattitrereq;

        return $this;
    }

    public function getCatlien(): ?string
    {
        return $this->catlien;
    }

    public function setCatlien(?string $catlien): self
    {
        $this->catlien = $catlien;

        return $this;
    }

    public function getCatlienrw(): ?string
    {
        return $this->catlienrw;
    }

    public function setCatlienrw(?string $catlienrw): self
    {
        $this->catlienrw = $catlienrw;

        return $this;
    }

    public function getCattagdescr(): ?string
    {
        return $this->cattagdescr;
    }

    public function setCattagdescr(?string $cattagdescr): self
    {
        $this->cattagdescr = $cattagdescr;

        return $this;
    }

    public function getCattagkeyword(): ?string
    {
        return $this->cattagkeyword;
    }

    public function setCattagkeyword(?string $cattagkeyword): self
    {
        $this->cattagkeyword = $cattagkeyword;

        return $this;
    }

    public function getCatimage(): ?string
    {
        return $this->catimage;
    }

    public function setCatimage(?string $catimage): self
    {
        $this->catimage = $catimage;

        return $this;
    }

    public function getCatimageH(): ?string
    {
        return $this->catimageH;
    }

    public function setCatimageH(?string $catimageH): self
    {
        $this->catimageH = $catimageH;

        return $this;
    }

    public function getCatbandeau(): ?string
    {
        return $this->catbandeau;
    }

    public function setCatbandeau(?string $catbandeau): self
    {
        $this->catbandeau = $catbandeau;

        return $this;
    }

    public function getCatsort(): ?int
    {
        return $this->catsort;
    }

    public function setCatsort(?int $catsort): self
    {
        $this->catsort = $catsort;

        return $this;
    }

    public function getCatdate(): ?\DateTimeInterface
    {
        return $this->catdate;
    }

    public function setCatdate(?\DateTimeInterface $catdate): self
    {
        $this->catdate = $catdate;

        return $this;
    }


}

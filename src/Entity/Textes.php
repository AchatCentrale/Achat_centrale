<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Textes
 *
 * @ORM\Table(name="Textes", indexes={@ORM\Index(name="IDX_5BFAE4E45919F4AB", columns={"CatID"})})
 * @ORM\Entity
 */
class Textes
{
    /**
     * @var int
     *
     * @ORM\Column(name="TxtID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $txtid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TxtTitre", type="string", length=100, nullable=true)
     */
    private $txttitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TxtDescription", type="string", length=7900, nullable=true)
     */
    private $txtdescription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TxtSort", type="integer", nullable=true)
     */
    private $txtsort;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="TxtSortDt", type="datetime", nullable=true)
     */
    private $txtsortdt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="TxtDate", type="datetime", nullable=true)
     */
    private $txtdate;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CatID", referencedColumnName="CatID")
     * })
     */
    private $catid;

    public function getTxtid(): ?int
    {
        return $this->txtid;
    }

    public function getTxttitre(): ?string
    {
        return $this->txttitre;
    }

    public function setTxttitre(?string $txttitre): self
    {
        $this->txttitre = $txttitre;

        return $this;
    }

    public function getTxtdescription(): ?string
    {
        return $this->txtdescription;
    }

    public function setTxtdescription(?string $txtdescription): self
    {
        $this->txtdescription = $txtdescription;

        return $this;
    }

    public function getTxtsort(): ?int
    {
        return $this->txtsort;
    }

    public function setTxtsort(?int $txtsort): self
    {
        $this->txtsort = $txtsort;

        return $this;
    }

    public function getTxtsortdt(): ?\DateTimeInterface
    {
        return $this->txtsortdt;
    }

    public function setTxtsortdt(?\DateTimeInterface $txtsortdt): self
    {
        $this->txtsortdt = $txtsortdt;

        return $this;
    }

    public function getTxtdate(): ?\DateTimeInterface
    {
        return $this->txtdate;
    }

    public function setTxtdate(?\DateTimeInterface $txtdate): self
    {
        $this->txtdate = $txtdate;

        return $this;
    }

    public function getCatid(): ?Categories
    {
        return $this->catid;
    }

    public function setCatid(?Categories $catid): self
    {
        $this->catid = $catid;

        return $this;
    }


}

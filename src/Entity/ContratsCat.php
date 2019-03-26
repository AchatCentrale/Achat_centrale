<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratsCat
 *
 * @ORM\Table(name="CONTRATS_CAT", indexes={@ORM\Index(name="IDX_AF50DB674D0C1225", columns={"SO_ID"})})
 * @ORM\Entity
 */
class ContratsCat
{
    /**
     * @var int
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_DESCR", type="string", length=100, nullable=true)
     */
    private $ccDescr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CC_DATE", type="datetime", nullable=true)
     */
    private $ccDate;

    /**
     * @var \Societes
     *
     * @ORM\ManyToOne(targetEntity="Societes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SO_ID", referencedColumnName="SO_ID")
     * })
     */
    private $so;

    public function getCcId(): ?int
    {
        return $this->ccId;
    }

    public function getCcDescr(): ?string
    {
        return $this->ccDescr;
    }

    public function setCcDescr(?string $ccDescr): self
    {
        $this->ccDescr = $ccDescr;

        return $this;
    }

    public function getCcDate(): ?\DateTimeInterface
    {
        return $this->ccDate;
    }

    public function setCcDate(?\DateTimeInterface $ccDate): self
    {
        $this->ccDate = $ccDate;

        return $this;
    }

    public function getSo(): ?Societes
    {
        return $this->so;
    }

    public function setSo(?Societes $so): self
    {
        $this->so = $so;

        return $this;
    }


}

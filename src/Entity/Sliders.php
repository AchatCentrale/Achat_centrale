<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sliders
 *
 * @ORM\Table(name="SLIDERS")
 * @ORM\Entity
 */
class Sliders
{
    /**
     * @var int
     *
     * @ORM\Column(name="SL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $slId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SL_TITRE", type="string", length=100, nullable=true)
     */
    private $slTitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SL_SLIDE", type="string", length=100, nullable=true)
     */
    private $slSlide;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SL_LIEN", type="string", length=1000, nullable=true)
     */
    private $slLien;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SL_ORDRE", type="integer", nullable=true)
     */
    private $slOrdre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SL_STATUS", type="integer", nullable=true)
     */
    private $slStatus;

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

    public function getSlId(): ?int
    {
        return $this->slId;
    }

    public function getSlTitre(): ?string
    {
        return $this->slTitre;
    }

    public function setSlTitre(?string $slTitre): self
    {
        $this->slTitre = $slTitre;

        return $this;
    }

    public function getSlSlide(): ?string
    {
        return $this->slSlide;
    }

    public function setSlSlide(?string $slSlide): self
    {
        $this->slSlide = $slSlide;

        return $this;
    }

    public function getSlLien(): ?string
    {
        return $this->slLien;
    }

    public function setSlLien(?string $slLien): self
    {
        $this->slLien = $slLien;

        return $this;
    }

    public function getSlOrdre(): ?int
    {
        return $this->slOrdre;
    }

    public function setSlOrdre(?int $slOrdre): self
    {
        $this->slOrdre = $slOrdre;

        return $this;
    }

    public function getSlStatus(): ?int
    {
        return $this->slStatus;
    }

    public function setSlStatus(?int $slStatus): self
    {
        $this->slStatus = $slStatus;

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

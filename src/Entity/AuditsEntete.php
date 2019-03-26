<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuditsEntete
 *
 * @ORM\Table(name="AUDITS_ENTETE")
 * @ORM\Entity
 */
class AuditsEntete
{
    /**
     * @var int
     *
     * @ORM\Column(name="AE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aeId;

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
     * @ORM\Column(name="US_ID", type="integer", nullable=true)
     */
    private $usId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="AE_DATE", type="date", nullable=true)
     */
    private $aeDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AE_TOTAL_EUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $aeTotalEur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AE_TOTAL_PCT", type="float", precision=53, scale=0, nullable=true)
     */
    private $aeTotalPct;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AE_AN_EUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $aeAnEur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AE_AN_PCT", type="float", precision=53, scale=0, nullable=true)
     */
    private $aeAnPct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AE_TEMPO", type="string", length=50, nullable=true)
     */
    private $aeTempo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AE_STATUS", type="integer", nullable=true)
     */
    private $aeStatus;

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

    public function getAeId(): ?int
    {
        return $this->aeId;
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

    public function getUsId(): ?int
    {
        return $this->usId;
    }

    public function setUsId(?int $usId): self
    {
        $this->usId = $usId;

        return $this;
    }

    public function getAeDate(): ?\DateTimeInterface
    {
        return $this->aeDate;
    }

    public function setAeDate(?\DateTimeInterface $aeDate): self
    {
        $this->aeDate = $aeDate;

        return $this;
    }

    public function getAeTotalEur(): ?float
    {
        return $this->aeTotalEur;
    }

    public function setAeTotalEur(?float $aeTotalEur): self
    {
        $this->aeTotalEur = $aeTotalEur;

        return $this;
    }

    public function getAeTotalPct(): ?float
    {
        return $this->aeTotalPct;
    }

    public function setAeTotalPct(?float $aeTotalPct): self
    {
        $this->aeTotalPct = $aeTotalPct;

        return $this;
    }

    public function getAeAnEur(): ?float
    {
        return $this->aeAnEur;
    }

    public function setAeAnEur(?float $aeAnEur): self
    {
        $this->aeAnEur = $aeAnEur;

        return $this;
    }

    public function getAeAnPct(): ?float
    {
        return $this->aeAnPct;
    }

    public function setAeAnPct(?float $aeAnPct): self
    {
        $this->aeAnPct = $aeAnPct;

        return $this;
    }

    public function getAeTempo(): ?string
    {
        return $this->aeTempo;
    }

    public function setAeTempo(?string $aeTempo): self
    {
        $this->aeTempo = $aeTempo;

        return $this;
    }

    public function getAeStatus(): ?int
    {
        return $this->aeStatus;
    }

    public function setAeStatus(?int $aeStatus): self
    {
        $this->aeStatus = $aeStatus;

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

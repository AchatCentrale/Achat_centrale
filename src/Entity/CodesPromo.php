<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodesPromo
 *
 * @ORM\Table(name="CODES_PROMO")
 * @ORM\Entity
 */
class CodesPromo
{
    /**
     * @var int
     *
     * @ORM\Column(name="CP_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CP_CODE", type="string", length=50, nullable=true)
     */
    private $cpCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CP_REMISE", type="float", precision=53, scale=0, nullable=true)
     */
    private $cpRemise;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CP_VALIDITE", type="datetime", nullable=true)
     */
    private $cpValidite;

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

    public function getCpId(): ?int
    {
        return $this->cpId;
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

    public function getCpCode(): ?string
    {
        return $this->cpCode;
    }

    public function setCpCode(?string $cpCode): self
    {
        $this->cpCode = $cpCode;

        return $this;
    }

    public function getCpRemise(): ?float
    {
        return $this->cpRemise;
    }

    public function setCpRemise(?float $cpRemise): self
    {
        $this->cpRemise = $cpRemise;

        return $this;
    }

    public function getCpValidite(): ?\DateTimeInterface
    {
        return $this->cpValidite;
    }

    public function setCpValidite(?\DateTimeInterface $cpValidite): self
    {
        $this->cpValidite = $cpValidite;

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

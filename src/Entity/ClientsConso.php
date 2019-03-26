<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsConso
 *
 * @ORM\Table(name="CLIENTS_CONSO")
 * @ORM\Entity
 */
class ClientsConso
{
    /**
     * @var int
     *
     * @ORM\Column(name="CLC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clcId;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="CLC_DATE", type="date", nullable=true)
     */
    private $clcDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CLC_PRIX_PUBLIC", type="float", precision=53, scale=0, nullable=true)
     */
    private $clcPrixPublic;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CLC_PRIX_CENTRALE", type="float", precision=53, scale=0, nullable=true)
     */
    private $clcPrixCentrale;

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

    public function getClcId(): ?int
    {
        return $this->clcId;
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

    public function getClcDate(): ?\DateTimeInterface
    {
        return $this->clcDate;
    }

    public function setClcDate(?\DateTimeInterface $clcDate): self
    {
        $this->clcDate = $clcDate;

        return $this;
    }

    public function getClcPrixPublic(): ?float
    {
        return $this->clcPrixPublic;
    }

    public function setClcPrixPublic(?float $clcPrixPublic): self
    {
        $this->clcPrixPublic = $clcPrixPublic;

        return $this;
    }

    public function getClcPrixCentrale(): ?float
    {
        return $this->clcPrixCentrale;
    }

    public function setClcPrixCentrale(?float $clcPrixCentrale): self
    {
        $this->clcPrixCentrale = $clcPrixCentrale;

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


}

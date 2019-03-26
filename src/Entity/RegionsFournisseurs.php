<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegionsFournisseurs
 *
 * @ORM\Table(name="REGIONS_FOURNISSEURS")
 * @ORM\Entity
 */
class RegionsFournisseurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="RF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rfId;

    /**
     * @var int
     *
     * @ORM\Column(name="RE_ID", type="integer", nullable=false)
     */
    private $reId;

    /**
     * @var int
     *
     * @ORM\Column(name="FO_ID", type="integer", nullable=false)
     */
    private $foId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FC_ID", type="integer", nullable=true)
     */
    private $fcId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="US_ID", type="integer", nullable=true)
     */
    private $usId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="INS_DATE", type="date", nullable=true)
     */
    private $insDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="INS_USER", type="string", length=100, nullable=true)
     */
    private $insUser;

    public function getRfId(): ?int
    {
        return $this->rfId;
    }

    public function getReId(): ?int
    {
        return $this->reId;
    }

    public function setReId(int $reId): self
    {
        $this->reId = $reId;

        return $this;
    }

    public function getFoId(): ?int
    {
        return $this->foId;
    }

    public function setFoId(int $foId): self
    {
        $this->foId = $foId;

        return $this;
    }

    public function getFcId(): ?int
    {
        return $this->fcId;
    }

    public function setFcId(?int $fcId): self
    {
        $this->fcId = $fcId;

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

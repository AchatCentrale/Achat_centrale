<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilsFourn
 *
 * @ORM\Table(name="PROFILS_FOURN", indexes={@ORM\Index(name="IDX_84165EC03508DF0E", columns={"PU_ID"})})
 * @ORM\Entity
 */
class ProfilsFourn
{
    /**
     * @var int
     *
     * @ORM\Column(name="PF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pfId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FO_ID", type="integer", nullable=true)
     */
    private $foId;

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
     * @var \ProfilsUsers
     *
     * @ORM\ManyToOne(targetEntity="ProfilsUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PU_ID", referencedColumnName="PU_ID")
     * })
     */
    private $pu;

    public function getPfId(): ?int
    {
        return $this->pfId;
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

    public function getPu(): ?ProfilsUsers
    {
        return $this->pu;
    }

    public function setPu(?ProfilsUsers $pu): self
    {
        $this->pu = $pu;

        return $this;
    }


}

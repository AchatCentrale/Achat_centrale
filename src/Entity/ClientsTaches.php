<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsTaches
 *
 * @ORM\Table(name="CLIENTS_TACHES")
 * @ORM\Entity
 */
class ClientsTaches
{
    /**
     * @var int
     *
     * @ORM\Column(name="CLA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $claId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="US_ID", type="integer", nullable=true)
     */
    private $usId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CLA_TYPE", type="integer", nullable=true)
     */
    private $claType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLA_NOM", type="string", length=50, nullable=true)
     */
    private $claNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLA_DESCR", type="text", length=-1, nullable=true)
     */
    private $claDescr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CLA_ECHEANCE", type="datetime", nullable=true)
     */
    private $claEcheance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CLA_PRIORITE", type="integer", nullable=true)
     */
    private $claPriorite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CLA_NOTIF_REF", type="integer", nullable=true)
     */
    private $claNotifRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CLA_STATUS", type="integer", nullable=true)
     */
    private $claStatus;

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

    public function getClaId(): ?int
    {
        return $this->claId;
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

    public function getUsId(): ?int
    {
        return $this->usId;
    }

    public function setUsId(?int $usId): self
    {
        $this->usId = $usId;

        return $this;
    }

    public function getClaType(): ?int
    {
        return $this->claType;
    }

    public function setClaType(?int $claType): self
    {
        $this->claType = $claType;

        return $this;
    }

    public function getClaNom(): ?string
    {
        return $this->claNom;
    }

    public function setClaNom(?string $claNom): self
    {
        $this->claNom = $claNom;

        return $this;
    }

    public function getClaDescr(): ?string
    {
        return $this->claDescr;
    }

    public function setClaDescr(?string $claDescr): self
    {
        $this->claDescr = $claDescr;

        return $this;
    }

    public function getClaEcheance(): ?\DateTimeInterface
    {
        return $this->claEcheance;
    }

    public function setClaEcheance(?\DateTimeInterface $claEcheance): self
    {
        $this->claEcheance = $claEcheance;

        return $this;
    }

    public function getClaPriorite(): ?int
    {
        return $this->claPriorite;
    }

    public function setClaPriorite(?int $claPriorite): self
    {
        $this->claPriorite = $claPriorite;

        return $this;
    }

    public function getClaNotifRef(): ?int
    {
        return $this->claNotifRef;
    }

    public function setClaNotifRef(?int $claNotifRef): self
    {
        $this->claNotifRef = $claNotifRef;

        return $this;
    }

    public function getClaStatus(): ?int
    {
        return $this->claStatus;
    }

    public function setClaStatus(?int $claStatus): self
    {
        $this->claStatus = $claStatus;

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

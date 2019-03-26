<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilsUsers
 *
 * @ORM\Table(name="PROFILS_USERS")
 * @ORM\Entity
 */
class ProfilsUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="PU_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $puId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PU_DESCR", type="string", length=50, nullable=true)
     */
    private $puDescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PU_POLE", type="string", length=50, nullable=true)
     */
    private $puPole;

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

    public function getPuId(): ?int
    {
        return $this->puId;
    }

    public function getPuDescr(): ?string
    {
        return $this->puDescr;
    }

    public function setPuDescr(?string $puDescr): self
    {
        $this->puDescr = $puDescr;

        return $this;
    }

    public function getPuPole(): ?string
    {
        return $this->puPole;
    }

    public function setPuPole(?string $puPole): self
    {
        $this->puPole = $puPole;

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

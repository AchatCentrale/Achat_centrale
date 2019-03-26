<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageDetail
 *
 * @ORM\Table(name="MESSAGE_DETAIL", indexes={@ORM\Index(name="IDX_3DB4A13DFD61DBA2", columns={"ME_ID"})})
 * @ORM\Entity
 */
class MessageDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="MD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mdId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=true)
     */
    private $ccId;

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
     * @ORM\Column(name="MD_DATE", type="datetime", nullable=true)
     */
    private $mdDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MD_CORPS", type="text", length=16, nullable=true)
     */
    private $mdCorps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MD_TEMPO", type="string", length=50, nullable=true)
     */
    private $mdTempo;

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
     * @var \MessageEntete
     *
     * @ORM\ManyToOne(targetEntity="MessageEntete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ME_ID", referencedColumnName="ME_ID")
     * })
     */
    private $me;

    public function getMdId(): ?int
    {
        return $this->mdId;
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

    public function getMdDate(): ?\DateTimeInterface
    {
        return $this->mdDate;
    }

    public function setMdDate(?\DateTimeInterface $mdDate): self
    {
        $this->mdDate = $mdDate;

        return $this;
    }

    public function getMdCorps(): ?string
    {
        return $this->mdCorps;
    }

    public function setMdCorps(?string $mdCorps): self
    {
        $this->mdCorps = $mdCorps;

        return $this;
    }

    public function getMdTempo(): ?string
    {
        return $this->mdTempo;
    }

    public function setMdTempo(?string $mdTempo): self
    {
        $this->mdTempo = $mdTempo;

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

    public function getMe(): ?MessageEntete
    {
        return $this->me;
    }

    public function setMe(?MessageEntete $me): self
    {
        $this->me = $me;

        return $this;
    }


}

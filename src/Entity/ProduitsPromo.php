<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitsPromo
 *
 * @ORM\Table(name="PRODUITS_PROMO")
 * @ORM\Entity
 */
class ProduitsPromo
{
    /**
     * @var int
     *
     * @ORM\Column(name="PP_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ppId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PPC_ID", type="integer", nullable=true)
     */
    private $ppcId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PP_ORDRE", type="integer", nullable=true)
     */
    private $ppOrdre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PP_DATE", type="datetime", nullable=true)
     */
    private $ppDate;

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

    public function getPpId(): ?int
    {
        return $this->ppId;
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

    public function getPrId(): ?int
    {
        return $this->prId;
    }

    public function setPrId(?int $prId): self
    {
        $this->prId = $prId;

        return $this;
    }

    public function getPpcId(): ?int
    {
        return $this->ppcId;
    }

    public function setPpcId(?int $ppcId): self
    {
        $this->ppcId = $ppcId;

        return $this;
    }

    public function getPpOrdre(): ?int
    {
        return $this->ppOrdre;
    }

    public function setPpOrdre(?int $ppOrdre): self
    {
        $this->ppOrdre = $ppOrdre;

        return $this;
    }

    public function getPpDate(): ?\DateTimeInterface
    {
        return $this->ppDate;
    }

    public function setPpDate(?\DateTimeInterface $ppDate): self
    {
        $this->ppDate = $ppDate;

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

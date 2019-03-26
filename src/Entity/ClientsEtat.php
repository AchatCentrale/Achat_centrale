<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsEtat
 *
 * @ORM\Table(name="CLIENTS_ETAT")
 * @ORM\Entity
 */
class ClientsEtat
{
    /**
     * @var int
     *
     * @ORM\Column(name="CE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CE_CODE", type="string", length=50, nullable=true)
     */
    private $ceCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CE_DESCR", type="string", length=50, nullable=true)
     */
    private $ceDescr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CE_ORDRE", type="integer", nullable=true)
     */
    private $ceOrdre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CE_DATE", type="datetime", nullable=true)
     */
    private $ceDate;

    public function getCeId(): ?int
    {
        return $this->ceId;
    }

    public function getCeCode(): ?string
    {
        return $this->ceCode;
    }

    public function setCeCode(?string $ceCode): self
    {
        $this->ceCode = $ceCode;

        return $this;
    }

    public function getCeDescr(): ?string
    {
        return $this->ceDescr;
    }

    public function setCeDescr(?string $ceDescr): self
    {
        $this->ceDescr = $ceDescr;

        return $this;
    }

    public function getCeOrdre(): ?int
    {
        return $this->ceOrdre;
    }

    public function setCeOrdre(?int $ceOrdre): self
    {
        $this->ceOrdre = $ceOrdre;

        return $this;
    }

    public function getCeDate(): ?\DateTimeInterface
    {
        return $this->ceDate;
    }

    public function setCeDate(?\DateTimeInterface $ceDate): self
    {
        $this->ceDate = $ceDate;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsTag
 *
 * @ORM\Table(name="CLIENTS_TAG")
 * @ORM\Entity
 */
class ClientsTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TAG", type="string", length=50, nullable=true)
     */
    private $tag;

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

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

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

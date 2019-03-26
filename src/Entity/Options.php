<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Options
 *
 * @ORM\Table(name="OPTIONS")
 * @ORM\Entity
 */
class Options
{
    /**
     * @var int
     *
     * @ORM\Column(name="OP_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $opId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OP_DESCR", type="string", length=100, nullable=true)
     */
    private $opDescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OP_FORMAT", type="string", length=50, nullable=true)
     */
    private $opFormat;

    public function getOpId(): ?int
    {
        return $this->opId;
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

    public function getOpDescr(): ?string
    {
        return $this->opDescr;
    }

    public function setOpDescr(?string $opDescr): self
    {
        $this->opDescr = $opDescr;

        return $this;
    }

    public function getOpFormat(): ?string
    {
        return $this->opFormat;
    }

    public function setOpFormat(?string $opFormat): self
    {
        $this->opFormat = $opFormat;

        return $this;
    }


}

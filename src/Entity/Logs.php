<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logs
 *
 * @ORM\Table(name="LOGS")
 * @ORM\Entity
 */
class Logs
{
    /**
     * @var int
     *
     * @ORM\Column(name="LO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $loId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_IDENT", type="string", length=50, nullable=true)
     */
    private $loIdent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LO_IDENT_NUM", type="integer", nullable=true)
     */
    private $loIdentNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_CODE", type="string", length=50, nullable=true)
     */
    private $loCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LO_DATE", type="datetime", nullable=true)
     */
    private $loDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_DESCR", type="string", length=5000, nullable=true)
     */
    private $loDescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_NAVIGAT", type="string", length=1000, nullable=true)
     */
    private $loNavigat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_IP", type="string", length=20, nullable=true)
     */
    private $loIp;

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

    public function getLoId(): ?int
    {
        return $this->loId;
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

    public function getLoIdent(): ?string
    {
        return $this->loIdent;
    }

    public function setLoIdent(?string $loIdent): self
    {
        $this->loIdent = $loIdent;

        return $this;
    }

    public function getLoIdentNum(): ?int
    {
        return $this->loIdentNum;
    }

    public function setLoIdentNum(?int $loIdentNum): self
    {
        $this->loIdentNum = $loIdentNum;

        return $this;
    }

    public function getLoCode(): ?string
    {
        return $this->loCode;
    }

    public function setLoCode(?string $loCode): self
    {
        $this->loCode = $loCode;

        return $this;
    }

    public function getLoDate(): ?\DateTimeInterface
    {
        return $this->loDate;
    }

    public function setLoDate(?\DateTimeInterface $loDate): self
    {
        $this->loDate = $loDate;

        return $this;
    }

    public function getLoDescr(): ?string
    {
        return $this->loDescr;
    }

    public function setLoDescr(?string $loDescr): self
    {
        $this->loDescr = $loDescr;

        return $this;
    }

    public function getLoNavigat(): ?string
    {
        return $this->loNavigat;
    }

    public function setLoNavigat(?string $loNavigat): self
    {
        $this->loNavigat = $loNavigat;

        return $this;
    }

    public function getLoIp(): ?string
    {
        return $this->loIp;
    }

    public function setLoIp(?string $loIp): self
    {
        $this->loIp = $loIp;

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

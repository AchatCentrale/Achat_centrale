<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presse
 *
 * @ORM\Table(name="PRESSE")
 * @ORM\Entity
 */
class Presse
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
     * @var string|null
     *
     * @ORM\Column(name="PP_TITRE", type="string", length=100, nullable=true)
     */
    private $ppTitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_LOGO", type="string", length=100, nullable=true)
     */
    private $ppLogo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_IMAGE", type="string", length=100, nullable=true)
     */
    private $ppImage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PP_DATE", type="datetime", nullable=true)
     */
    private $ppDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_PAGE", type="string", length=50, nullable=true)
     */
    private $ppPage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_DESCR", type="text", length=16, nullable=true)
     */
    private $ppDescr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PP_ORDRE", type="integer", nullable=true)
     */
    private $ppOrdre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_TEMPO", type="string", length=50, nullable=true)
     */
    private $ppTempo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PP_STATUS", type="integer", nullable=true)
     */
    private $ppStatus;

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

    public function getPpTitre(): ?string
    {
        return $this->ppTitre;
    }

    public function setPpTitre(?string $ppTitre): self
    {
        $this->ppTitre = $ppTitre;

        return $this;
    }

    public function getPpLogo(): ?string
    {
        return $this->ppLogo;
    }

    public function setPpLogo(?string $ppLogo): self
    {
        $this->ppLogo = $ppLogo;

        return $this;
    }

    public function getPpImage(): ?string
    {
        return $this->ppImage;
    }

    public function setPpImage(?string $ppImage): self
    {
        $this->ppImage = $ppImage;

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

    public function getPpPage(): ?string
    {
        return $this->ppPage;
    }

    public function setPpPage(?string $ppPage): self
    {
        $this->ppPage = $ppPage;

        return $this;
    }

    public function getPpDescr(): ?string
    {
        return $this->ppDescr;
    }

    public function setPpDescr(?string $ppDescr): self
    {
        $this->ppDescr = $ppDescr;

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

    public function getPpTempo(): ?string
    {
        return $this->ppTempo;
    }

    public function setPpTempo(?string $ppTempo): self
    {
        $this->ppTempo = $ppTempo;

        return $this;
    }

    public function getPpStatus(): ?int
    {
        return $this->ppStatus;
    }

    public function setPpStatus(?int $ppStatus): self
    {
        $this->ppStatus = $ppStatus;

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

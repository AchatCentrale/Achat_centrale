<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageEntete
 *
 * @ORM\Table(name="MESSAGE_ENTETE")
 * @ORM\Entity
 */
class MessageEntete
{
    /**
     * @var int
     *
     * @ORM\Column(name="ME_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $meId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=true)
     */
    private $ccId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FO_ID", type="integer", nullable=true)
     */
    private $foId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FC_ID", type="integer", nullable=true)
     */
    private $fcId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ME_DATE", type="datetime", nullable=true)
     */
    private $meDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ME_SUJET", type="string", length=200, nullable=true)
     */
    private $meSujet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ME_NOTE", type="string", length=500, nullable=true)
     */
    private $meNote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_STATUS", type="integer", nullable=true)
     */
    private $meStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_LU_C", type="integer", nullable=true)
     */
    private $meLuC;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_LU_F", type="integer", nullable=true)
     */
    private $meLuF;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_RELANCE", type="integer", nullable=true)
     */
    private $meRelance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ADR_FAC", type="integer", nullable=true)
     */
    private $meAdrFac;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ADR_LIV", type="integer", nullable=true)
     */
    private $meAdrLiv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_CMDE", type="integer", nullable=true)
     */
    private $meCmde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ME_MESS_VAL", type="string", length=5000, nullable=true)
     */
    private $meMessVal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ME_TEMPO", type="string", length=50, nullable=true)
     */
    private $meTempo;

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

    public function getMeId(): ?int
    {
        return $this->meId;
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

    public function getClId(): ?int
    {
        return $this->clId;
    }

    public function setClId(?int $clId): self
    {
        $this->clId = $clId;

        return $this;
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

    public function getFoId(): ?int
    {
        return $this->foId;
    }

    public function setFoId(?int $foId): self
    {
        $this->foId = $foId;

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

    public function getPrId(): ?int
    {
        return $this->prId;
    }

    public function setPrId(?int $prId): self
    {
        $this->prId = $prId;

        return $this;
    }

    public function getMeDate(): ?\DateTimeInterface
    {
        return $this->meDate;
    }

    public function setMeDate(?\DateTimeInterface $meDate): self
    {
        $this->meDate = $meDate;

        return $this;
    }

    public function getMeSujet(): ?string
    {
        return $this->meSujet;
    }

    public function setMeSujet(?string $meSujet): self
    {
        $this->meSujet = $meSujet;

        return $this;
    }

    public function getMeNote(): ?string
    {
        return $this->meNote;
    }

    public function setMeNote(?string $meNote): self
    {
        $this->meNote = $meNote;

        return $this;
    }

    public function getMeStatus(): ?int
    {
        return $this->meStatus;
    }

    public function setMeStatus(?int $meStatus): self
    {
        $this->meStatus = $meStatus;

        return $this;
    }

    public function getMeLuC(): ?int
    {
        return $this->meLuC;
    }

    public function setMeLuC(?int $meLuC): self
    {
        $this->meLuC = $meLuC;

        return $this;
    }

    public function getMeLuF(): ?int
    {
        return $this->meLuF;
    }

    public function setMeLuF(?int $meLuF): self
    {
        $this->meLuF = $meLuF;

        return $this;
    }

    public function getMeRelance(): ?int
    {
        return $this->meRelance;
    }

    public function setMeRelance(?int $meRelance): self
    {
        $this->meRelance = $meRelance;

        return $this;
    }

    public function getMeAdrFac(): ?int
    {
        return $this->meAdrFac;
    }

    public function setMeAdrFac(?int $meAdrFac): self
    {
        $this->meAdrFac = $meAdrFac;

        return $this;
    }

    public function getMeAdrLiv(): ?int
    {
        return $this->meAdrLiv;
    }

    public function setMeAdrLiv(?int $meAdrLiv): self
    {
        $this->meAdrLiv = $meAdrLiv;

        return $this;
    }

    public function getMeCmde(): ?int
    {
        return $this->meCmde;
    }

    public function setMeCmde(?int $meCmde): self
    {
        $this->meCmde = $meCmde;

        return $this;
    }

    public function getMeMessVal(): ?string
    {
        return $this->meMessVal;
    }

    public function setMeMessVal(?string $meMessVal): self
    {
        $this->meMessVal = $meMessVal;

        return $this;
    }

    public function getMeTempo(): ?string
    {
        return $this->meTempo;
    }

    public function setMeTempo(?string $meTempo): self
    {
        $this->meTempo = $meTempo;

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

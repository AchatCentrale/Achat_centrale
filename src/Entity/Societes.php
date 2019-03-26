<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societes
 *
 * @ORM\Table(name="SOCIETES")
 * @ORM\Entity
 */
class Societes
{
    /**
     * @var int
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_RAISONSOC", type="string", length=50, nullable=true)
     */
    private $soRaisonsoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_CONTACT", type="string", length=50, nullable=true)
     */
    private $soContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_ADRESSE1", type="string", length=50, nullable=true)
     */
    private $soAdresse1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_ADRESSE2", type="string", length=50, nullable=true)
     */
    private $soAdresse2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_CP", type="string", length=50, nullable=true)
     */
    private $soCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_VILLE", type="string", length=50, nullable=true)
     */
    private $soVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_PAYS", type="string", length=50, nullable=true)
     */
    private $soPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_TEL", type="string", length=50, nullable=true)
     */
    private $soTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_PORT", type="string", length=50, nullable=true)
     */
    private $soPort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_FAX", type="string", length=50, nullable=true)
     */
    private $soFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_WEB", type="string", length=100, nullable=true)
     */
    private $soWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_MAIL", type="string", length=100, nullable=true)
     */
    private $soMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_SIREN", type="string", length=50, nullable=true)
     */
    private $soSiren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_SIRET", type="string", length=50, nullable=true)
     */
    private $soSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_NO_TVA", type="string", length=50, nullable=true)
     */
    private $soNoTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_TYPE", type="string", length=50, nullable=true)
     */
    private $soType;

    /**
     * @var float|null
     *
     * @ORM\Column(name="SO_CAPITAL", type="float", precision=53, scale=0, nullable=true)
     */
    private $soCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_NAF", type="string", length=50, nullable=true)
     */
    private $soNaf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_STATUS", type="integer", nullable=true)
     */
    private $soStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_DATABASE", type="string", length=50, nullable=true)
     */
    private $soDatabase;

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

    public function getSoId(): ?int
    {
        return $this->soId;
    }

    public function getSoRaisonsoc(): ?string
    {
        return $this->soRaisonsoc;
    }

    public function setSoRaisonsoc(?string $soRaisonsoc): self
    {
        $this->soRaisonsoc = $soRaisonsoc;

        return $this;
    }

    public function getSoContact(): ?string
    {
        return $this->soContact;
    }

    public function setSoContact(?string $soContact): self
    {
        $this->soContact = $soContact;

        return $this;
    }

    public function getSoAdresse1(): ?string
    {
        return $this->soAdresse1;
    }

    public function setSoAdresse1(?string $soAdresse1): self
    {
        $this->soAdresse1 = $soAdresse1;

        return $this;
    }

    public function getSoAdresse2(): ?string
    {
        return $this->soAdresse2;
    }

    public function setSoAdresse2(?string $soAdresse2): self
    {
        $this->soAdresse2 = $soAdresse2;

        return $this;
    }

    public function getSoCp(): ?string
    {
        return $this->soCp;
    }

    public function setSoCp(?string $soCp): self
    {
        $this->soCp = $soCp;

        return $this;
    }

    public function getSoVille(): ?string
    {
        return $this->soVille;
    }

    public function setSoVille(?string $soVille): self
    {
        $this->soVille = $soVille;

        return $this;
    }

    public function getSoPays(): ?string
    {
        return $this->soPays;
    }

    public function setSoPays(?string $soPays): self
    {
        $this->soPays = $soPays;

        return $this;
    }

    public function getSoTel(): ?string
    {
        return $this->soTel;
    }

    public function setSoTel(?string $soTel): self
    {
        $this->soTel = $soTel;

        return $this;
    }

    public function getSoPort(): ?string
    {
        return $this->soPort;
    }

    public function setSoPort(?string $soPort): self
    {
        $this->soPort = $soPort;

        return $this;
    }

    public function getSoFax(): ?string
    {
        return $this->soFax;
    }

    public function setSoFax(?string $soFax): self
    {
        $this->soFax = $soFax;

        return $this;
    }

    public function getSoWeb(): ?string
    {
        return $this->soWeb;
    }

    public function setSoWeb(?string $soWeb): self
    {
        $this->soWeb = $soWeb;

        return $this;
    }

    public function getSoMail(): ?string
    {
        return $this->soMail;
    }

    public function setSoMail(?string $soMail): self
    {
        $this->soMail = $soMail;

        return $this;
    }

    public function getSoSiren(): ?string
    {
        return $this->soSiren;
    }

    public function setSoSiren(?string $soSiren): self
    {
        $this->soSiren = $soSiren;

        return $this;
    }

    public function getSoSiret(): ?string
    {
        return $this->soSiret;
    }

    public function setSoSiret(?string $soSiret): self
    {
        $this->soSiret = $soSiret;

        return $this;
    }

    public function getSoNoTva(): ?string
    {
        return $this->soNoTva;
    }

    public function setSoNoTva(?string $soNoTva): self
    {
        $this->soNoTva = $soNoTva;

        return $this;
    }

    public function getSoType(): ?string
    {
        return $this->soType;
    }

    public function setSoType(?string $soType): self
    {
        $this->soType = $soType;

        return $this;
    }

    public function getSoCapital(): ?float
    {
        return $this->soCapital;
    }

    public function setSoCapital(?float $soCapital): self
    {
        $this->soCapital = $soCapital;

        return $this;
    }

    public function getSoNaf(): ?string
    {
        return $this->soNaf;
    }

    public function setSoNaf(?string $soNaf): self
    {
        $this->soNaf = $soNaf;

        return $this;
    }

    public function getSoStatus(): ?int
    {
        return $this->soStatus;
    }

    public function setSoStatus(?int $soStatus): self
    {
        $this->soStatus = $soStatus;

        return $this;
    }

    public function getSoDatabase(): ?string
    {
        return $this->soDatabase;
    }

    public function setSoDatabase(?string $soDatabase): self
    {
        $this->soDatabase = $soDatabase;

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

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsUsers
 *
 * @ORM\Table(name="CLIENTS_USERS", indexes={@ORM\Index(name="IDX_E2E056FD3F592A49", columns={"CL_ID"})})
 * @ORM\Entity
 */
class ClientsUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PU_ID", type="integer", nullable=true)
     */
    private $puId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_PRENOM", type="string", length=50, nullable=true)
     */
    private $ccPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_NOM", type="string", length=50, nullable=true)
     */
    private $ccNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_FONCTION", type="string", length=50, nullable=true)
     */
    private $ccFonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_TEL", type="string", length=50, nullable=true)
     */
    private $ccTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_GSM", type="string", length=50, nullable=true)
     */
    private $ccGsm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_FAX", type="string", length=50, nullable=true)
     */
    private $ccFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_MAIL", type="string", length=100, nullable=true)
     */
    private $ccMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_PASS", type="string", length=50, nullable=true)
     */
    private $ccPass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_NIVEAU", type="integer", nullable=true)
     */
    private $ccNiveau;

    /**
     * @var bool
     *
     * @ORM\Column(name="CIRCUIT_VALIDATION", type="boolean", nullable=false)
     */
    private $circuitValidation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_STATUS", type="integer", nullable=true)
     */
    private $ccStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_TOKEN_APP", type="string", length=50, nullable=true)
     */
    private $ccTokenApp;

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

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CL_ID", referencedColumnName="CL_ID")
     * })
     */
    private $cl;

    public function getCcId(): ?int
    {
        return $this->ccId;
    }

    public function getPuId(): ?int
    {
        return $this->puId;
    }

    public function setPuId(?int $puId): self
    {
        $this->puId = $puId;

        return $this;
    }

    public function getCcPrenom(): ?string
    {
        return $this->ccPrenom;
    }

    public function setCcPrenom(?string $ccPrenom): self
    {
        $this->ccPrenom = $ccPrenom;

        return $this;
    }

    public function getCcNom(): ?string
    {
        return $this->ccNom;
    }

    public function setCcNom(?string $ccNom): self
    {
        $this->ccNom = $ccNom;

        return $this;
    }

    public function getCcFonction(): ?string
    {
        return $this->ccFonction;
    }

    public function setCcFonction(?string $ccFonction): self
    {
        $this->ccFonction = $ccFonction;

        return $this;
    }

    public function getCcTel(): ?string
    {
        return $this->ccTel;
    }

    public function setCcTel(?string $ccTel): self
    {
        $this->ccTel = $ccTel;

        return $this;
    }

    public function getCcGsm(): ?string
    {
        return $this->ccGsm;
    }

    public function setCcGsm(?string $ccGsm): self
    {
        $this->ccGsm = $ccGsm;

        return $this;
    }

    public function getCcFax(): ?string
    {
        return $this->ccFax;
    }

    public function setCcFax(?string $ccFax): self
    {
        $this->ccFax = $ccFax;

        return $this;
    }

    public function getCcMail(): ?string
    {
        return $this->ccMail;
    }

    public function setCcMail(?string $ccMail): self
    {
        $this->ccMail = $ccMail;

        return $this;
    }

    public function getCcPass(): ?string
    {
        return $this->ccPass;
    }

    public function setCcPass(?string $ccPass): self
    {
        $this->ccPass = $ccPass;

        return $this;
    }

    public function getCcNiveau(): ?int
    {
        return $this->ccNiveau;
    }

    public function setCcNiveau(?int $ccNiveau): self
    {
        $this->ccNiveau = $ccNiveau;

        return $this;
    }

    public function getCircuitValidation(): ?bool
    {
        return $this->circuitValidation;
    }

    public function setCircuitValidation(bool $circuitValidation): self
    {
        $this->circuitValidation = $circuitValidation;

        return $this;
    }

    public function getCcStatus(): ?int
    {
        return $this->ccStatus;
    }

    public function setCcStatus(?int $ccStatus): self
    {
        $this->ccStatus = $ccStatus;

        return $this;
    }

    public function getCcTokenApp(): ?string
    {
        return $this->ccTokenApp;
    }

    public function setCcTokenApp(?string $ccTokenApp): self
    {
        $this->ccTokenApp = $ccTokenApp;

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

    public function getCl(): ?Clients
    {
        return $this->cl;
    }

    public function setCl(?Clients $cl): self
    {
        $this->cl = $cl;

        return $this;
    }


}

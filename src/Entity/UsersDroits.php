<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersDroits
 *
 * @ORM\Table(name="USERS_DROITS", indexes={@ORM\Index(name="IDX_52C12AD2D8830FA2", columns={"US_ID"})})
 * @ORM\Entity
 */
class UsersDroits
{
    /**
     * @var int
     *
     * @ORM\Column(name="UD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $udId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_EXTRANET", type="integer", nullable=true)
     */
    private $udExtranet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_INSTUTIONNEL", type="integer", nullable=true)
     */
    private $udInstutionnel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_PRODUIT", type="integer", nullable=true)
     */
    private $udProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_OPTIONS", type="integer", nullable=true)
     */
    private $udOptions;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_COMMISSION", type="integer", nullable=true)
     */
    private $udCommission;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_RFA_SUP", type="integer", nullable=true)
     */
    private $udRfaSup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_CLIENT_INS", type="integer", nullable=true)
     */
    private $udClientIns;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_CLIENT_MAJ", type="integer", nullable=true)
     */
    private $udClientMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_CLIENT_SUP", type="integer", nullable=true)
     */
    private $udClientSup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_USER_INS", type="integer", nullable=true)
     */
    private $udUserIns;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_USER_MAJ", type="integer", nullable=true)
     */
    private $udUserMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_USER_SUP", type="integer", nullable=true)
     */
    private $udUserSup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_EXTRACTION", type="integer", nullable=true)
     */
    private $udExtraction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_FOURNISSEUR", type="integer", nullable=true)
     */
    private $udFournisseur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_COPIE_TICKET", type="integer", nullable=true)
     */
    private $udCopieTicket;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="US_ID", referencedColumnName="US_ID")
     * })
     */
    private $us;

    public function getUdId(): ?int
    {
        return $this->udId;
    }

    public function getUdExtranet(): ?int
    {
        return $this->udExtranet;
    }

    public function setUdExtranet(?int $udExtranet): self
    {
        $this->udExtranet = $udExtranet;

        return $this;
    }

    public function getUdInstutionnel(): ?int
    {
        return $this->udInstutionnel;
    }

    public function setUdInstutionnel(?int $udInstutionnel): self
    {
        $this->udInstutionnel = $udInstutionnel;

        return $this;
    }

    public function getUdProduit(): ?int
    {
        return $this->udProduit;
    }

    public function setUdProduit(?int $udProduit): self
    {
        $this->udProduit = $udProduit;

        return $this;
    }

    public function getUdOptions(): ?int
    {
        return $this->udOptions;
    }

    public function setUdOptions(?int $udOptions): self
    {
        $this->udOptions = $udOptions;

        return $this;
    }

    public function getUdCommission(): ?int
    {
        return $this->udCommission;
    }

    public function setUdCommission(?int $udCommission): self
    {
        $this->udCommission = $udCommission;

        return $this;
    }

    public function getUdRfaSup(): ?int
    {
        return $this->udRfaSup;
    }

    public function setUdRfaSup(?int $udRfaSup): self
    {
        $this->udRfaSup = $udRfaSup;

        return $this;
    }

    public function getUdClientIns(): ?int
    {
        return $this->udClientIns;
    }

    public function setUdClientIns(?int $udClientIns): self
    {
        $this->udClientIns = $udClientIns;

        return $this;
    }

    public function getUdClientMaj(): ?int
    {
        return $this->udClientMaj;
    }

    public function setUdClientMaj(?int $udClientMaj): self
    {
        $this->udClientMaj = $udClientMaj;

        return $this;
    }

    public function getUdClientSup(): ?int
    {
        return $this->udClientSup;
    }

    public function setUdClientSup(?int $udClientSup): self
    {
        $this->udClientSup = $udClientSup;

        return $this;
    }

    public function getUdUserIns(): ?int
    {
        return $this->udUserIns;
    }

    public function setUdUserIns(?int $udUserIns): self
    {
        $this->udUserIns = $udUserIns;

        return $this;
    }

    public function getUdUserMaj(): ?int
    {
        return $this->udUserMaj;
    }

    public function setUdUserMaj(?int $udUserMaj): self
    {
        $this->udUserMaj = $udUserMaj;

        return $this;
    }

    public function getUdUserSup(): ?int
    {
        return $this->udUserSup;
    }

    public function setUdUserSup(?int $udUserSup): self
    {
        $this->udUserSup = $udUserSup;

        return $this;
    }

    public function getUdExtraction(): ?int
    {
        return $this->udExtraction;
    }

    public function setUdExtraction(?int $udExtraction): self
    {
        $this->udExtraction = $udExtraction;

        return $this;
    }

    public function getUdFournisseur(): ?int
    {
        return $this->udFournisseur;
    }

    public function setUdFournisseur(?int $udFournisseur): self
    {
        $this->udFournisseur = $udFournisseur;

        return $this;
    }

    public function getUdCopieTicket(): ?int
    {
        return $this->udCopieTicket;
    }

    public function setUdCopieTicket(?int $udCopieTicket): self
    {
        $this->udCopieTicket = $udCopieTicket;

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

    public function getUs(): ?Users
    {
        return $this->us;
    }

    public function setUs(?Users $us): self
    {
        $this->us = $us;

        return $this;
    }


}

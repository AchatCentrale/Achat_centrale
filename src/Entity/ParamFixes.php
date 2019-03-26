<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParamFixes
 *
 * @ORM\Table(name="PARAM_FIXES")
 * @ORM\Entity
 */
class ParamFixes
{
    /**
     * @var int
     *
     * @ORM\Column(name="PF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pfId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_SMTP", type="string", length=50, nullable=false)
     */
    private $pfSmtp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PF_SMTP_USER", type="string", length=50, nullable=true)
     */
    private $pfSmtpUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PF_SMTP_PASS", type="string", length=50, nullable=true)
     */
    private $pfSmtpPass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_SMTP_SSL", type="integer", nullable=true)
     */
    private $pfSmtpSsl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_SMTP_PORT", type="integer", nullable=true)
     */
    private $pfSmtpPort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_SMTP_TEST", type="integer", nullable=true)
     */
    private $pfSmtpTest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_PAYS", type="integer", nullable=true)
     */
    private $pfPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PF_PAYS_DESCR", type="string", length=100, nullable=true)
     */
    private $pfPaysDescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PF_SITE_URL", type="string", length=1000, nullable=true)
     */
    private $pfSiteUrl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_ACCUEIL", type="integer", nullable=true)
     */
    private $pfAccueil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_ADHERER", type="integer", nullable=true)
     */
    private $pfAdherer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_CONTACT", type="integer", nullable=true)
     */
    private $pfContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_DECOUVRIR", type="integer", nullable=true)
     */
    private $pfDecouvrir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_RECHERCHE", type="integer", nullable=true)
     */
    private $pfRecherche;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_CONNECTER", type="integer", nullable=true)
     */
    private $pfConnecter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_ESPACE_PRIVE", type="integer", nullable=true)
     */
    private $pfEspacePrive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_ESPACE_PRIVE_F", type="integer", nullable=true)
     */
    private $pfEspacePriveF;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_INFOS_UTILES", type="integer", nullable=true)
     */
    private $pfInfosUtiles;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_TICKETS", type="integer", nullable=true)
     */
    private $pfTickets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PF_PLUS_PART", type="string", length=50, nullable=true)
     */
    private $pfPlusPart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PF_PLUS_CONSEIL", type="string", length=50, nullable=true)
     */
    private $pfPlusConseil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_PRIX_AFFICHE", type="integer", nullable=true)
     */
    private $pfPrixAffiche;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_REGION", type="integer", nullable=true)
     */
    private $pfRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PF_MESS_ACCUEIL", type="string", length=2000, nullable=true)
     */
    private $pfMessAccueil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PF_BANNIERE", type="string", length=50, nullable=true)
     */
    private $pfBanniere;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PF_NV_TICKET", type="integer", nullable=true)
     */
    private $pfNvTicket;

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

    public function getPfId(): ?int
    {
        return $this->pfId;
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

    public function getPfSmtp(): ?string
    {
        return $this->pfSmtp;
    }

    public function setPfSmtp(string $pfSmtp): self
    {
        $this->pfSmtp = $pfSmtp;

        return $this;
    }

    public function getPfSmtpUser(): ?string
    {
        return $this->pfSmtpUser;
    }

    public function setPfSmtpUser(?string $pfSmtpUser): self
    {
        $this->pfSmtpUser = $pfSmtpUser;

        return $this;
    }

    public function getPfSmtpPass(): ?string
    {
        return $this->pfSmtpPass;
    }

    public function setPfSmtpPass(?string $pfSmtpPass): self
    {
        $this->pfSmtpPass = $pfSmtpPass;

        return $this;
    }

    public function getPfSmtpSsl(): ?int
    {
        return $this->pfSmtpSsl;
    }

    public function setPfSmtpSsl(?int $pfSmtpSsl): self
    {
        $this->pfSmtpSsl = $pfSmtpSsl;

        return $this;
    }

    public function getPfSmtpPort(): ?int
    {
        return $this->pfSmtpPort;
    }

    public function setPfSmtpPort(?int $pfSmtpPort): self
    {
        $this->pfSmtpPort = $pfSmtpPort;

        return $this;
    }

    public function getPfSmtpTest(): ?int
    {
        return $this->pfSmtpTest;
    }

    public function setPfSmtpTest(?int $pfSmtpTest): self
    {
        $this->pfSmtpTest = $pfSmtpTest;

        return $this;
    }

    public function getPfPays(): ?int
    {
        return $this->pfPays;
    }

    public function setPfPays(?int $pfPays): self
    {
        $this->pfPays = $pfPays;

        return $this;
    }

    public function getPfPaysDescr(): ?string
    {
        return $this->pfPaysDescr;
    }

    public function setPfPaysDescr(?string $pfPaysDescr): self
    {
        $this->pfPaysDescr = $pfPaysDescr;

        return $this;
    }

    public function getPfSiteUrl(): ?string
    {
        return $this->pfSiteUrl;
    }

    public function setPfSiteUrl(?string $pfSiteUrl): self
    {
        $this->pfSiteUrl = $pfSiteUrl;

        return $this;
    }

    public function getPfAccueil(): ?int
    {
        return $this->pfAccueil;
    }

    public function setPfAccueil(?int $pfAccueil): self
    {
        $this->pfAccueil = $pfAccueil;

        return $this;
    }

    public function getPfAdherer(): ?int
    {
        return $this->pfAdherer;
    }

    public function setPfAdherer(?int $pfAdherer): self
    {
        $this->pfAdherer = $pfAdherer;

        return $this;
    }

    public function getPfContact(): ?int
    {
        return $this->pfContact;
    }

    public function setPfContact(?int $pfContact): self
    {
        $this->pfContact = $pfContact;

        return $this;
    }

    public function getPfDecouvrir(): ?int
    {
        return $this->pfDecouvrir;
    }

    public function setPfDecouvrir(?int $pfDecouvrir): self
    {
        $this->pfDecouvrir = $pfDecouvrir;

        return $this;
    }

    public function getPfRecherche(): ?int
    {
        return $this->pfRecherche;
    }

    public function setPfRecherche(?int $pfRecherche): self
    {
        $this->pfRecherche = $pfRecherche;

        return $this;
    }

    public function getPfConnecter(): ?int
    {
        return $this->pfConnecter;
    }

    public function setPfConnecter(?int $pfConnecter): self
    {
        $this->pfConnecter = $pfConnecter;

        return $this;
    }

    public function getPfEspacePrive(): ?int
    {
        return $this->pfEspacePrive;
    }

    public function setPfEspacePrive(?int $pfEspacePrive): self
    {
        $this->pfEspacePrive = $pfEspacePrive;

        return $this;
    }

    public function getPfEspacePriveF(): ?int
    {
        return $this->pfEspacePriveF;
    }

    public function setPfEspacePriveF(?int $pfEspacePriveF): self
    {
        $this->pfEspacePriveF = $pfEspacePriveF;

        return $this;
    }

    public function getPfInfosUtiles(): ?int
    {
        return $this->pfInfosUtiles;
    }

    public function setPfInfosUtiles(?int $pfInfosUtiles): self
    {
        $this->pfInfosUtiles = $pfInfosUtiles;

        return $this;
    }

    public function getPfTickets(): ?int
    {
        return $this->pfTickets;
    }

    public function setPfTickets(?int $pfTickets): self
    {
        $this->pfTickets = $pfTickets;

        return $this;
    }

    public function getPfPlusPart(): ?string
    {
        return $this->pfPlusPart;
    }

    public function setPfPlusPart(?string $pfPlusPart): self
    {
        $this->pfPlusPart = $pfPlusPart;

        return $this;
    }

    public function getPfPlusConseil(): ?string
    {
        return $this->pfPlusConseil;
    }

    public function setPfPlusConseil(?string $pfPlusConseil): self
    {
        $this->pfPlusConseil = $pfPlusConseil;

        return $this;
    }

    public function getPfPrixAffiche(): ?int
    {
        return $this->pfPrixAffiche;
    }

    public function setPfPrixAffiche(?int $pfPrixAffiche): self
    {
        $this->pfPrixAffiche = $pfPrixAffiche;

        return $this;
    }

    public function getPfRegion(): ?int
    {
        return $this->pfRegion;
    }

    public function setPfRegion(?int $pfRegion): self
    {
        $this->pfRegion = $pfRegion;

        return $this;
    }

    public function getPfMessAccueil(): ?string
    {
        return $this->pfMessAccueil;
    }

    public function setPfMessAccueil(?string $pfMessAccueil): self
    {
        $this->pfMessAccueil = $pfMessAccueil;

        return $this;
    }

    public function getPfBanniere(): ?string
    {
        return $this->pfBanniere;
    }

    public function setPfBanniere(?string $pfBanniere): self
    {
        $this->pfBanniere = $pfBanniere;

        return $this;
    }

    public function getPfNvTicket(): ?int
    {
        return $this->pfNvTicket;
    }

    public function setPfNvTicket(?int $pfNvTicket): self
    {
        $this->pfNvTicket = $pfNvTicket;

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

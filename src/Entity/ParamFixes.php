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


}

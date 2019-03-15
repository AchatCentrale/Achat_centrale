<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="CLIENTS", indexes={@ORM\Index(name="IDX_3F8DD06E425165C3", columns={"CE_ID"})})
 * @ORM\Entity
 */
class Clients
{
    /**
     * @var int
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RE_ID", type="integer", nullable=true)
     */
    private $reId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="COC_ID", type="integer", nullable=true)
     */
    private $cocId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_REF", type="string", length=50, nullable=true)
     */
    private $clRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_RAISONSOC", type="string", length=100, nullable=true)
     */
    private $clRaisonsoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_SIRET", type="string", length=14, nullable=true)
     */
    private $clSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ADRESSE1", type="string", length=100, nullable=true)
     */
    private $clAdresse1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ADRESSE2", type="string", length=100, nullable=true)
     */
    private $clAdresse2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_CP", type="string", length=10, nullable=true)
     */
    private $clCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_VILLE", type="string", length=50, nullable=true)
     */
    private $clVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_PAYS", type="string", length=50, nullable=true)
     */
    private $clPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_TEL", type="string", length=50, nullable=true)
     */
    private $clTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_FAX", type="string", length=50, nullable=true)
     */
    private $clFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_MAIL", type="string", length=100, nullable=true)
     */
    private $clMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_MAIL_FACT", type="string", length=100, nullable=true)
     */
    private $clMailFact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_WEB", type="string", length=100, nullable=true)
     */
    private $clWeb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CL_DT_ADHESION", type="datetime", nullable=true)
     */
    private $clDtAdhesion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_LOGO", type="string", length=200, nullable=true)
     */
    private $clLogo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_PRESCRIPT", type="integer", nullable=true)
     */
    private $clPrescript;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CL_TARIF", type="float", precision=53, scale=0, nullable=true)
     */
    private $clTarif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_CODE_PROMO", type="string", length=50, nullable=true)
     */
    private $clCodePromo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_STATUS", type="integer", nullable=true)
     */
    private $clStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ADHESION", type="string", length=50, nullable=true)
     */
    private $clAdhesion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ACTIVITE", type="integer", nullable=true)
     */
    private $clActivite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_GROUPE", type="integer", nullable=true)
     */
    private $clGroupe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_CLASSIF", type="integer", nullable=true)
     */
    private $clClassif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_EFFECTIF", type="integer", nullable=true)
     */
    private $clEffectif;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CL_CA", type="float", precision=53, scale=0, nullable=true)
     */
    private $clCa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CL_MASQ_HA", type="float", precision=53, scale=0, nullable=true)
     */
    private $clMasqHa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CL_MASQ_VT", type="float", precision=53, scale=0, nullable=true)
     */
    private $clMasqVt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ETIQUETTE", type="string", length=500, nullable=true)
     */
    private $clEtiquette;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_ORIGINE_DET", type="string", length=100, nullable=true)
     */
    private $clOrigineDet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_TEMPO", type="string", length=50, nullable=true)
     */
    private $clTempo;

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
     * @var \ClientsEtat
     *
     * @ORM\ManyToOne(targetEntity="ClientsEtat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CE_ID", referencedColumnName="CE_ID")
     * })
     */
    private $ce;


}

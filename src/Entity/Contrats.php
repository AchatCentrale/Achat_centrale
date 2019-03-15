<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrats
 *
 * @ORM\Table(name="CONTRATS", indexes={@ORM\Index(name="IDX_B45BA520DA314FF6", columns={"CO_CATEGORIE"}), @ORM\Index(name="IDX_B45BA5203F592A49", columns={"CL_ID"})})
 * @ORM\Entity
 */
class Contrats
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_USER", type="integer", nullable=true)
     */
    private $coUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_TIER", type="string", length=100, nullable=true)
     */
    private $coTier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_DESCR", type="string", length=200, nullable=true)
     */
    private $coDescr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CO_DEBUT", type="datetime", nullable=true)
     */
    private $coDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CO_RENOUV", type="datetime", nullable=true)
     */
    private $coRenouv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_DUREE", type="integer", nullable=true)
     */
    private $coDuree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_PREAVIS", type="integer", nullable=true)
     */
    private $coPreavis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_CONTACT", type="string", length=100, nullable=true)
     */
    private $coContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_CONT_TEL", type="string", length=50, nullable=true)
     */
    private $coContTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_CONT_MAIL", type="string", length=200, nullable=true)
     */
    private $coContMail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_CONFIDENT", type="integer", nullable=true)
     */
    private $coConfident;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CO_MONTANT", type="float", precision=53, scale=0, nullable=true)
     */
    private $coMontant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_ECHEANCE", type="string", length=50, nullable=true)
     */
    private $coEcheance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_MODE_PAIE", type="string", length=50, nullable=true)
     */
    private $coModePaie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_COMMENT", type="text", length=16, nullable=true)
     */
    private $coComment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_STATUS", type="integer", nullable=true)
     */
    private $coStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CO_ALERT", type="integer", nullable=true)
     */
    private $coAlert;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_TEMPO", type="string", length=50, nullable=true)
     */
    private $coTempo;

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
     * @var \ContratsCat
     *
     * @ORM\ManyToOne(targetEntity="ContratsCat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CO_CATEGORIE", referencedColumnName="CC_ID")
     * })
     */
    private $coCategorie;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CL_ID", referencedColumnName="CL_ID")
     * })
     */
    private $cl;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuditsDetail
 *
 * @ORM\Table(name="AUDITS_DETAIL", indexes={@ORM\Index(name="IDX_813F0100389136A3", columns={"AE_ID"})})
 * @ORM\Entity
 */
class AuditsDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="AD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_REF", type="string", length=50, nullable=true)
     */
    private $adRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AD_DESCR", type="string", length=200, nullable=true)
     */
    private $adDescr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AD_PRIX_ACTU", type="float", precision=53, scale=0, nullable=true)
     */
    private $adPrixActu;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AD_PRIX_CA", type="float", precision=53, scale=0, nullable=true)
     */
    private $adPrixCa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AD_QTE", type="integer", nullable=true)
     */
    private $adQte;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AD_ECO_EUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $adEcoEur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AD_ECO_PCT", type="float", precision=53, scale=0, nullable=true)
     */
    private $adEcoPct;

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
     * @var \AuditsEntete
     *
     * @ORM\ManyToOne(targetEntity="AuditsEntete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AE_ID", referencedColumnName="AE_ID")
     * })
     */
    private $ae;


}

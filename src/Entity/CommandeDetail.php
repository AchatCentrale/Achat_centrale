<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeDetail
 *
 * @ORM\Table(name="COMMANDE_DETAIL", indexes={@ORM\Index(name="IDX_8002F979425165C3", columns={"CE_ID"})})
 * @ORM\Entity
 */
class CommandeDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="CD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cdId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NC_ID", type="integer", nullable=true)
     */
    private $ncId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CD_DATE", type="datetime", nullable=true)
     */
    private $cdDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_QTE", type="integer", nullable=true)
     */
    private $cdQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_DETAIL", type="string", length=50, nullable=true)
     */
    private $cdDetail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_REF", type="string", length=100, nullable=true)
     */
    private $cdRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_EAN", type="string", length=20, nullable=true)
     */
    private $cdEan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_NOM", type="string", length=200, nullable=true)
     */
    private $cdNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_DESCR_COURTE", type="string", length=500, nullable=true)
     */
    private $cdDescrCourte;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CD_PRIX_PUBLIC", type="float", precision=53, scale=0, nullable=true)
     */
    private $cdPrixPublic;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CD_PRIX_CA", type="float", precision=53, scale=0, nullable=true)
     */
    private $cdPrixCa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CD_PRIX_VC", type="float", precision=53, scale=0, nullable=true)
     */
    private $cdPrixVc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL1", type="integer", nullable=true)
     */
    private $cdDecl1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL2", type="integer", nullable=true)
     */
    private $cdDecl2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL3", type="integer", nullable=true)
     */
    private $cdDecl3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL4", type="integer", nullable=true)
     */
    private $cdDecl4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_DECL5", type="integer", nullable=true)
     */
    private $cdDecl5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_STATUS", type="integer", nullable=true)
     */
    private $cdStatus;

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
     * @var \CommandeEntete
     *
     * @ORM\ManyToOne(targetEntity="CommandeEntete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CE_ID", referencedColumnName="CE_ID")
     * })
     */
    private $ce;


}

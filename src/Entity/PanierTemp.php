<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PanierTemp
 *
 * @ORM\Table(name="PANIER_TEMP")
 * @ORM\Entity
 */
class PanierTemp
{
    /**
     * @var int
     *
     * @ORM\Column(name="PT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ptId;

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
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ID", type="integer", nullable=true)
     */
    private $meId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NC_ID", type="integer", nullable=true)
     */
    private $ncId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PT_DATE", type="date", nullable=true)
     */
    private $ptDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_QTE", type="integer", nullable=true)
     */
    private $ptQte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PT_DETAIL", type="string", length=50, nullable=true)
     */
    private $ptDetail;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PT_PRIX_VC", type="float", precision=53, scale=0, nullable=true)
     */
    private $ptPrixVc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL1", type="integer", nullable=true)
     */
    private $ptDecl1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL2", type="integer", nullable=true)
     */
    private $ptDecl2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL3", type="integer", nullable=true)
     */
    private $ptDecl3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL4", type="integer", nullable=true)
     */
    private $ptDecl4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PT_DECL5", type="integer", nullable=true)
     */
    private $ptDecl5;

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

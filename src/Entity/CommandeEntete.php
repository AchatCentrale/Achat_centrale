<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeEntete
 *
 * @ORM\Table(name="COMMANDE_ENTETE", indexes={@ORM\Index(name="IDX_BD3767A9FD61DBA2", columns={"ME_ID"})})
 * @ORM\Entity
 */
class CommandeEntete
{
    /**
     * @var int
     *
     * @ORM\Column(name="CE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ceId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CE_DATE", type="date", nullable=true)
     */
    private $ceDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CE_DATE_LIV", type="date", nullable=true)
     */
    private $ceDateLiv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CE_PORT", type="float", precision=53, scale=0, nullable=true)
     */
    private $cePort;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CE_PORT_TVA", type="float", precision=53, scale=0, nullable=true)
     */
    private $cePortTva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CE_TOTAL", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceTotal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CE_ETIQ_CB", type="integer", nullable=true)
     */
    private $ceEtiqCb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CE_ETIQ_PV", type="integer", nullable=true)
     */
    private $ceEtiqPv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CE_ETIQ_IMG", type="string", length=100, nullable=true)
     */
    private $ceEtiqImg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CE_ARLEQUIN", type="string", length=50, nullable=true)
     */
    private $ceArlequin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CE_TEMPO", type="string", length=50, nullable=true)
     */
    private $ceTempo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CE_STATUS", type="integer", nullable=true)
     */
    private $ceStatus;

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
     * @var \MessageEntete
     *
     * @ORM\ManyToOne(targetEntity="MessageEntete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ME_ID", referencedColumnName="ME_ID")
     * })
     */
    private $me;


}

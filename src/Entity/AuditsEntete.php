<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuditsEntete
 *
 * @ORM\Table(name="AUDITS_ENTETE")
 * @ORM\Entity
 */
class AuditsEntete
{
    /**
     * @var int
     *
     * @ORM\Column(name="AE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aeId;

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
     * @ORM\Column(name="US_ID", type="integer", nullable=true)
     */
    private $usId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="AE_DATE", type="date", nullable=true)
     */
    private $aeDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AE_TOTAL_EUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $aeTotalEur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AE_TOTAL_PCT", type="float", precision=53, scale=0, nullable=true)
     */
    private $aeTotalPct;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AE_AN_EUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $aeAnEur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AE_AN_PCT", type="float", precision=53, scale=0, nullable=true)
     */
    private $aeAnPct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AE_TEMPO", type="string", length=50, nullable=true)
     */
    private $aeTempo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AE_STATUS", type="integer", nullable=true)
     */
    private $aeStatus;

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

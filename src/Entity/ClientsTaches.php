<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsTaches
 *
 * @ORM\Table(name="CLIENTS_TACHES")
 * @ORM\Entity
 */
class ClientsTaches
{
    /**
     * @var int
     *
     * @ORM\Column(name="CLA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $claId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="US_ID", type="integer", nullable=true)
     */
    private $usId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CLA_TYPE", type="integer", nullable=true)
     */
    private $claType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLA_NOM", type="string", length=50, nullable=true)
     */
    private $claNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLA_DESCR", type="text", length=-1, nullable=true)
     */
    private $claDescr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CLA_ECHEANCE", type="datetime", nullable=true)
     */
    private $claEcheance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CLA_PRIORITE", type="integer", nullable=true)
     */
    private $claPriorite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CLA_NOTIF_REF", type="integer", nullable=true)
     */
    private $claNotifRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CLA_STATUS", type="integer", nullable=true)
     */
    private $claStatus;

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

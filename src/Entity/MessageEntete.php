<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageEntete
 *
 * @ORM\Table(name="MESSAGE_ENTETE")
 * @ORM\Entity
 */
class MessageEntete
{
    /**
     * @var int
     *
     * @ORM\Column(name="ME_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $meId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

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
     * @ORM\Column(name="FC_ID", type="integer", nullable=true)
     */
    private $fcId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ME_DATE", type="datetime", nullable=true)
     */
    private $meDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ME_SUJET", type="string", length=200, nullable=true)
     */
    private $meSujet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ME_NOTE", type="string", length=500, nullable=true)
     */
    private $meNote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_STATUS", type="integer", nullable=true)
     */
    private $meStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_LU_C", type="integer", nullable=true)
     */
    private $meLuC;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_LU_F", type="integer", nullable=true)
     */
    private $meLuF;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_RELANCE", type="integer", nullable=true)
     */
    private $meRelance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ADR_FAC", type="integer", nullable=true)
     */
    private $meAdrFac;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ADR_LIV", type="integer", nullable=true)
     */
    private $meAdrLiv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_CMDE", type="integer", nullable=true)
     */
    private $meCmde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ME_MESS_VAL", type="string", length=5000, nullable=true)
     */
    private $meMessVal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ME_TEMPO", type="string", length=50, nullable=true)
     */
    private $meTempo;

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

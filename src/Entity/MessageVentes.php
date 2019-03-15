<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageVentes
 *
 * @ORM\Table(name="MESSAGE_VENTES")
 * @ORM\Entity
 */
class MessageVentes
{
    /**
     * @var int
     *
     * @ORM\Column(name="MV_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mvId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ID", type="integer", nullable=true)
     */
    private $meId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_CLIENT", type="integer", nullable=true)
     */
    private $mvClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_CLIENT_U", type="integer", nullable=true)
     */
    private $mvClientU;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_FOURN", type="integer", nullable=true)
     */
    private $mvFourn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_FOURN_U", type="integer", nullable=true)
     */
    private $mvFournU;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MV_SUJET", type="string", length=200, nullable=true)
     */
    private $mvSujet;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MV_DT_VENTE", type="datetime", nullable=true)
     */
    private $mvDtVente;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MV_MONTANT", type="float", precision=53, scale=0, nullable=true)
     */
    private $mvMontant;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MV_MONTANT_PUB", type="float", precision=53, scale=0, nullable=true)
     */
    private $mvMontantPub;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MV_COMMIS_PCT", type="float", precision=53, scale=0, nullable=true)
     */
    private $mvCommisPct;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MV_COMMIS_EUR", type="float", precision=53, scale=0, nullable=true)
     */
    private $mvCommisEur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MV_COMMENT", type="text", length=16, nullable=true)
     */
    private $mvComment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MV_STATUS", type="integer", nullable=true)
     */
    private $mvStatus;

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

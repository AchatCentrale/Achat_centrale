<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersDroits
 *
 * @ORM\Table(name="USERS_DROITS", indexes={@ORM\Index(name="IDX_52C12AD2D8830FA2", columns={"US_ID"})})
 * @ORM\Entity
 */
class UsersDroits
{
    /**
     * @var int
     *
     * @ORM\Column(name="UD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $udId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_EXTRANET", type="integer", nullable=true)
     */
    private $udExtranet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_INSTUTIONNEL", type="integer", nullable=true)
     */
    private $udInstutionnel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_PRODUIT", type="integer", nullable=true)
     */
    private $udProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_OPTIONS", type="integer", nullable=true)
     */
    private $udOptions;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_COMMISSION", type="integer", nullable=true)
     */
    private $udCommission;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_RFA_SUP", type="integer", nullable=true)
     */
    private $udRfaSup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_CLIENT_INS", type="integer", nullable=true)
     */
    private $udClientIns;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_CLIENT_MAJ", type="integer", nullable=true)
     */
    private $udClientMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_CLIENT_SUP", type="integer", nullable=true)
     */
    private $udClientSup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_USER_INS", type="integer", nullable=true)
     */
    private $udUserIns;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_USER_MAJ", type="integer", nullable=true)
     */
    private $udUserMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_USER_SUP", type="integer", nullable=true)
     */
    private $udUserSup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_EXTRACTION", type="integer", nullable=true)
     */
    private $udExtraction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_FOURNISSEUR", type="integer", nullable=true)
     */
    private $udFournisseur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UD_COPIE_TICKET", type="integer", nullable=true)
     */
    private $udCopieTicket;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="US_ID", referencedColumnName="US_ID")
     * })
     */
    private $us;


}

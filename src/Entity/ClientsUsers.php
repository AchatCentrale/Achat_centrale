<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsUsers
 *
 * @ORM\Table(name="CLIENTS_USERS", indexes={@ORM\Index(name="IDX_E2E056FD3F592A49", columns={"CL_ID"})})
 * @ORM\Entity
 */
class ClientsUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PU_ID", type="integer", nullable=true)
     */
    private $puId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_PRENOM", type="string", length=50, nullable=true)
     */
    private $ccPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_NOM", type="string", length=50, nullable=true)
     */
    private $ccNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_FONCTION", type="string", length=50, nullable=true)
     */
    private $ccFonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_TEL", type="string", length=50, nullable=true)
     */
    private $ccTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_GSM", type="string", length=50, nullable=true)
     */
    private $ccGsm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_FAX", type="string", length=50, nullable=true)
     */
    private $ccFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_MAIL", type="string", length=100, nullable=true)
     */
    private $ccMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_PASS", type="string", length=50, nullable=true)
     */
    private $ccPass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_NIVEAU", type="integer", nullable=true)
     */
    private $ccNiveau;

    /**
     * @var bool
     *
     * @ORM\Column(name="CIRCUIT_VALIDATION", type="boolean", nullable=false)
     */
    private $circuitValidation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_STATUS", type="integer", nullable=true)
     */
    private $ccStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_TOKEN_APP", type="string", length=50, nullable=true)
     */
    private $ccTokenApp;

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
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CL_ID", referencedColumnName="CL_ID")
     * })
     */
    private $cl;


}

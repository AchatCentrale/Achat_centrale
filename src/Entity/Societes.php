<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societes
 *
 * @ORM\Table(name="SOCIETES")
 * @ORM\Entity
 */
class Societes
{
    /**
     * @var int
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_RAISONSOC", type="string", length=50, nullable=true)
     */
    private $soRaisonsoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_CONTACT", type="string", length=50, nullable=true)
     */
    private $soContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_ADRESSE1", type="string", length=50, nullable=true)
     */
    private $soAdresse1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_ADRESSE2", type="string", length=50, nullable=true)
     */
    private $soAdresse2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_CP", type="string", length=50, nullable=true)
     */
    private $soCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_VILLE", type="string", length=50, nullable=true)
     */
    private $soVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_PAYS", type="string", length=50, nullable=true)
     */
    private $soPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_TEL", type="string", length=50, nullable=true)
     */
    private $soTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_PORT", type="string", length=50, nullable=true)
     */
    private $soPort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_FAX", type="string", length=50, nullable=true)
     */
    private $soFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_WEB", type="string", length=100, nullable=true)
     */
    private $soWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_MAIL", type="string", length=100, nullable=true)
     */
    private $soMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_SIREN", type="string", length=50, nullable=true)
     */
    private $soSiren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_SIRET", type="string", length=50, nullable=true)
     */
    private $soSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_NO_TVA", type="string", length=50, nullable=true)
     */
    private $soNoTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_TYPE", type="string", length=50, nullable=true)
     */
    private $soType;

    /**
     * @var float|null
     *
     * @ORM\Column(name="SO_CAPITAL", type="float", precision=53, scale=0, nullable=true)
     */
    private $soCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_NAF", type="string", length=50, nullable=true)
     */
    private $soNaf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_STATUS", type="integer", nullable=true)
     */
    private $soStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SO_DATABASE", type="string", length=50, nullable=true)
     */
    private $soDatabase;

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

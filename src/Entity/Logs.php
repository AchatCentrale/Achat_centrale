<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logs
 *
 * @ORM\Table(name="LOGS")
 * @ORM\Entity
 */
class Logs
{
    /**
     * @var int
     *
     * @ORM\Column(name="LO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $loId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_IDENT", type="string", length=50, nullable=true)
     */
    private $loIdent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LO_IDENT_NUM", type="integer", nullable=true)
     */
    private $loIdentNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_CODE", type="string", length=50, nullable=true)
     */
    private $loCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LO_DATE", type="datetime", nullable=true)
     */
    private $loDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_DESCR", type="string", length=5000, nullable=true)
     */
    private $loDescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_NAVIGAT", type="string", length=1000, nullable=true)
     */
    private $loNavigat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LO_IP", type="string", length=20, nullable=true)
     */
    private $loIp;

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


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presse
 *
 * @ORM\Table(name="PRESSE")
 * @ORM\Entity
 */
class Presse
{
    /**
     * @var int
     *
     * @ORM\Column(name="PP_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ppId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_TITRE", type="string", length=100, nullable=true)
     */
    private $ppTitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_LOGO", type="string", length=100, nullable=true)
     */
    private $ppLogo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_IMAGE", type="string", length=100, nullable=true)
     */
    private $ppImage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PP_DATE", type="datetime", nullable=true)
     */
    private $ppDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_PAGE", type="string", length=50, nullable=true)
     */
    private $ppPage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_DESCR", type="text", length=16, nullable=true)
     */
    private $ppDescr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PP_ORDRE", type="integer", nullable=true)
     */
    private $ppOrdre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PP_TEMPO", type="string", length=50, nullable=true)
     */
    private $ppTempo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PP_STATUS", type="integer", nullable=true)
     */
    private $ppStatus;

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

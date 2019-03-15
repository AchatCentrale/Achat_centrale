<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodesPromo
 *
 * @ORM\Table(name="CODES_PROMO")
 * @ORM\Entity
 */
class CodesPromo
{
    /**
     * @var int
     *
     * @ORM\Column(name="CP_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CP_CODE", type="string", length=50, nullable=true)
     */
    private $cpCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CP_REMISE", type="float", precision=53, scale=0, nullable=true)
     */
    private $cpRemise;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CP_VALIDITE", type="datetime", nullable=true)
     */
    private $cpValidite;

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

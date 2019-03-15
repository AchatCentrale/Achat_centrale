<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sliders
 *
 * @ORM\Table(name="SLIDERS")
 * @ORM\Entity
 */
class Sliders
{
    /**
     * @var int
     *
     * @ORM\Column(name="SL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $slId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SL_TITRE", type="string", length=100, nullable=true)
     */
    private $slTitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SL_SLIDE", type="string", length=100, nullable=true)
     */
    private $slSlide;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SL_LIEN", type="string", length=1000, nullable=true)
     */
    private $slLien;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SL_ORDRE", type="integer", nullable=true)
     */
    private $slOrdre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SL_STATUS", type="integer", nullable=true)
     */
    private $slStatus;

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

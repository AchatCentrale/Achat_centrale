<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifs
 *
 * @ORM\Table(name="TARIFS")
 * @ORM\Entity
 */
class Tarifs
{
    /**
     * @var int
     *
     * @ORM\Column(name="TA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TA_EFFECTIF", type="string", length=50, nullable=true)
     */
    private $taEffectif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TA_UNITE", type="integer", nullable=true)
     */
    private $taUnite;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TA_PRIX", type="float", precision=53, scale=0, nullable=true)
     */
    private $taPrix;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TA_PRIX_REMISE", type="float", precision=53, scale=0, nullable=true)
     */
    private $taPrixRemise;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="TA_DATE", type="datetime", nullable=true)
     */
    private $taDate;


}

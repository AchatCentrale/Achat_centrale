<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegionsFournisseurs
 *
 * @ORM\Table(name="REGIONS_FOURNISSEURS")
 * @ORM\Entity
 */
class RegionsFournisseurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="RF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rfId;

    /**
     * @var int
     *
     * @ORM\Column(name="RE_ID", type="integer", nullable=false)
     */
    private $reId;

    /**
     * @var int
     *
     * @ORM\Column(name="FO_ID", type="integer", nullable=false)
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
     * @ORM\Column(name="US_ID", type="integer", nullable=true)
     */
    private $usId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="INS_DATE", type="date", nullable=true)
     */
    private $insDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="INS_USER", type="string", length=100, nullable=true)
     */
    private $insUser;


}

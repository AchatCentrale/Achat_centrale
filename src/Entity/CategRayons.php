<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategRayons
 *
 * @ORM\Table(name="CATEG_RAYONS")
 * @ORM\Entity
 */
class CategRayons
{
    /**
     * @var int
     *
     * @ORM\Column(name="CR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $crId;

    /**
     * @var int
     *
     * @ORM\Column(name="RA_ID", type="integer", nullable=false)
     */
    private $raId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CatID", type="integer", nullable=true)
     */
    private $catid;


}

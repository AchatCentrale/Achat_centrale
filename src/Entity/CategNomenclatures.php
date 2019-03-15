<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategNomenclatures
 *
 * @ORM\Table(name="CATEG_NOMENCLATURES")
 * @ORM\Entity
 */
class CategNomenclatures
{
    /**
     * @var int
     *
     * @ORM\Column(name="CN_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cnId;

    /**
     * @var int
     *
     * @ORM\Column(name="NC_ID", type="integer", nullable=false)
     */
    private $ncId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CatID", type="integer", nullable=true)
     */
    private $catid;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classif
 *
 * @ORM\Table(name="CLASSIF")
 * @ORM\Entity
 */
class Classif
{
    /**
     * @var int
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CL_DESCR", type="string", length=100, nullable=true)
     */
    private $clDescr;


}

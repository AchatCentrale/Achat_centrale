<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activites
 *
 * @ORM\Table(name="ACTIVITES")
 * @ORM\Entity
 */
class Activites
{
    /**
     * @var int
     *
     * @ORM\Column(name="AC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $acId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AC_DESCR", type="string", length=100, nullable=true)
     */
    private $acDescr;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="PAYS")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="PA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PA_CODE", type="string", length=50, nullable=true)
     */
    private $paCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PA_DESCR", type="string", length=50, nullable=true)
     */
    private $paDescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PA_PROV", type="string", length=50, nullable=true)
     */
    private $paProv;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratsCat
 *
 * @ORM\Table(name="CONTRATS_CAT", indexes={@ORM\Index(name="IDX_AF50DB674D0C1225", columns={"SO_ID"})})
 * @ORM\Entity
 */
class ContratsCat
{
    /**
     * @var int
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_DESCR", type="string", length=100, nullable=true)
     */
    private $ccDescr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CC_DATE", type="datetime", nullable=true)
     */
    private $ccDate;

    /**
     * @var \Societes
     *
     * @ORM\ManyToOne(targetEntity="Societes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SO_ID", referencedColumnName="SO_ID")
     * })
     */
    private $so;


}

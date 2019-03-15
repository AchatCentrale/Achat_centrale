<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Textes
 *
 * @ORM\Table(name="Textes", indexes={@ORM\Index(name="IDX_5BFAE4E45919F4AB", columns={"CatID"})})
 * @ORM\Entity
 */
class Textes
{
    /**
     * @var int
     *
     * @ORM\Column(name="TxtID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $txtid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TxtTitre", type="string", length=100, nullable=true)
     */
    private $txttitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TxtDescription", type="string", length=7900, nullable=true)
     */
    private $txtdescription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TxtSort", type="integer", nullable=true)
     */
    private $txtsort;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="TxtSortDt", type="datetime", nullable=true)
     */
    private $txtsortdt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="TxtDate", type="datetime", nullable=true)
     */
    private $txtdate;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CatID", referencedColumnName="CatID")
     * })
     */
    private $catid;


}

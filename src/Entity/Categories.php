<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="Categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="CatID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CatIDParent", type="integer", nullable=true)
     */
    private $catidparent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatDescription", type="string", length=100, nullable=true)
     */
    private $catdescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatTitre", type="string", length=100, nullable=true)
     */
    private $cattitre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatTitreReq", type="string", length=100, nullable=true)
     */
    private $cattitrereq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatLien", type="string", length=300, nullable=true)
     */
    private $catlien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatLienRW", type="string", length=100, nullable=true)
     */
    private $catlienrw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatTagDescr", type="string", length=200, nullable=true)
     */
    private $cattagdescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatTagKeyword", type="string", length=1000, nullable=true)
     */
    private $cattagkeyword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatImage", type="string", length=100, nullable=true)
     */
    private $catimage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatImage_H", type="string", length=100, nullable=true)
     */
    private $catimageH;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CatBandeau", type="string", length=100, nullable=true)
     */
    private $catbandeau;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CatSort", type="integer", nullable=true)
     */
    private $catsort;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CatDate", type="datetime", nullable=true)
     */
    private $catdate;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitsPromoCat
 *
 * @ORM\Table(name="PRODUITS_PROMO_CAT")
 * @ORM\Entity
 */
class ProduitsPromoCat
{
    /**
     * @var int
     *
     * @ORM\Column(name="PPC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ppcId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PPC_DESCR", type="string", length=200, nullable=true)
     */
    private $ppcDescr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PPC_ORDRE", type="integer", nullable=true)
     */
    private $ppcOrdre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="INS_DATE", type="datetime", nullable=true)
     */
    private $insDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="INS_USER", type="string", length=100, nullable=true)
     */
    private $insUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MAJ_DATE", type="datetime", nullable=true)
     */
    private $majDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAJ_USER", type="string", length=100, nullable=true)
     */
    private $majUser;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilsUsers
 *
 * @ORM\Table(name="PROFILS_USERS")
 * @ORM\Entity
 */
class ProfilsUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="PU_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $puId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PU_DESCR", type="string", length=50, nullable=true)
     */
    private $puDescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PU_POLE", type="string", length=50, nullable=true)
     */
    private $puPole;

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

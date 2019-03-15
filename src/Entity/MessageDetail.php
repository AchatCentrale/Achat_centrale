<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageDetail
 *
 * @ORM\Table(name="MESSAGE_DETAIL", indexes={@ORM\Index(name="IDX_3DB4A13DFD61DBA2", columns={"ME_ID"})})
 * @ORM\Entity
 */
class MessageDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="MD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mdId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=true)
     */
    private $ccId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FC_ID", type="integer", nullable=true)
     */
    private $fcId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="US_ID", type="integer", nullable=true)
     */
    private $usId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MD_DATE", type="datetime", nullable=true)
     */
    private $mdDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MD_CORPS", type="text", length=16, nullable=true)
     */
    private $mdCorps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MD_TEMPO", type="string", length=50, nullable=true)
     */
    private $mdTempo;

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
     * @var \MessageEntete
     *
     * @ORM\ManyToOne(targetEntity="MessageEntete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ME_ID", referencedColumnName="ME_ID")
     * })
     */
    private $me;


}

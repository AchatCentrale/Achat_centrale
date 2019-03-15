<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsConso
 *
 * @ORM\Table(name="CLIENTS_CONSO")
 * @ORM\Entity
 */
class ClientsConso
{
    /**
     * @var int
     *
     * @ORM\Column(name="CLC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clcId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CC_ID", type="integer", nullable=true)
     */
    private $ccId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FO_ID", type="integer", nullable=true)
     */
    private $foId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CLC_DATE", type="date", nullable=true)
     */
    private $clcDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CLC_PRIX_PUBLIC", type="float", precision=53, scale=0, nullable=true)
     */
    private $clcPrixPublic;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CLC_PRIX_CENTRALE", type="float", precision=53, scale=0, nullable=true)
     */
    private $clcPrixCentrale;

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


}

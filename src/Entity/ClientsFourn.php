<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsFourn
 *
 * @ORM\Table(name="CLIENTS_FOURN", indexes={@ORM\Index(name="IDX_A04F9C213F592A49", columns={"CL_ID"})})
 * @ORM\Entity
 */
class ClientsFourn
{
    /**
     * @var int
     *
     * @ORM\Column(name="CF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cfId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FO_ID", type="integer", nullable=true)
     */
    private $foId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CF_USER", type="string", length=100, nullable=true)
     */
    private $cfUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CF_PASS", type="string", length=50, nullable=true)
     */
    private $cfPass;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CL_ID", referencedColumnName="CL_ID")
     * })
     */
    private $cl;


}

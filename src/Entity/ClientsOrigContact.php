<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsOrigContact
 *
 * @ORM\Table(name="CLIENTS_ORIG_CONTACT")
 * @ORM\Entity
 */
class ClientsOrigContact
{
    /**
     * @var int
     *
     * @ORM\Column(name="COC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cocId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COC_DESCR", type="string", length=50, nullable=true)
     */
    private $cocDescr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="COC_ORDRE", type="integer", nullable=true)
     */
    private $cocOrdre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="COC_DATE", type="datetime", nullable=true)
     */
    private $cocDate;


}

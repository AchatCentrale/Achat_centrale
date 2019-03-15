<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageFichiers
 *
 * @ORM\Table(name="MESSAGE_FICHIERS", indexes={@ORM\Index(name="IDX_6998CDC7FD61DBA2", columns={"ME_ID"})})
 * @ORM\Entity
 */
class MessageFichiers
{
    /**
     * @var int
     *
     * @ORM\Column(name="MF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mfId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MD_ID", type="integer", nullable=true)
     */
    private $mdId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MF_FICHIER", type="string", length=200, nullable=true)
     */
    private $mfFichier;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MF_TAILLE", type="float", precision=53, scale=0, nullable=true)
     */
    private $mfTaille;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MF_DATE", type="datetime", nullable=true)
     */
    private $mfDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MF_TEMPO", type="string", length=50, nullable=true)
     */
    private $mfTempo;

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

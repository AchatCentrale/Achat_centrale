<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsAdresses
 *
 * @ORM\Table(name="CLIENTS_ADRESSES")
 * @ORM\Entity
 */
class ClientsAdresses
{
    /**
     * @var int
     *
     * @ORM\Column(name="CA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $caId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_TYPE", type="string", length=1, nullable=true)
     */
    private $caType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_RAISONSOC", type="string", length=100, nullable=true)
     */
    private $caRaisonsoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_ADRESSE1", type="string", length=100, nullable=true)
     */
    private $caAdresse1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_ADRESSE2", type="string", length=100, nullable=true)
     */
    private $caAdresse2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_CP", type="string", length=10, nullable=true)
     */
    private $caCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_VILLE", type="string", length=50, nullable=true)
     */
    private $caVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_PAYS", type="string", length=50, nullable=true)
     */
    private $caPays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CA_PRINCIPALE", type="integer", nullable=true)
     */
    private $caPrincipale;

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

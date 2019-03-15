<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NousContacter
 *
 * @ORM\Table(name="NOUS_CONTACTER")
 * @ORM\Entity
 */
class NousContacter
{
    /**
     * @var int
     *
     * @ORM\Column(name="NC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ncId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_SOCIETE", type="string", length=50, nullable=true)
     */
    private $ncSociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_NOM", type="string", length=50, nullable=true)
     */
    private $ncNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_PRENOM", type="string", length=50, nullable=true)
     */
    private $ncPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_SIRET", type="string", length=50, nullable=true)
     */
    private $ncSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_MAIL", type="string", length=100, nullable=true)
     */
    private $ncMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_TEL", type="string", length=50, nullable=true)
     */
    private $ncTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_OBJET", type="string", length=50, nullable=true)
     */
    private $ncObjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_COMMENTAIRE", type="string", length=7000, nullable=true)
     */
    private $ncCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NC_TEMPO", type="string", length=50, nullable=true)
     */
    private $ncTempo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="NC_DATE", type="datetime", nullable=true)
     */
    private $ncDate;


}

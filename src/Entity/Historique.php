<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity
 */
class Historique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_exp", type="string", length=255, nullable=false, options={"fixed"=true})
     */
    private $mailExp;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_dest", type="string", length=255, nullable=false, options={"fixed"=true})
     */
    private $mailDest;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vdate", type="datetime", nullable=false)
     */
    private $vdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_retour", type="string", length=2000, nullable=true)
     */
    private $codeRetour;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_code_retour", type="integer", nullable=true)
     */
    private $idCodeRetour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_erreur", type="string", length=255, nullable=true)
     */
    private $codeErreur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SubjectMessage", type="string", length=500, nullable=true)
     */
    private $subjectmessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BodyMessage", type="string", length=5000, nullable=true)
     */
    private $bodymessage;


}

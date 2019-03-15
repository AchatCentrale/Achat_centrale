<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faq
 *
 * @ORM\Table(name="FAQ")
 * @ORM\Entity
 */
class Faq
{
    /**
     * @var int
     *
     * @ORM\Column(name="QF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $qfId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SO_ID", type="integer", nullable=true)
     */
    private $soId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="QF_QUESTION", type="string", length=500, nullable=true)
     */
    private $qfQuestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="QF_REPONSE", type="text", length=16, nullable=true)
     */
    private $qfReponse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QF_ORDRE", type="integer", nullable=true)
     */
    private $qfOrdre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="QF_DATE", type="datetime", nullable=true)
     */
    private $qfDate;


}

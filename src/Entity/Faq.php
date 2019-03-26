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

    public function getQfId(): ?int
    {
        return $this->qfId;
    }

    public function getSoId(): ?int
    {
        return $this->soId;
    }

    public function setSoId(?int $soId): self
    {
        $this->soId = $soId;

        return $this;
    }

    public function getQfQuestion(): ?string
    {
        return $this->qfQuestion;
    }

    public function setQfQuestion(?string $qfQuestion): self
    {
        $this->qfQuestion = $qfQuestion;

        return $this;
    }

    public function getQfReponse(): ?string
    {
        return $this->qfReponse;
    }

    public function setQfReponse(?string $qfReponse): self
    {
        $this->qfReponse = $qfReponse;

        return $this;
    }

    public function getQfOrdre(): ?int
    {
        return $this->qfOrdre;
    }

    public function setQfOrdre(?int $qfOrdre): self
    {
        $this->qfOrdre = $qfOrdre;

        return $this;
    }

    public function getQfDate(): ?\DateTimeInterface
    {
        return $this->qfDate;
    }

    public function setQfDate(?\DateTimeInterface $qfDate): self
    {
        $this->qfDate = $qfDate;

        return $this;
    }


}

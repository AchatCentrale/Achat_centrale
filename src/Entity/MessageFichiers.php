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

    public function getMfId(): ?int
    {
        return $this->mfId;
    }

    public function getMdId(): ?int
    {
        return $this->mdId;
    }

    public function setMdId(?int $mdId): self
    {
        $this->mdId = $mdId;

        return $this;
    }

    public function getMfFichier(): ?string
    {
        return $this->mfFichier;
    }

    public function setMfFichier(?string $mfFichier): self
    {
        $this->mfFichier = $mfFichier;

        return $this;
    }

    public function getMfTaille(): ?float
    {
        return $this->mfTaille;
    }

    public function setMfTaille(?float $mfTaille): self
    {
        $this->mfTaille = $mfTaille;

        return $this;
    }

    public function getMfDate(): ?\DateTimeInterface
    {
        return $this->mfDate;
    }

    public function setMfDate(?\DateTimeInterface $mfDate): self
    {
        $this->mfDate = $mfDate;

        return $this;
    }

    public function getMfTempo(): ?string
    {
        return $this->mfTempo;
    }

    public function setMfTempo(?string $mfTempo): self
    {
        $this->mfTempo = $mfTempo;

        return $this;
    }

    public function getMe(): ?MessageEntete
    {
        return $this->me;
    }

    public function setMe(?MessageEntete $me): self
    {
        $this->me = $me;

        return $this;
    }


}

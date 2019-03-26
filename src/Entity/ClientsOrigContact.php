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

    public function getCocId(): ?int
    {
        return $this->cocId;
    }

    public function getCocDescr(): ?string
    {
        return $this->cocDescr;
    }

    public function setCocDescr(?string $cocDescr): self
    {
        $this->cocDescr = $cocDescr;

        return $this;
    }

    public function getCocOrdre(): ?int
    {
        return $this->cocOrdre;
    }

    public function setCocOrdre(?int $cocOrdre): self
    {
        $this->cocOrdre = $cocOrdre;

        return $this;
    }

    public function getCocDate(): ?\DateTimeInterface
    {
        return $this->cocDate;
    }

    public function setCocDate(?\DateTimeInterface $cocDate): self
    {
        $this->cocDate = $cocDate;

        return $this;
    }


}

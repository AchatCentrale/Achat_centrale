<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="PAYS")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="PA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PA_CODE", type="string", length=50, nullable=true)
     */
    private $paCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PA_DESCR", type="string", length=50, nullable=true)
     */
    private $paDescr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PA_PROV", type="string", length=50, nullable=true)
     */
    private $paProv;

    public function getPaId(): ?int
    {
        return $this->paId;
    }

    public function getPaCode(): ?string
    {
        return $this->paCode;
    }

    public function setPaCode(?string $paCode): self
    {
        $this->paCode = $paCode;

        return $this;
    }

    public function getPaDescr(): ?string
    {
        return $this->paDescr;
    }

    public function setPaDescr(?string $paDescr): self
    {
        $this->paDescr = $paDescr;

        return $this;
    }

    public function getPaProv(): ?string
    {
        return $this->paProv;
    }

    public function setPaProv(?string $paProv): self
    {
        $this->paProv = $paProv;

        return $this;
    }


}

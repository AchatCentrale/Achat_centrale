<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategRayons
 *
 * @ORM\Table(name="CATEG_RAYONS")
 * @ORM\Entity
 */
class CategRayons
{
    /**
     * @var int
     *
     * @ORM\Column(name="CR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $crId;

    /**
     * @var int
     *
     * @ORM\Column(name="RA_ID", type="integer", nullable=false)
     */
    private $raId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CatID", type="integer", nullable=true)
     */
    private $catid;

    public function getCrId(): ?int
    {
        return $this->crId;
    }

    public function getRaId(): ?int
    {
        return $this->raId;
    }

    public function setRaId(int $raId): self
    {
        $this->raId = $raId;

        return $this;
    }

    public function getCatid(): ?int
    {
        return $this->catid;
    }

    public function setCatid(?int $catid): self
    {
        $this->catid = $catid;

        return $this;
    }


}

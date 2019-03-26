<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionType
 *
 * @ORM\Table(name="ACTION_TYPE")
 * @ORM\Entity
 */
class ActionType
{
    /**
     * @var int
     *
     * @ORM\Column(name="AC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $acId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AC_NOM", type="string", length=100, nullable=true)
     */
    private $acNom;

    public function getAcId(): ?int
    {
        return $this->acId;
    }

    public function getAcNom(): ?string
    {
        return $this->acNom;
    }

    public function setAcNom(?string $acNom): self
    {
        $this->acNom = $acNom;

        return $this;
    }


}

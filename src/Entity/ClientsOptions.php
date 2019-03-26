<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsOptions
 *
 * @ORM\Table(name="CLIENTS_OPTIONS", indexes={@ORM\Index(name="IDX_74C57C7DE0662F6F", columns={"OP_ID"}), @ORM\Index(name="IDX_74C57C7D3F592A49", columns={"CL_ID"})})
 * @ORM\Entity
 */
class ClientsOptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="CO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CO_REPONSE", type="string", length=500, nullable=true)
     */
    private $coReponse;

    /**
     * @var \Options
     *
     * @ORM\ManyToOne(targetEntity="Options")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OP_ID", referencedColumnName="OP_ID")
     * })
     */
    private $op;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CL_ID", referencedColumnName="CL_ID")
     * })
     */
    private $cl;

    public function getCoId(): ?int
    {
        return $this->coId;
    }

    public function getCoReponse(): ?string
    {
        return $this->coReponse;
    }

    public function setCoReponse(?string $coReponse): self
    {
        $this->coReponse = $coReponse;

        return $this;
    }

    public function getOp(): ?Options
    {
        return $this->op;
    }

    public function setOp(?Options $op): self
    {
        $this->op = $op;

        return $this;
    }

    public function getCl(): ?Clients
    {
        return $this->cl;
    }

    public function setCl(?Clients $cl): self
    {
        $this->cl = $cl;

        return $this;
    }


}

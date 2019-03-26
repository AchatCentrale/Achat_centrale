<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="PANIER", indexes={@ORM\Index(name="IDX_D434CA743F592A49", columns={"CL_ID"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ME_ID", type="integer", nullable=true)
     */
    private $meId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_COMMANDE", type="integer", nullable=true)
     */
    private $idCommande;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PR_ID", type="integer", nullable=true)
     */
    private $prId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QUANTITE", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PRIX_UHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $prixUht;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="INS_DATE", type="datetime", nullable=true)
     */
    private $insDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="INS_USER", type="string", length=100, nullable=true)
     */
    private $insUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MAJ_DATE", type="datetime", nullable=true)
     */
    private $majDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAJ_USER", type="string", length=100, nullable=true)
     */
    private $majUser;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CL_ID", referencedColumnName="CL_ID")
     * })
     */
    private $cl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeId(): ?int
    {
        return $this->meId;
    }

    public function setMeId(?int $meId): self
    {
        $this->meId = $meId;

        return $this;
    }

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function setIdCommande(?int $idCommande): self
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    public function getPrId(): ?int
    {
        return $this->prId;
    }

    public function setPrId(?int $prId): self
    {
        $this->prId = $prId;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixUht(): ?float
    {
        return $this->prixUht;
    }

    public function setPrixUht(?float $prixUht): self
    {
        $this->prixUht = $prixUht;

        return $this;
    }

    public function getInsDate(): ?\DateTimeInterface
    {
        return $this->insDate;
    }

    public function setInsDate(?\DateTimeInterface $insDate): self
    {
        $this->insDate = $insDate;

        return $this;
    }

    public function getInsUser(): ?string
    {
        return $this->insUser;
    }

    public function setInsUser(?string $insUser): self
    {
        $this->insUser = $insUser;

        return $this;
    }

    public function getMajDate(): ?\DateTimeInterface
    {
        return $this->majDate;
    }

    public function setMajDate(?\DateTimeInterface $majDate): self
    {
        $this->majDate = $majDate;

        return $this;
    }

    public function getMajUser(): ?string
    {
        return $this->majUser;
    }

    public function setMajUser(?string $majUser): self
    {
        $this->majUser = $majUser;

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

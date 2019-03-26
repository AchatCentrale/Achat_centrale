<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsAdresses
 *
 * @ORM\Table(name="CLIENTS_ADRESSES")
 * @ORM\Entity
 */
class ClientsAdresses
{
    /**
     * @var int
     *
     * @ORM\Column(name="CA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $caId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CL_ID", type="integer", nullable=true)
     */
    private $clId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_TYPE", type="string", length=1, nullable=true)
     */
    private $caType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_RAISONSOC", type="string", length=100, nullable=true)
     */
    private $caRaisonsoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_ADRESSE1", type="string", length=100, nullable=true)
     */
    private $caAdresse1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_ADRESSE2", type="string", length=100, nullable=true)
     */
    private $caAdresse2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_CP", type="string", length=10, nullable=true)
     */
    private $caCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_VILLE", type="string", length=50, nullable=true)
     */
    private $caVille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CA_PAYS", type="string", length=50, nullable=true)
     */
    private $caPays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CA_PRINCIPALE", type="integer", nullable=true)
     */
    private $caPrincipale;

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

    public function getCaId(): ?int
    {
        return $this->caId;
    }

    public function getClId(): ?int
    {
        return $this->clId;
    }

    public function setClId(?int $clId): self
    {
        $this->clId = $clId;

        return $this;
    }

    public function getCaType(): ?string
    {
        return $this->caType;
    }

    public function setCaType(?string $caType): self
    {
        $this->caType = $caType;

        return $this;
    }

    public function getCaRaisonsoc(): ?string
    {
        return $this->caRaisonsoc;
    }

    public function setCaRaisonsoc(?string $caRaisonsoc): self
    {
        $this->caRaisonsoc = $caRaisonsoc;

        return $this;
    }

    public function getCaAdresse1(): ?string
    {
        return $this->caAdresse1;
    }

    public function setCaAdresse1(?string $caAdresse1): self
    {
        $this->caAdresse1 = $caAdresse1;

        return $this;
    }

    public function getCaAdresse2(): ?string
    {
        return $this->caAdresse2;
    }

    public function setCaAdresse2(?string $caAdresse2): self
    {
        $this->caAdresse2 = $caAdresse2;

        return $this;
    }

    public function getCaCp(): ?string
    {
        return $this->caCp;
    }

    public function setCaCp(?string $caCp): self
    {
        $this->caCp = $caCp;

        return $this;
    }

    public function getCaVille(): ?string
    {
        return $this->caVille;
    }

    public function setCaVille(?string $caVille): self
    {
        $this->caVille = $caVille;

        return $this;
    }

    public function getCaPays(): ?string
    {
        return $this->caPays;
    }

    public function setCaPays(?string $caPays): self
    {
        $this->caPays = $caPays;

        return $this;
    }

    public function getCaPrincipale(): ?int
    {
        return $this->caPrincipale;
    }

    public function setCaPrincipale(?int $caPrincipale): self
    {
        $this->caPrincipale = $caPrincipale;

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


}

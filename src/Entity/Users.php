<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="USERS")
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 * @ORM\Entity
 */
class Users implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="US_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_PRENOM", type="string", length=50, nullable=true)
     */
    private $usPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_NOM", type="string", length=50, nullable=true)
     */
    private $usNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_MAIL", type="string", length=100, nullable=true)
     */
    private $usMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_PASS", type="string", length=50, nullable=true)
     */
    private $usPass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="US_NIVEAU", type="integer", nullable=true)
     */
    private $usNiveau;

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

    public function getUsId(): ?int
    {
        return $this->usId;
    }

    public function getUsPrenom(): ?string
    {
        return $this->usPrenom;
    }

    public function setUsPrenom(?string $usPrenom): self
    {
        $this->usPrenom = $usPrenom;

        return $this;
    }

    public function getUsNom(): ?string
    {
        return $this->usNom;
    }

    public function setUsNom(?string $usNom): self
    {
        $this->usNom = $usNom;

        return $this;
    }

    public function getUsMail(): ?string
    {
        return $this->usMail;
    }

    public function setUsMail(?string $usMail): self
    {
        $this->usMail = $usMail;

        return $this;
    }

    public function getUsPass(): ?string
    {
        return $this->usPass;
    }

    public function setUsPass(?string $usPass): self
    {
        $this->usPass = $usPass;

        return $this;
    }

    public function getUsNiveau(): ?int
    {
        return $this->usNiveau;
    }

    public function setUsNiveau(?int $usNiveau): self
    {
        $this->usNiveau = $usNiveau;

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


    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->getUsPass();
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->getUsMail();
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}

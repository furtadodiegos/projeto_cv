<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="email_UNIQUE", columns={"str_email"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Usuario")
 * @UniqueEntity(
 *      fields={"strEmail"},
 *      message="Este email já está sendo usado."
 * )
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="str_email", type="string", length=155, nullable=false)
     * @Assert\NotBlank(message="O email '{{ value }}' é inválido.")
     * @Assert\Email(
     *      message="O Campo email não est",
     *      checkMX = true
     * )
     */
    private $strEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="str_senha", type="string", length=45, nullable=false)
     */
    private $strSenha;

    /**
     * @var string
     *
     * @ORM\Column(name="str_salt", type="string", length=155, nullable=false)
     */
    private $strSalt;

    /**
     * @var string
     *
     * @ORM\Column(name="str_plain_password", type="string", length=155, nullable=false)
     */
    private $strPlainPassword;


    public function __construct()
    {
        $this->strSalt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set strEmail
     *
     * @param string $strEmail
     *
     * @return Usuario
     */
    public function setStrEmail($strEmail)
    {
        $this->strEmail = $strEmail;

        return $this;
    }

    /**
     * Get strEmail
     *
     * @return string
     */
    public function getStrEmail()
    {
        return $this->strEmail;
    }

    /**
     * Set strSenha
     *
     * @param string $strSenha
     *
     * @return Usuario
     */
    public function setStrSenha($strSenha)
    {
        $this->strSenha = $strSenha;

        return $this;
    }

    /**
     * Get strSenha
     *
     * @return string
     */
    public function getStrSenha()
    {
        return $this->strSenha;
    }

    /**
     * @return string
     */
    public function getStrSalt()
    {
        return $this->strSalt;
    }

    /**
     * @param string $strSalt
     */
    public function setStrSalt($strSalt)
    {
        $this->strSalt = $strSalt;
    }

    /**
     * @return string
     */
    public function getStrPlainPassword()
    {
        return $this->strPlainPassword;
    }

    /**
     * @param string $strPlainPassword
     */
    public function setStrPlainPassword($strPlainPassword)
    {
        $this->strPlainPassword = $strPlainPassword;
    }

}

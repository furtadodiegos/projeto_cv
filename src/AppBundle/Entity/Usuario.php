<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="email_UNIQUE", columns={"str_email"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Usuario")
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
     */
    private $strEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="str_senha", type="string", length=45, nullable=false)
     */
    private $strSenha;



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
}

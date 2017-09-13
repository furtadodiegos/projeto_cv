<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioInfo
 *
 * @ORM\Table(name="usuario_info", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="fk_usuario_info_usuario_idx", columns={"usuario_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioInfo")
 */
class UsuarioInfo
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
     * @ORM\Column(name="str_nome", type="string", length=45, nullable=true)
     */
    private $strNome;

    /**
     * @var string
     *
     * @ORM\Column(name="str_sobrenome", type="string", length=45, nullable=true)
     */
    private $strSobrenome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_nascimento", type="date", nullable=true)
     */
    private $datNascimento;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set strNome
     *
     * @param string $strNome
     *
     * @return UsuarioInfo
     */
    public function setStrNome($strNome)
    {
        $this->strNome = $strNome;

        return $this;
    }

    /**
     * Get strNome
     *
     * @return string
     */
    public function getStrNome()
    {
        return $this->strNome;
    }

    /**
     * Set strSobrenome
     *
     * @param string $strSobrenome
     *
     * @return UsuarioInfo
     */
    public function setStrSobrenome($strSobrenome)
    {
        $this->strSobrenome = $strSobrenome;

        return $this;
    }

    /**
     * Get strSobrenome
     *
     * @return string
     */
    public function getStrSobrenome()
    {
        return $this->strSobrenome;
    }

    /**
     * Set datNascimento
     *
     * @param \DateTime $datNascimento
     *
     * @return UsuarioInfo
     */
    public function setDatNascimento($datNascimento)
    {
        $this->datNascimento = $datNascimento;

        return $this;
    }

    /**
     * Get datNascimento
     *
     * @return \DateTime
     */
    public function getDatNascimento()
    {
        return $this->datNascimento;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return UsuarioInfo
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}

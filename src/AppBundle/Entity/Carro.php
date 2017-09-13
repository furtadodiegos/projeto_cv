<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carro
 *
 * @ORM\Table(name="carro", indexes={@ORM\Index(name="fk_carro_montadora1_idx", columns={"montadora_id"}), @ORM\Index(name="fk_carro_categoria1_idx", columns={"categoria_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Carro")
 */
class Carro
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
     * @ORM\Column(name="str_nome", type="string", length=45, nullable=false)
     */
    private $strNome;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_portas", type="integer", nullable=false)
     */
    private $numPortas;

    /**
     * @var string
     *
     * @ORM\Column(name="str_motor", type="string", length=45, nullable=false)
     */
    private $strMotor;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;

    /**
     * @var \Montadora
     *
     * @ORM\ManyToOne(targetEntity="Montadora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="montadora_id", referencedColumnName="id")
     * })
     */
    private $montadora;



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
     * @return Carro
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
     * Set numPortas
     *
     * @param integer $numPortas
     *
     * @return Carro
     */
    public function setNumPortas($numPortas)
    {
        $this->numPortas = $numPortas;

        return $this;
    }

    /**
     * Get numPortas
     *
     * @return integer
     */
    public function getNumPortas()
    {
        return $this->numPortas;
    }

    /**
     * Set strMotor
     *
     * @param string $strMotor
     *
     * @return Carro
     */
    public function setStrMotor($strMotor)
    {
        $this->strMotor = $strMotor;

        return $this;
    }

    /**
     * Get strMotor
     *
     * @return string
     */
    public function getStrMotor()
    {
        return $this->strMotor;
    }

    /**
     * Set categoria
     *
     * @param \AppBundle\Entity\Categoria $categoria
     *
     * @return Carro
     */
    public function setCategoria(\AppBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set montadora
     *
     * @param \AppBundle\Entity\Montadora $montadora
     *
     * @return Carro
     */
    public function setMontadora(\AppBundle\Entity\Montadora $montadora = null)
    {
        $this->montadora = $montadora;

        return $this;
    }

    /**
     * Get montadora
     *
     * @return \AppBundle\Entity\Montadora
     */
    public function getMontadora()
    {
        return $this->montadora;
    }
}

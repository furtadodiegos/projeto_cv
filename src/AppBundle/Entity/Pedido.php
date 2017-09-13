<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", indexes={@ORM\Index(name="fk_pedido_usuario1_idx", columns={"usuario_id"}), @ORM\Index(name="fk_pedido_carro1_idx", columns={"carro_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Pedido")
 */
class Pedido
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
     * @var \DateTime
     *
     * @ORM\Column(name="dat_pedido", type="datetime", nullable=false)
     */
    private $datPedido;

    /**
     * @var \Carro
     *
     * @ORM\ManyToOne(targetEntity="Carro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carro_id", referencedColumnName="id")
     * })
     */
    private $carro;

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
     * Set datPedido
     *
     * @param \DateTime $datPedido
     *
     * @return Pedido
     */
    public function setDatPedido($datPedido)
    {
        $this->datPedido = $datPedido;

        return $this;
    }

    /**
     * Get datPedido
     *
     * @return \DateTime
     */
    public function getDatPedido()
    {
        return $this->datPedido;
    }

    /**
     * Set carro
     *
     * @param \AppBundle\Entity\Carro $carro
     *
     * @return Pedido
     */
    public function setCarro(\AppBundle\Entity\Carro $carro = null)
    {
        $this->carro = $carro;

        return $this;
    }

    /**
     * Get carro
     *
     * @return \AppBundle\Entity\Carro
     */
    public function getCarro()
    {
        return $this->carro;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Pedido
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

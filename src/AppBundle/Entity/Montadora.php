<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Montadora
 *
 * @ORM\Table(name="montadora")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Montadora")
 */
class Montadora
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
     * @return Montadora
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
}

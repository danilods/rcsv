<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeografiaPais
 *
 * @ORM\Table(name="geografia_pais", uniqueConstraints={@ORM\UniqueConstraint(name="nome", columns={"nome"}), @ORM\UniqueConstraint(name="nome_codigo", columns={"nome_codigo"})})
 * @ORM\Entity
 */
class GeografiaPais
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
     * @ORM\Column(name="nome", type="string", length=30, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_codigo", type="string", length=3, nullable=false)
     */
    private $nomeCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma_codigo", type="string", length=2, nullable=false)
     */
    private $idiomaCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="continente", type="string", length=15, nullable=false)
     */
    private $continente;



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
     * Set nome
     *
     * @param string $nome
     * @return GeografiaPais
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set nomeCodigo
     *
     * @param string $nomeCodigo
     * @return GeografiaPais
     */
    public function setNomeCodigo($nomeCodigo)
    {
        $this->nomeCodigo = $nomeCodigo;

        return $this;
    }

    /**
     * Get nomeCodigo
     *
     * @return string 
     */
    public function getNomeCodigo()
    {
        return $this->nomeCodigo;
    }

    /**
     * Set idiomaCodigo
     *
     * @param string $idiomaCodigo
     * @return GeografiaPais
     */
    public function setIdiomaCodigo($idiomaCodigo)
    {
        $this->idiomaCodigo = $idiomaCodigo;

        return $this;
    }

    /**
     * Get idiomaCodigo
     *
     * @return string 
     */
    public function getIdiomaCodigo()
    {
        return $this->idiomaCodigo;
    }

    /**
     * Set continente
     *
     * @param string $continente
     * @return GeografiaPais
     */
    public function setContinente($continente)
    {
        $this->continente = $continente;

        return $this;
    }

    /**
     * Get continente
     *
     * @return string 
     */
    public function getContinente()
    {
        return $this->continente;
    }
     public function __toString() {
        return $this->nome;
    }
}

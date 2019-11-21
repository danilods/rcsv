<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeografiaUf
 *
 * @ORM\Table(name="geografia_uf", uniqueConstraints={@ORM\UniqueConstraint(name="pais_id", columns={"pais_id", "nome"})}, indexes={@ORM\Index(name="geografia_uf_de1867db", columns={"pais_id"})})
 * @ORM\Entity
 */
class GeografiaUf
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
     * @ORM\Column(name="regiao", type="string", length=20, nullable=false)
     */
    private $regiao;

    /**
     * @var string
     *
     * @ORM\Column(name="comar", type="string", length=10, nullable=false)
     */
    private $comar;

    /**
     * @var \GeografiaPais
     *
     * @ORM\ManyToOne(targetEntity="GeografiaPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     * })
     */
    private $pais;



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
     * @return GeografiaUf
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
     * @return GeografiaUf
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
     * Set regiao
     *
     * @param string $regiao
     * @return GeografiaUf
     */
    public function setRegiao($regiao)
    {
        $this->regiao = $regiao;

        return $this;
    }

    /**
     * Get regiao
     *
     * @return string 
     */
    public function getRegiao()
    {
        return $this->regiao;
    }

    /**
     * Set comar
     *
     * @param string $comar
     * @return GeografiaUf
     */
    public function setComar($comar)
    {
        $this->comar = $comar;

        return $this;
    }

    /**
     * Get comar
     *
     * @return string 
     */
    public function getComar()
    {
        return $this->comar;
    }

    /**
     * Set pais
     *
     * @param \AppBundle\Entity\GeografiaPais $pais
     * @return GeografiaUf
     */
    public function setPais(\AppBundle\Entity\GeografiaPais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \AppBundle\Entity\GeografiaPais 
     */
    public function getPais()
    {
        return $this->pais;
    }
     public function __toString() {
        return $this->nome;
    }
}

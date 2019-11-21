<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaFatores
 *
 * @ORM\Table(name="taxonomia_fatores", uniqueConstraints={@ORM\UniqueConstraint(name="nome", columns={"nome"}), @ORM\UniqueConstraint(name="nome_codigo", columns={"nome_codigo"})})
 * @ORM\Entity
 */
class TaxonomiaFatores
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
     * @ORM\Column(name="area", type="string", length=20, nullable=false)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="aspecto", type="string", length=20, nullable=false)
     */
    private $aspecto;

    /**
     * @var string
     *
     * @ORM\Column(name="condicionante", type="string", length=50, nullable=false)
     */
    private $condicionante;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_codigo", type="string", length=10, nullable=false)
     */
    private $nomeCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="area_icao", type="string", length=20, nullable=false)
     */
    private $areaIcao;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_icao", type="string", length=50, nullable=false)
     */
    private $nomeIcao;



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
     * Set area
     *
     * @param string $area
     * @return TaxonomiaFatores
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set aspecto
     *
     * @param string $aspecto
     * @return TaxonomiaFatores
     */
    public function setAspecto($aspecto)
    {
        $this->aspecto = $aspecto;

        return $this;
    }

    /**
     * Get aspecto
     *
     * @return string 
     */
    public function getAspecto()
    {
        return $this->aspecto;
    }

    /**
     * Set condicionante
     *
     * @param string $condicionante
     * @return TaxonomiaFatores
     */
    public function setCondicionante($condicionante)
    {
        $this->condicionante = $condicionante;

        return $this;
    }

    /**
     * Get condicionante
     *
     * @return string 
     */
    public function getCondicionante()
    {
        return $this->condicionante;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return TaxonomiaFatores
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
     * @return TaxonomiaFatores
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
     * Set areaIcao
     *
     * @param string $areaIcao
     * @return TaxonomiaFatores
     */
    public function setAreaIcao($areaIcao)
    {
        $this->areaIcao = $areaIcao;

        return $this;
    }

    /**
     * Get areaIcao
     *
     * @return string 
     */
    public function getAreaIcao()
    {
        return $this->areaIcao;
    }

    /**
     * Set nomeIcao
     *
     * @param string $nomeIcao
     * @return TaxonomiaFatores
     */
    public function setNomeIcao($nomeIcao)
    {
        $this->nomeIcao = $nomeIcao;

        return $this;
    }

    /**
     * Get nomeIcao
     *
     * @return string 
     */
    public function getNomeIcao()
    {
        return $this->nomeIcao;
    }
}

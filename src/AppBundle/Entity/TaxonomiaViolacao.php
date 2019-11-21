<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaViolacao
 *
 * @ORM\Table(name="taxonomia_violacao", uniqueConstraints={@ORM\UniqueConstraint(name="tipo", columns={"tipo"}), @ORM\UniqueConstraint(name="tipo_codigo", columns={"tipo_codigo"})})
 * @ORM\Entity
 */
class TaxonomiaViolacao
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
     * @ORM\Column(name="tipo", type="string", length=150, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_codigo", type="string", length=5, nullable=false)
     */
    private $tipoCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=100, nullable=false)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="area_codigo", type="string", length=5, nullable=false)
     */
    private $areaCodigo;



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
     * Set tipo
     *
     * @param string $tipo
     * @return TaxonomiaViolacao
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set tipoCodigo
     *
     * @param string $tipoCodigo
     * @return TaxonomiaViolacao
     */
    public function setTipoCodigo($tipoCodigo)
    {
        $this->tipoCodigo = $tipoCodigo;

        return $this;
    }

    /**
     * Get tipoCodigo
     *
     * @return string 
     */
    public function getTipoCodigo()
    {
        return $this->tipoCodigo;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return TaxonomiaViolacao
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
     * Set areaCodigo
     *
     * @param string $areaCodigo
     * @return TaxonomiaViolacao
     */
    public function setAreaCodigo($areaCodigo)
    {
        $this->areaCodigo = $areaCodigo;

        return $this;
    }

    /**
     * Get areaCodigo
     *
     * @return string 
     */
    public function getAreaCodigo()
    {
        return $this->areaCodigo;
    }
}

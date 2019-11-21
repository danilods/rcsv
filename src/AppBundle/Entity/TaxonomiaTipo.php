<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaTipo
 *
 * @ORM\Table(name="taxonomia_tipo", uniqueConstraints={@ORM\UniqueConstraint(name="tipo", columns={"tipo"}), @ORM\UniqueConstraint(name="tipo_codigo", columns={"tipo_codigo"})})
 * @ORM\Entity
 */
class TaxonomiaTipo
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
     * @ORM\Column(name="tipo_icao", type="string", length=150, nullable=false)
     */
    private $tipoIcao;



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
     * @return TaxonomiaTipo
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
     * @return TaxonomiaTipo
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
     * Set tipoIcao
     *
     * @param string $tipoIcao
     * @return TaxonomiaTipo
     */
    public function setTipoIcao($tipoIcao)
    {
        $this->tipoIcao = $tipoIcao;

        return $this;
    }

    /**
     * Get tipoIcao
     *
     * @return string 
     */
    public function getTipoIcao()
    {
        return $this->tipoIcao;
    }
}

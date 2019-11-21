<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaPeriodoDia
 *
 * @ORM\Table(name="rcsv_taxonomia_periodo_dia")
 * @ORM\Entity
 */
class RcsvTaxonomiaPeriodoDia
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
     * @ORM\Column(name="periodo", type="string", length=255, nullable=true)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255, nullable=true)
     */
    private $descricao;

    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

   
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    
    public function getPeriodo()
    {
        return $this->periodo;
    }

    
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

   
     public function __toString() {
        return $this->periodo;
    }
}

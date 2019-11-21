<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaConsequenciaOcorrencia
 *
 * @ORM\Table(name="rcsv_taxonomia_consequencia_ocorrencia")
 * @ORM\Entity
 */
class RcsvTaxonomiaConsequenciaOcorrencia
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
     * @ORM\Column(name="nome_consequencia", type="string", length=100, nullable=true)
     */
    private $nomeConsequencia;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_consequencia", type="string", length=100, nullable=true)
     */
    private $descricaoConsequencia;



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
     * Set nomeConsequencia
     *
     * @param string $nomeConsequencia
     * @return RcsvTaxonomiaConsequenciaOcorrencia
     */
    public function setNomeConsequencia($nomeConsequencia)
    {
        $this->nomeConsequencia = $nomeConsequencia;

        return $this;
    }

    /**
     * Get nomeConsequencia
     *
     * @return string 
     */
    public function getNomeConsequencia()
    {
        return $this->nomeConsequencia;
    }

    /**
     * Set descricaoConsequencia
     *
     * @param string $descricaoConsequencia
     * @return RcsvTaxonomiaConsequenciaOcorrencia
     */
    public function setDescricaoConsequencia($descricaoConsequencia)
    {
        $this->descricaoConsequencia = $descricaoConsequencia;

        return $this;
    }

    /**
     * Get descricaoConsequencia
     *
     * @return string 
     */
    public function getDescricaoConsequencia()
    {
        return $this->descricaoConsequencia;
    }
    
     public function __toString() {
        return $this->nomeConsequencia.'';
    }
}

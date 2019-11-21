<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaCondicoesMeteorologicas
 *
 * @ORM\Table(name="rcsv_taxonomia_condicoes_meteorologicas")
 * @ORM\Entity
 */
class RcsvTaxonomiaCondicoesMeteorologicas
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
     * @ORM\Column(name="condicao_tempo", type="string", length=255, nullable=true)
     */
    private $condicaoTempo;

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

   
    public function setCondicaoTempo($condicaoTempo)
    {
        $this->condicaoTempo = $condicaoTempo;

        return $this;
    }

    
    public function getCondicaoTempo()
    {
        return $this->condicaoTempo;
    }

    
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

   
     public function __toString() {
        return $this->condicaoTempo;
    }
}

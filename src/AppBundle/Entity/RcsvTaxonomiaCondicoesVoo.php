<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaClassificacao
 *
 * @ORM\Table(name="rcsv_taxonomia_condicoes_voo")
 * @ORM\Entity
 */
class RcsvTaxonomiaCondicoesVoo
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
     * @ORM\Column(name="condicao_voo", type="string", length=255, nullable=true)
     */
    private $condicaoVoo;

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

   
    public function setCondicaoVoo($condicaoVoo)
    {
        $this->condicaoVoo = $condicaoVoo;

        return $this;
    }

    
    public function getCondicaoVoo()
    {
        return $this->periodo;
    }

    
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

   
     public function __toString() {
        return $this->condicaoVoo;
    }
}

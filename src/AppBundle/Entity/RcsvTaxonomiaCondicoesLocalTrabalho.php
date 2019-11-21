<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaCondicoesLocalTrabalho
 *
 * @ORM\Table(name="rcsv_taxonomia_condicoes_local_trabalho")
 * @ORM\Entity
 */
class RcsvTaxonomiaCondicoesLocalTrabalho
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
     * @ORM\Column(name="condicao_trabalho", type="string", length=255, nullable=true)
     */
    private $condicaoLocalTrabalho;

    

    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

   
    public function setCondicaoLocalTrabalho($condicaoLocalTrabalho)
    {
        $this->condicaoLocalTrabalho = $condicaoLocalTrabalho;

        return $this;
    }

    
    public function getCondicaoLocalTrabalho()
    {
        return $this->condicaoLocalTrabalho;
    }

    
  
   
     public function __toString() {
        return $this->condicaoLocalTrabalho;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaEfeitovoo
 *
 * @ORM\Table(name="taxonomia_efeitovoo")
 * @ORM\Entity
 */
class TaxonomiaEfeitovoo
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
     * @ORM\Column(name="nome_efeito", type="string", length=100, nullable=true)
     */
    private $nomeEfeito;



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
     * Set nomeEfeito
     *
     * @param string $nomeEfeito
     * @return TaxonomiaEfeitovoo
     */
    public function setNomeEfeito($nomeEfeito)
    {
        $this->nomeEfeito = $nomeEfeito;

        return $this;
    }

    /**
     * Get nomeEfeito
     *
     * @return string 
     */
    public function getNomeEfeito()
    {
        return $this->nomeEfeito;
    }
    
     public function __toString() {
        return $this->nomeEfeito;
    }
}

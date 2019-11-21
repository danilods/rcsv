<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaTipoEvento
 *
 * @ORM\Table(name="taxonomia_tipo_evento")
 * @ORM\Entity
 */
class TaxonomiaTipoEvento
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
     * @ORM\Column(name="nome_taxonomia", type="string", length=150, nullable=true)
     */
    private $nomeTaxonomia;



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
     * Set nomeTaxonomia
     *
     * @param string $nomeTaxonomia
     * @return TaxonomiaTipoEvento
     */
    public function setNomeTaxonomia($nomeTaxonomia)
    {
        $this->nomeTaxonomia = $nomeTaxonomia;

        return $this;
    }

    /**
     * Get nomeTaxonomia
     *
     * @return string 
     */
    public function getNomeTaxonomia()
    {
        return $this->nomeTaxonomia;
    }
}

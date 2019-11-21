<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaPartesAeronave
 *
 * @ORM\Table(name="taxonomia_partes_aeronave")
 * @ORM\Entity
 */
class TaxonomiaPartesAeronave
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
     * @ORM\Column(name="nome_parte_aeronave", type="string", length=100, nullable=true)
     */
    private $nomeParteAeronave;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_parte_aeronave", type="string", length=100, nullable=true)
     */
    private $descricaoParteAeronave;



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
     * Set nomeParteAeronave
     *
     * @param string $nomeParteAeronave
     * @return TaxonomiaPartesAeronave
     */
    public function setNomeParteAeronave($nomeParteAeronave)
    {
        $this->nomeParteAeronave = $nomeParteAeronave;

        return $this;
    }

    /**
     * Get nomeParteAeronave
     *
     * @return string 
     */
    public function getNomeParteAeronave()
    {
        return $this->nomeParteAeronave;
    }

    /**
     * Set descricaoParteAeronave
     *
     * @param string $descricaoParteAeronave
     * @return TaxonomiaPartesAeronave
     */
    public function setDescricaoParteAeronave($descricaoParteAeronave)
    {
        $this->descricaoParteAeronave = $descricaoParteAeronave;

        return $this;
    }

    /**
     * Get descricaoParteAeronave
     *
     * @return string 
     */
    public function getDescricaoParteAeronave()
    {
        return $this->descricaoParteAeronave;
    }
}

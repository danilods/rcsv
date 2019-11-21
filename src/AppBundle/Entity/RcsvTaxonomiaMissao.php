<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaMissao
 *
 * @ORM\Table(name="rcsv_taxonomia_missao")
 * @ORM\Entity
 */
class RcsvTaxonomiaMissao
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
     * @ORM\Column(name="tipo_missao", type="string", length=100, nullable=true)
     */
    private $tipoMissao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_missao", type="string", length=100, nullable=true)
     */
    private $descricaoMissao;


	
	 /**
     * @var \RcsvMissaoTipo
     *
     * @ORM\ManyToOne(targetEntity="RcsvMissaoTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="missao_tipo_id", referencedColumnName="id")
     * })
     */
    private $missaoTipoId;
	

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
     * Set tipoMissao
     *
     * @param string $tipoMissao
     * @return RcsvTaxonomiaMissao
     */
    public function setTipoMissao($tipoMissao)
    {
        $this->tipoMissao = $tipoMissao;

        return $this;
    }

    /**
     * Get tipoMissao
     *
     * @return string 
     */
    public function getTipoMissao()
    {
        return $this->tipoMissao;
    }

    /**
     * Set descricaoMissao
     *
     * @param string $descricaoMissao
     * @return RcsvTaxonomiaMissao
     */
    public function setDescricaoMissao($descricaoMissao)
    {
        $this->descricaoMissao = $descricaoMissao;

        return $this;
    }
	
	
	 public function setMissaoTipoId(\AppBundle\Entity\RcsvMissaoTipo $missaoTipoId = null)
    {
        $this->missaoTipoId = $missaoTipoId;

        return $this;
    }
	
	 public function getMissaoTipoId()
    { 
		return	$this->missaoTipoId;
    }

    /**
     * Get descricaoMissao
     *
     * @return string 
     */
    public function getDescricaoMissao()
    {
        return $this->descricaoMissao;
    }
     public function __toString() {
        return $this->tipoMissao." - ".$this->missaoTipoId;
    }
}

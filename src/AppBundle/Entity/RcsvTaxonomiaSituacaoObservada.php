<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaSituacaoObservada
 *
 * @ORM\Table(name="rcsv_taxonomia_situacao_observada")
 * @ORM\Entity
 */
class RcsvTaxonomiaSituacaoObservada
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
     * @ORM\Column(name="nome_situacao", type="string", length=100, nullable=true)
     */
    private $nomeSituacao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_situacao", type="string", length=100, nullable=true)
     */
    private $descricaoSituacao;
	
	
	 /**
     * @var \RcsvTaxonomiaTipoSituacaoObservada
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaTipoSituacaoObservada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacao_tipo_id", referencedColumnName="id")
     * })
     */
    private $situacaoTipoId;



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
     * Set nomeSituacao
     *
     * @param string $nomeSituacao
     * @return RcsvTaxonomiaSituacaoObservada
     */
    public function setNomeSituacao($nomeSituacao)
    {
        $this->nomeSituacao = $nomeSituacao;

        return $this;
    }

    /**
     * Get nomeSituacao
     *
     * @return string 
     */
    public function getNomeSituacao()
    {
        return $this->nomeSituacao;
    }

    /**
     * Set descricaoSituacao
     *
     * @param string $descricaoSituacao
     * @return RcsvTaxonomiaSituacaoObservada
     */
    public function setDescricaoSituacao($descricaoSituacao)
    {
        $this->descricaoSituacao = $descricaoSituacao;

        return $this;
    }

    /**
     * Get descricaoSituacao
     *
     * @return string 
     */
    public function getDescricaoSituacao()
    {
        return $this->descricaoSituacao;
    }
    
    
	
	
	 public function setSituacaoTipoId(\AppBundle\Entity\RcsvTaxonomiaTipoSituacaoObservada $situacaoTipoId = null)
    {
        $this->situacaoTipoId = $situacaoTipoId;

        return $this;
    }
	
	 public function getSituacaoTipoId()
    { 
		return	$this->situacaoTipoId;
    }
	
	 public function __toString() {
        return $this->nomeSituacao.'';
    }
	
	 
}

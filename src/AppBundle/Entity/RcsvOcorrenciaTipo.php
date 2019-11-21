<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvOcorrenciaTipo
 *
 * @ORM\Table(name="rcsv_ocorrencia_tipo", indexes={@ORM\Index(name="fk_ocorrencia_aeronave_rcsv_ocorrencia_rcsv1_idx", columns={"ocorrencia_rcsv_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_rcsv_aeronave_geral1_idx", columns={"aeronave_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_rcsv_aeronave_categoria1_idx", columns={"aeronave_categoria_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_rcsv_taxonomia_fasevoo1_idx", columns={"fasevoo_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_rcsv_taxonomia_missao1_idx", columns={"missao_id"}), @ORM\Index(name="fk_ocorrencia_geral_rcsv_taxonomia_situacao_observada1_idx", columns={"situacao_observada_id"}), @ORM\Index(name="fk_ocorrencia_geral_rcsv_taxonomia_consequencia_ocorrencia1_idx", columns={"consequencia_ocorrencia_id"})})
 * @ORM\Entity
 */
class RcsvOcorrenciaTipo
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
     * @ORM\Column(name="regra_de_voo", type="string", length=45, nullable=true)
     */
    private $regraDeVoo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes", type="text", length=65535, nullable=true)
     */
    private $observacoes;

    /**
     * @var \AeronaveCategoria
     *
     * @ORM\ManyToOne(targetEntity="AeronaveCategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aeronave_categoria_id", referencedColumnName="id")
     * })
     */
    private $aeronaveCategoria;

    /**
     * @var \AeronaveGeral
     *
     * @ORM\ManyToOne(targetEntity="AeronaveGeral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aeronave_id", referencedColumnName="id")
     * })
     */
    private $aeronave;
	
	
	 /**
     * @var string
     *
     * @ORM\Column(name="matricula_extra", type="text", length=10, nullable=true)
     */
    private $matriculaExtra;
	

    /**
     * @var \RcsvOcorrencia
     *
     * @ORM\ManyToOne(targetEntity="RcsvOcorrencia", inversedBy="ocorrenciaTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_rcsv_id", referencedColumnName="id")
     * })
     */ 
    private $ocorrenciaRcsv;

    /**
     * @var \TaxonomiaFasevoo
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaFasevoo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fasevoo_id", referencedColumnName="id")
     * })
     */
    private $fasevoo;

    /**
     * @var \RcsvTaxonomiaMissao
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaMissao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="missao_id", referencedColumnName="id")
     * })
     */
    private $missao;

    /**
     * @var \RcsvTaxonomiaConsequenciaOcorrencia
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaConsequenciaOcorrencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="consequencia_ocorrencia_id", referencedColumnName="id")
     * })
     */
    private $consequenciaOcorrencia;

    /**
     * @var \RcsvTaxonomiaSituacaoObservada
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaSituacaoObservada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacao_observada_id", referencedColumnName="id")
     * })
     */
    private $situacaoObservada;
	
	
	
	/**
     * @var \RcsvTaxonomiaPeriodoDia
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaPeriodoDia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periodo_dia_id", referencedColumnName="id")
     * })
     */
    private $periodoDia;
	
	
	/**
     * @var \RcsvTaxonomiaCondicoesVoo
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaCondicoesVoo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condicao_voo_id", referencedColumnName="id")
     * })
     */
    private $condicaoVoo;
	
	
	/**
     * @var \RcsvTaxonomiaCondicoesMeteorologicas
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaCondicoesMeteorologicas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condicao_meteorologia_id", referencedColumnName="id")
     * })
     */
    private $condicaoMeteorologica;
	
	
	/**
     * @var \RcsvTaxonomiaCondicoesLocalTrabalho
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaCondicoesLocalTrabalho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condicao_trabalho_id", referencedColumnName="id")
     * })
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

    /**
     * Set regraDeVoo
     *
     * @param string $regraDeVoo
     * @return RcsvOcorrenciaTipo
     */
    public function setRegraDeVoo($regraDeVoo)
    {
        $this->regraDeVoo = $regraDeVoo;

        return $this;
    }

    /**
     * Get regraDeVoo
     *
     * @return string 
     */
    public function getRegraDeVoo()
    {
        return $this->regraDeVoo;
    }

    /**
     * Set observacoes
     *
     * @param string $observacoes
     * @return RcsvOcorrenciaTipo
     */
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;

        return $this;
    }
	
	
	 /**
     * Set matriculaExtra
     *
     * @param string $matriculaExtra
     * @return RcsvOcorrenciaTipo
     */
    public function setMatriculaExtra($matriculaExtra)
    {
        $this->matriculaExtra = $matriculaExtra;

        return $this;
    }
	
	
	 /**
     * Get matriculaExtra
     *
     * @return string 
     */
    public function getMatriculaExtra()
    {
        return $this->matriculaExtra;
    }
	

    /**
     * Get observacoes
     *
     * @return string 
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * Set aeronaveCategoria
     *
     * @param \AppBundle\Entity\AeronaveCategoria $aeronaveCategoria
     * @return RcsvOcorrenciaTipo
     */
    public function setAeronaveCategoria(\AppBundle\Entity\AeronaveCategoria $aeronaveCategoria = null)
    {
        $this->aeronaveCategoria = $aeronaveCategoria;

        return $this;
    }

    /**
     * Get aeronaveCategoria
     *
     * @return \AppBundle\Entity\AeronaveCategoria 
     */
    public function getAeronaveCategoria()
    {
        return $this->aeronaveCategoria;
    }

    /**
     * Set aeronave
     *
     * @param \AppBundle\Entity\AeronaveGeral $aeronave
     * @return RcsvOcorrenciaTipo
     */
    public function setAeronave(\AppBundle\Entity\AeronaveGeral $aeronave = null)
    {
        $this->aeronave = $aeronave;

        return $this;
    }

    /**
     * Get aeronave
     *
     * @return \AppBundle\Entity\AeronaveGeral 
     */
    public function getAeronave()
    {
        return $this->aeronave;
    }

    /**
     * Set ocorrenciaRcsv
     *
     * @param \AppBundle\Entity\RcsvOcorrencia $ocorrenciaRcsv
     * @return RcsvOcorrenciaTipo
     */
    public function setOcorrenciaRcsv(\AppBundle\Entity\RcsvOcorrencia $ocorrenciaRcsv = null)
    {
        $this->ocorrenciaRcsv = $ocorrenciaRcsv;

        return $this;
    }

    /**
     * Get ocorrenciaRcsv
     *
     * @return \AppBundle\Entity\RcsvOcorrencia 
     */
    public function getOcorrenciaRcsv()
    {
        return $this->ocorrenciaRcsv;
    }

    /**
     * Set fasevoo
     *
     * @param \AppBundle\Entity\TaxonomiaFasevoo $fasevoo
     * @return RcsvOcorrenciaTipo
     */
    public function setFasevoo(\AppBundle\Entity\TaxonomiaFasevoo $fasevoo = null)
    {
        $this->fasevoo = $fasevoo;

        return $this;
    }

    /**
     * Get fasevoo
     *
     * @return \AppBundle\Entity\TaxonomiaFasevoo 
     */
    public function getFasevoo()
    {
        return $this->fasevoo;
    }

    /**
     * Set missao
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaMissao $missao
     * @return RcsvOcorrenciaTipo
     */
    public function setMissao(\AppBundle\Entity\RcsvTaxonomiaMissao $missao = null)
    {
        $this->missao = $missao;

        return $this;
    }

    /**
     * Get missao
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaMissao 
     */
    public function getMissao()
    {
        return $this->missao;
    }

    /**
     * Set consequenciaOcorrencia
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaConsequenciaOcorrencia $consequenciaOcorrencia
     * @return RcsvOcorrenciaTipo
     */
    public function setConsequenciaOcorrencia(\AppBundle\Entity\RcsvTaxonomiaConsequenciaOcorrencia $consequenciaOcorrencia = null)
    {
        $this->consequenciaOcorrencia = $consequenciaOcorrencia;

        return $this;
    }

    /**
     * Get consequenciaOcorrencia
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaConsequenciaOcorrencia 
     */
    public function getConsequenciaOcorrencia()
    {
        return $this->consequenciaOcorrencia;
    }

    /**
     * Set situacaoObservada
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaSituacaoObservada $situacaoObservada
     * @return RcsvOcorrenciaTipo
     */
    public function setSituacaoObservada(\AppBundle\Entity\RcsvTaxonomiaSituacaoObservada $situacaoObservada = null)
    {
        $this->situacaoObservada = $situacaoObservada;

        return $this;
    }

    /**
     * Get situacaoObservada
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaSituacaoObservada 
     */
    public function getSituacaoObservada()
    {
        return $this->situacaoObservada;
    }
    
  

    /**
     * Set periodoDia
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaPeriodoDia
     $periodoDia
     *
     * @return RcsvOcorrenciaTipo
     */
    public function setPeriodoDia(\AppBundle\Entity\RcsvTaxonomiaPeriodoDia
     $periodoDia = null)
    {
        $this->periodoDia = $periodoDia;

        return $this;
    }

    /**
     * Get periodoDia
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaPeriodoDia

     */
    public function getPeriodoDia()
    {
        return $this->periodoDia;
    }

    /**
     * Set condicaoVoo
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaCondicoesVoo
     $condicaoVoo
     *
     * @return RcsvOcorrenciaTipo
     */
    public function setCondicaoVoo(\AppBundle\Entity\RcsvTaxonomiaCondicoesVoo
     $condicaoVoo = null)
    {
        $this->condicaoVoo = $condicaoVoo;

        return $this;
    }

    /**
     * Get condicaoVoo
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaCondicoesVoo

     */
    public function getCondicaoVoo()
    {
        return $this->condicaoVoo;
    }

    /**
     * Set condicaoMeteorologica
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaCondicoesMeteorologicas
     $condicaoMeteorologica
     *
     * @return RcsvOcorrenciaTipo
     */
    public function setCondicaoMeteorologica(\AppBundle\Entity\RcsvTaxonomiaCondicoesMeteorologicas
     $condicaoMeteorologica = null)
    {
        $this->condicaoMeteorologica = $condicaoMeteorologica;

        return $this;
    }

    /**
     * Get condicaoMeteorologica
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaCondicoesMeteorologicas

     */
    public function getCondicaoMeteorologica()
    {
        return $this->condicaoMeteorologica;
    }

    /**
     * Set condicaoLocalTrabalho
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaCondicoesLocalTrabalho
     $condicaoLocalTrabalho
     *
     * @return RcsvOcorrenciaTipo
     */
    public function setCondicaoLocalTrabalho(\AppBundle\Entity\RcsvTaxonomiaCondicoesLocalTrabalho
     $condicaoLocalTrabalho = null)
    {
        $this->condicaoLocalTrabalho = $condicaoLocalTrabalho;

        return $this;
    }

    /**
     * Get condicaoLocalTrabalho
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaCondicoesLocalTrabalho

     */
    public function getCondicaoLocalTrabalho()
    {
        return $this->condicaoLocalTrabalho;
    }
}

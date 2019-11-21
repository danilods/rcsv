<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaOcorrenciaAeronave
 *
 * @ORM\Table(name="fauna_ocorrencia_aeronave", indexes={@ORM\Index(name="fk_ocorrencia_aeronave_fauna_ocorrencia_fauna1_idx", columns={"ocorrencia_fauna_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_fauna_aeronave_operador1_idx", columns={"operador_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_fauna_aeronave_geral1_idx", columns={"aeronave_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_fauna_aeronave_categoria1_idx", columns={"aeronave_categoria_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_fauna_taxonomia_fasevoo1_idx", columns={"fasevoo_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_fauna_taxonomia_tripulacao_tipo_aler_idx", columns={"tipo_alerta_id"})})
 * @ORM\Entity
 */
class FaunaOcorrenciaAeronave
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
     * @ORM\Column(name="altura", type="string", length=15, nullable=true)
     */
    private $altura;

    /**
     * @var string
     *
     * @ORM\Column(name="velocidade", type="string", length=15, nullable=true)
     */
    private $velocidade;

    /**
     * @var string
     *
     * @ORM\Column(name="custo_indireto", type="string", length=45, nullable=true)
     */
    private $custoIndireto;

    /**
     * @var string
     *
     * @ORM\Column(name="custo_direto", type="string", length=45, nullable=true)
     */
    private $custoDireto;

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
     * @var \AeronaveOperador
     *
     * @ORM\ManyToOne(targetEntity="AeronaveOperador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operador_id", referencedColumnName="id")
     * })
     */
    private $operador;

    /**
     * @var \FaunaOcorrenciaGeral
     *
     * @ORM\ManyToOne(targetEntity="FaunaOcorrenciaGeral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_fauna_id", referencedColumnName="id")
     * })
     */
    private $ocorrenciaFauna;

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
     * @var \TaxonomiaTripulacaoTipoAlerta
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaTripulacaoTipoAlerta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_alerta_id", referencedColumnName="id")
     * })
     */
    private $tipoAlerta;



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
     * Set altura
     *
     * @param string $altura
     * @return FaunaOcorrenciaAeronave
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return string 
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set velocidade
     *
     * @param string $velocidade
     * @return FaunaOcorrenciaAeronave
     */
    public function setVelocidade($velocidade)
    {
        $this->velocidade = $velocidade;

        return $this;
    }

    /**
     * Get velocidade
     *
     * @return string 
     */
    public function getVelocidade()
    {
        return $this->velocidade;
    }

    /**
     * Set custoIndireto
     *
     * @param string $custoIndireto
     * @return FaunaOcorrenciaAeronave
     */
    public function setCustoIndireto($custoIndireto)
    {
        $this->custoIndireto = $custoIndireto;

        return $this;
    }

    /**
     * Get custoIndireto
     *
     * @return string 
     */
    public function getCustoIndireto()
    {
        return $this->custoIndireto;
    }

    /**
     * Set custoDireto
     *
     * @param string $custoDireto
     * @return FaunaOcorrenciaAeronave
     */
    public function setCustoDireto($custoDireto)
    {
        $this->custoDireto = $custoDireto;

        return $this;
    }

    /**
     * Get custoDireto
     *
     * @return string 
     */
    public function getCustoDireto()
    {
        return $this->custoDireto;
    }

    /**
     * Set aeronaveCategoria
     *
     * @param \AppBundle\Entity\AeronaveCategoria $aeronaveCategoria
     * @return FaunaOcorrenciaAeronave
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
     * @return FaunaOcorrenciaAeronave
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
     * Set operador
     *
     * @param \AppBundle\Entity\AeronaveOperador $operador
     * @return FaunaOcorrenciaAeronave
     */
    public function setOperador(\AppBundle\Entity\AeronaveOperador $operador = null)
    {
        $this->operador = $operador;

        return $this;
    }

    /**
     * Get operador
     *
     * @return \AppBundle\Entity\AeronaveOperador 
     */
    public function getOperador()
    {
        return $this->operador;
    }

    /**
     * Set ocorrenciaFauna
     *
     * @param \AppBundle\Entity\FaunaOcorrenciaGeral $ocorrenciaFauna
     * @return FaunaOcorrenciaAeronave
     */
    public function setOcorrenciaFauna(\AppBundle\Entity\FaunaOcorrenciaGeral $ocorrenciaFauna = null)
    {
        $this->ocorrenciaFauna = $ocorrenciaFauna;

        return $this;
    }

    /**
     * Get ocorrenciaFauna
     *
     * @return \AppBundle\Entity\FaunaOcorrenciaGeral 
     */
    public function getOcorrenciaFauna()
    {
        return $this->ocorrenciaFauna;
    }

    /**
     * Set fasevoo
     *
     * @param \AppBundle\Entity\TaxonomiaFasevoo $fasevoo
     * @return FaunaOcorrenciaAeronave
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
     * Set tipoAlerta
     *
     * @param \AppBundle\Entity\TaxonomiaTripulacaoTipoAlerta $tipoAlerta
     * @return FaunaOcorrenciaAeronave
     */
    public function setTipoAlerta(\AppBundle\Entity\TaxonomiaTripulacaoTipoAlerta $tipoAlerta = null)
    {
        $this->tipoAlerta = $tipoAlerta;

        return $this;
    }

    /**
     * Get tipoAlerta
     *
     * @return \AppBundle\Entity\TaxonomiaTripulacaoTipoAlerta 
     */
    public function getTipoAlerta()
    {
        return $this->tipoAlerta;
    }
}

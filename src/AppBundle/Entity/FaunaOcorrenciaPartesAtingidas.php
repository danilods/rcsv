<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaOcorrenciaPartesAtingidas
 *
 * @ORM\Table(name="fauna_ocorrencia_partes_atingidas", indexes={@ORM\Index(name="fk_ocorrencia_fauna_partes_atingidas_ocorrencia_aeronave_fa_idx", columns={"ocorrencia_aeronave_id"}), @ORM\Index(name="fk_ocorrencia_fauna_partes_atingidas_taxonomia_partes_aeron_idx", columns={"partes_aeronave_id"})})
 * @ORM\Entity
 */
class FaunaOcorrenciaPartesAtingidas
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
     * @ORM\Column(name="identificador_parte", type="string", length=45, nullable=true)
     */
    private $identificadorParte;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao_parte_atingida", type="string", length=5, nullable=true)
     */
    private $situacaoParteAtingida;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao_parte_danificada", type="string", length=5, nullable=true)
     */
    private $situacaoParteDanificada;

    /**
     * @var \FaunaOcorrenciaAeronave
     *
     * @ORM\ManyToOne(targetEntity="FaunaOcorrenciaAeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_aeronave_id", referencedColumnName="id")
     * })
     */
    private $ocorrenciaAeronave;

    /**
     * @var \TaxonomiaPartesAeronave
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaPartesAeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partes_aeronave_id", referencedColumnName="id")
     * })
     */
    private $partesAeronave;



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
     * Set identificadorParte
     *
     * @param string $identificadorParte
     * @return FaunaOcorrenciaPartesAtingidas
     */
    public function setIdentificadorParte($identificadorParte)
    {
        $this->identificadorParte = $identificadorParte;

        return $this;
    }

    /**
     * Get identificadorParte
     *
     * @return string 
     */
    public function getIdentificadorParte()
    {
        return $this->identificadorParte;
    }

    /**
     * Set situacaoParteAtingida
     *
     * @param string $situacaoParteAtingida
     * @return FaunaOcorrenciaPartesAtingidas
     */
    public function setSituacaoParteAtingida($situacaoParteAtingida)
    {
        $this->situacaoParteAtingida = $situacaoParteAtingida;

        return $this;
    }

    /**
     * Get situacaoParteAtingida
     *
     * @return string 
     */
    public function getSituacaoParteAtingida()
    {
        return $this->situacaoParteAtingida;
    }

    /**
     * Set situacaoParteDanificada
     *
     * @param string $situacaoParteDanificada
     * @return FaunaOcorrenciaPartesAtingidas
     */
    public function setSituacaoParteDanificada($situacaoParteDanificada)
    {
        $this->situacaoParteDanificada = $situacaoParteDanificada;

        return $this;
    }

    /**
     * Get situacaoParteDanificada
     *
     * @return string 
     */
    public function getSituacaoParteDanificada()
    {
        return $this->situacaoParteDanificada;
    }

    /**
     * Set ocorrenciaAeronave
     *
     * @param \AppBundle\Entity\FaunaOcorrenciaAeronave $ocorrenciaAeronave
     * @return FaunaOcorrenciaPartesAtingidas
     */
    public function setOcorrenciaAeronave(\AppBundle\Entity\FaunaOcorrenciaAeronave $ocorrenciaAeronave = null)
    {
        $this->ocorrenciaAeronave = $ocorrenciaAeronave;

        return $this;
    }

    /**
     * Get ocorrenciaAeronave
     *
     * @return \AppBundle\Entity\FaunaOcorrenciaAeronave 
     */
    public function getOcorrenciaAeronave()
    {
        return $this->ocorrenciaAeronave;
    }

    /**
     * Set partesAeronave
     *
     * @param \AppBundle\Entity\TaxonomiaPartesAeronave $partesAeronave
     * @return FaunaOcorrenciaPartesAtingidas
     */
    public function setPartesAeronave(\AppBundle\Entity\TaxonomiaPartesAeronave $partesAeronave = null)
    {
        $this->partesAeronave = $partesAeronave;

        return $this;
    }

    /**
     * Get partesAeronave
     *
     * @return \AppBundle\Entity\TaxonomiaPartesAeronave 
     */
    public function getPartesAeronave()
    {
        return $this->partesAeronave;
    }
}

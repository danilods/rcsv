<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalaoOcorrencia
 *
 * @ORM\Table(name="balao_ocorrencia", indexes={@ORM\Index(name="fk_ocorrencia_aerodromo_geral1_idx", columns={"aerodromo_id"}), @ORM\Index(name="fk_ocorrencia_taxonomia_tipo_evento1_idx", columns={"tipo_evento_id"}), @ORM\Index(name="fk_balao_ocorrencia_geografia_cidade1_idx", columns={"cidade_id"})})
 * @ORM\Entity
 */
class BalaoOcorrencia
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
     * @ORM\Column(name="tipo_ocorrencia", type="string", length=45, nullable=true)
     */
    private $tipoOcorrencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ocorrencia", type="date", nullable=true)
     */
    private $dataOcorrencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_local", type="time", nullable=true)
     */
    private $horaLocal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_utc", type="time", nullable=true)
     */
    private $horaUtc;

    /**
     * @var string
     *
     * @ORM\Column(name="reporte_atc_afis", type="string", length=100, nullable=true)
     */
    private $reporteAtcAfis;

    /**
     * @var string
     *
     * @ORM\Column(name="condicoes_ceu", type="string", length=100, nullable=true)
     */
    private $condicoesCeu;

    /**
     * @var string
     *
     * @ORM\Column(name="historico", type="text", length=65535, nullable=true)
     */
    private $historico;

    /**
     * @var \GeografiaCidade
     *
     * @ORM\ManyToOne(targetEntity="GeografiaCidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
     * })
     */
    private $cidade;

    /**
     * @var \AerodromoGeral
     *
     * @ORM\ManyToOne(targetEntity="AerodromoGeral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aerodromo_id", referencedColumnName="id")
     * })
     */
    private $aerodromo;

    /**
     * @var \TaxonomiaTipoEvento
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaTipoEvento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_evento_id", referencedColumnName="id")
     * })
     */
    private $tipoEvento;



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
     * Set tipoOcorrencia
     *
     * @param string $tipoOcorrencia
     * @return BalaoOcorrencia
     */
    public function setTipoOcorrencia($tipoOcorrencia)
    {
        $this->tipoOcorrencia = $tipoOcorrencia;

        return $this;
    }

    /**
     * Get tipoOcorrencia
     *
     * @return string 
     */
    public function getTipoOcorrencia()
    {
        return $this->tipoOcorrencia;
    }

    /**
     * Set dataOcorrencia
     *
     * @param \DateTime $dataOcorrencia
     * @return BalaoOcorrencia
     */
    public function setDataOcorrencia($dataOcorrencia)
    {
        $this->dataOcorrencia = $dataOcorrencia;

        return $this;
    }

    /**
     * Get dataOcorrencia
     *
     * @return \DateTime 
     */
    public function getDataOcorrencia()
    {
        return $this->dataOcorrencia;
    }

    /**
     * Set horaLocal
     *
     * @param \DateTime $horaLocal
     * @return BalaoOcorrencia
     */
    public function setHoraLocal($horaLocal)
    {
        $this->horaLocal = $horaLocal;

        return $this;
    }

    /**
     * Get horaLocal
     *
     * @return \DateTime 
     */
    public function getHoraLocal()
    {
        return $this->horaLocal;
    }

    /**
     * Set horaUtc
     *
     * @param \DateTime $horaUtc
     * @return BalaoOcorrencia
     */
    public function setHoraUtc($horaUtc)
    {
        $this->horaUtc = $horaUtc;

        return $this;
    }

    /**
     * Get horaUtc
     *
     * @return \DateTime 
     */
    public function getHoraUtc()
    {
        return $this->horaUtc;
    }

    /**
     * Set reporteAtcAfis
     *
     * @param string $reporteAtcAfis
     * @return BalaoOcorrencia
     */
    public function setReporteAtcAfis($reporteAtcAfis)
    {
        $this->reporteAtcAfis = $reporteAtcAfis;

        return $this;
    }

    /**
     * Get reporteAtcAfis
     *
     * @return string 
     */
    public function getReporteAtcAfis()
    {
        return $this->reporteAtcAfis;
    }

    /**
     * Set condicoesCeu
     *
     * @param string $condicoesCeu
     * @return BalaoOcorrencia
     */
    public function setCondicoesCeu($condicoesCeu)
    {
        $this->condicoesCeu = $condicoesCeu;

        return $this;
    }

    /**
     * Get condicoesCeu
     *
     * @return string 
     */
    public function getCondicoesCeu()
    {
        return $this->condicoesCeu;
    }

    /**
     * Set historico
     *
     * @param string $historico
     * @return BalaoOcorrencia
     */
    public function setHistorico($historico)
    {
        $this->historico = $historico;

        return $this;
    }

    /**
     * Get historico
     *
     * @return string 
     */
    public function getHistorico()
    {
        return $this->historico;
    }

    /**
     * Set cidade
     *
     * @param \AppBundle\Entity\GeografiaCidade $cidade
     * @return BalaoOcorrencia
     */
    public function setCidade(\AppBundle\Entity\GeografiaCidade $cidade = null)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return \AppBundle\Entity\GeografiaCidade 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set aerodromo
     *
     * @param \AppBundle\Entity\AerodromoGeral $aerodromo
     * @return BalaoOcorrencia
     */
    public function setAerodromo(\AppBundle\Entity\AerodromoGeral $aerodromo = null)
    {
        $this->aerodromo = $aerodromo;

        return $this;
    }

    /**
     * Get aerodromo
     *
     * @return \AppBundle\Entity\AerodromoGeral 
     */
    public function getAerodromo()
    {
        return $this->aerodromo;
    }

    /**
     * Set tipoEvento
     *
     * @param \AppBundle\Entity\TaxonomiaTipoEvento $tipoEvento
     * @return BalaoOcorrencia
     */
    public function setTipoEvento(\AppBundle\Entity\TaxonomiaTipoEvento $tipoEvento = null)
    {
        $this->tipoEvento = $tipoEvento;

        return $this;
    }

    /**
     * Get tipoEvento
     *
     * @return \AppBundle\Entity\TaxonomiaTipoEvento 
     */
    public function getTipoEvento()
    {
        return $this->tipoEvento;
    }
}

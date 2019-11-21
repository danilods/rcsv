<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaOcorrenciaGeral
 *
 * @ORM\Table(name="fauna_ocorrencia_geral", indexes={@ORM\Index(name="fk_ocorrencia_fauna_aerodromo_geral1_idx", columns={"aerodromo_id"}), @ORM\Index(name="fk_ocorrencia_fauna_taxonomia_tipo_evento1_idx", columns={"tipo_evento_id"}), @ORM\Index(name="fk_ocorrencia_fauna_geografia_cidade1_idx", columns={"cidade_id"})})
 * @ORM\Entity
 */
class FaunaOcorrenciaGeral
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
     * @ORM\Column(name="identificacao", type="string", length=100, nullable=true)
     */
    private $identificacao;

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
     * @ORM\Column(name="periodo_dia", type="string", length=50, nullable=true)
     */
    private $periodoDia;

    /**
     * @var string
     *
     * @ORM\Column(name="area_asa", type="string", length=15, nullable=true)
     */
    private $areaAsa;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=15, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=15, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="radial", type="string", length=15, nullable=true)
     */
    private $radial;

    /**
     * @var string
     *
     * @ORM\Column(name="milhas_nauticas", type="string", length=15, nullable=true)
     */
    private $milhasNauticas;

    /**
     * @var string
     *
     * @ORM\Column(name="condicao_ceu", type="string", length=50, nullable=true)
     */
    private $condicaoCeu;

    /**
     * @var string
     *
     * @ORM\Column(name="precipitacao", type="string", length=5, nullable=true)
     */
    private $precipitacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes_adicionais", type="text", length=65535, nullable=true)
     */
    private $observacoesAdicionais;

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
     * @var \GeografiaCidade
     *
     * @ORM\ManyToOne(targetEntity="GeografiaCidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
     * })
     */
    private $cidade;

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
     * Set identificacao
     *
     * @param string $identificacao
     * @return FaunaOcorrenciaGeral
     */
    public function setIdentificacao($identificacao)
    {
        $this->identificacao = $identificacao;

        return $this;
    }

    /**
     * Get identificacao
     *
     * @return string 
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    /**
     * Set horaLocal
     *
     * @param \DateTime $horaLocal
     * @return FaunaOcorrenciaGeral
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
     * @return FaunaOcorrenciaGeral
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
     * Set periodoDia
     *
     * @param string $periodoDia
     * @return FaunaOcorrenciaGeral
     */
    public function setPeriodoDia($periodoDia)
    {
        $this->periodoDia = $periodoDia;

        return $this;
    }

    /**
     * Get periodoDia
     *
     * @return string 
     */
    public function getPeriodoDia()
    {
        return $this->periodoDia;
    }

    /**
     * Set areaAsa
     *
     * @param string $areaAsa
     * @return FaunaOcorrenciaGeral
     */
    public function setAreaAsa($areaAsa)
    {
        $this->areaAsa = $areaAsa;

        return $this;
    }

    /**
     * Get areaAsa
     *
     * @return string 
     */
    public function getAreaAsa()
    {
        return $this->areaAsa;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return FaunaOcorrenciaGeral
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return FaunaOcorrenciaGeral
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set radial
     *
     * @param string $radial
     * @return FaunaOcorrenciaGeral
     */
    public function setRadial($radial)
    {
        $this->radial = $radial;

        return $this;
    }

    /**
     * Get radial
     *
     * @return string 
     */
    public function getRadial()
    {
        return $this->radial;
    }

    /**
     * Set milhasNauticas
     *
     * @param string $milhasNauticas
     * @return FaunaOcorrenciaGeral
     */
    public function setMilhasNauticas($milhasNauticas)
    {
        $this->milhasNauticas = $milhasNauticas;

        return $this;
    }

    /**
     * Get milhasNauticas
     *
     * @return string 
     */
    public function getMilhasNauticas()
    {
        return $this->milhasNauticas;
    }

    /**
     * Set condicaoCeu
     *
     * @param string $condicaoCeu
     * @return FaunaOcorrenciaGeral
     */
    public function setCondicaoCeu($condicaoCeu)
    {
        $this->condicaoCeu = $condicaoCeu;

        return $this;
    }

    /**
     * Get condicaoCeu
     *
     * @return string 
     */
    public function getCondicaoCeu()
    {
        return $this->condicaoCeu;
    }

    /**
     * Set precipitacao
     *
     * @param string $precipitacao
     * @return FaunaOcorrenciaGeral
     */
    public function setPrecipitacao($precipitacao)
    {
        $this->precipitacao = $precipitacao;

        return $this;
    }

    /**
     * Get precipitacao
     *
     * @return string 
     */
    public function getPrecipitacao()
    {
        return $this->precipitacao;
    }

    /**
     * Set observacoesAdicionais
     *
     * @param string $observacoesAdicionais
     * @return FaunaOcorrenciaGeral
     */
    public function setObservacoesAdicionais($observacoesAdicionais)
    {
        $this->observacoesAdicionais = $observacoesAdicionais;

        return $this;
    }

    /**
     * Get observacoesAdicionais
     *
     * @return string 
     */
    public function getObservacoesAdicionais()
    {
        return $this->observacoesAdicionais;
    }

    /**
     * Set aerodromo
     *
     * @param \AppBundle\Entity\AerodromoGeral $aerodromo
     * @return FaunaOcorrenciaGeral
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
     * Set cidade
     *
     * @param \AppBundle\Entity\GeografiaCidade $cidade
     * @return FaunaOcorrenciaGeral
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
     * Set tipoEvento
     *
     * @param \AppBundle\Entity\TaxonomiaTipoEvento $tipoEvento
     * @return FaunaOcorrenciaGeral
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

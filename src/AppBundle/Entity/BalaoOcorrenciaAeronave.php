<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalaoOcorrenciaAeronave
 *
 * @ORM\Table(name="balao_ocorrencia_aeronave", indexes={@ORM\Index(name="fk_ocorrencia_aeronave_ocorrencia1_idx", columns={"ocorrencia_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_aeronave_geral1_idx", columns={"aeronave_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_taxonomia_fasevoo1_idx", columns={"fasevoo_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_balao_taxonomia_efeitovoo1_idx", columns={"efeitovoo_id"}), @ORM\Index(name="fk_ocorrencia_aeronave_balao_aeronave_operador1_idx", columns={"operador_id"})})
 * @ORM\Entity
 */
class BalaoOcorrenciaAeronave
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
     * @ORM\Column(name="altitude", type="string", length=45, nullable=true)
     */
    private $altitude;

    /**
     * @var string
     *
     * @ORM\Column(name="proa_curso", type="string", length=45, nullable=true)
     */
    private $proaCurso;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=45, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=45, nullable=true)
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
     * @ORM\Column(name="distancia_fixo", type="string", length=15, nullable=true)
     */
    private $distanciaFixo;

    /**
     * @var string
     *
     * @ORM\Column(name="distancia_ponto_conhecido", type="string", length=15, nullable=true)
     */
    private $distanciaPontoConhecido;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_alerta_presencao_balao", type="string", length=50, nullable=true)
     */
    private $tipoAlertaPresencaoBalao;

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
     * @var \TaxonomiaEfeitovoo
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaEfeitovoo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="efeitovoo_id", referencedColumnName="id")
     * })
     */
    private $efeitovoo;

    /**
     * @var \BalaoOcorrencia
     *
     * @ORM\ManyToOne(targetEntity="BalaoOcorrencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_id", referencedColumnName="id")
     * })
     */
    private $ocorrencia;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set altitude
     *
     * @param string $altitude
     * @return BalaoOcorrenciaAeronave
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return string 
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set proaCurso
     *
     * @param string $proaCurso
     * @return BalaoOcorrenciaAeronave
     */
    public function setProaCurso($proaCurso)
    {
        $this->proaCurso = $proaCurso;

        return $this;
    }

    /**
     * Get proaCurso
     *
     * @return string 
     */
    public function getProaCurso()
    {
        return $this->proaCurso;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return BalaoOcorrenciaAeronave
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
     * @return BalaoOcorrenciaAeronave
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
     * @return BalaoOcorrenciaAeronave
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
     * Set distanciaFixo
     *
     * @param string $distanciaFixo
     * @return BalaoOcorrenciaAeronave
     */
    public function setDistanciaFixo($distanciaFixo)
    {
        $this->distanciaFixo = $distanciaFixo;

        return $this;
    }

    /**
     * Get distanciaFixo
     *
     * @return string 
     */
    public function getDistanciaFixo()
    {
        return $this->distanciaFixo;
    }

    /**
     * Set distanciaPontoConhecido
     *
     * @param string $distanciaPontoConhecido
     * @return BalaoOcorrenciaAeronave
     */
    public function setDistanciaPontoConhecido($distanciaPontoConhecido)
    {
        $this->distanciaPontoConhecido = $distanciaPontoConhecido;

        return $this;
    }

    /**
     * Get distanciaPontoConhecido
     *
     * @return string 
     */
    public function getDistanciaPontoConhecido()
    {
        return $this->distanciaPontoConhecido;
    }

    /**
     * Set tipoAlertaPresencaoBalao
     *
     * @param string $tipoAlertaPresencaoBalao
     * @return BalaoOcorrenciaAeronave
     */
    public function setTipoAlertaPresencaoBalao($tipoAlertaPresencaoBalao)
    {
        $this->tipoAlertaPresencaoBalao = $tipoAlertaPresencaoBalao;

        return $this;
    }

    /**
     * Get tipoAlertaPresencaoBalao
     *
     * @return string 
     */
    public function getTipoAlertaPresencaoBalao()
    {
        return $this->tipoAlertaPresencaoBalao;
    }

    /**
     * Set aeronave
     *
     * @param \AppBundle\Entity\AeronaveGeral $aeronave
     * @return BalaoOcorrenciaAeronave
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
     * @return BalaoOcorrenciaAeronave
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
     * Set efeitovoo
     *
     * @param \AppBundle\Entity\TaxonomiaEfeitovoo $efeitovoo
     * @return BalaoOcorrenciaAeronave
     */
    public function setEfeitovoo(\AppBundle\Entity\TaxonomiaEfeitovoo $efeitovoo = null)
    {
        $this->efeitovoo = $efeitovoo;

        return $this;
    }

    /**
     * Get efeitovoo
     *
     * @return \AppBundle\Entity\TaxonomiaEfeitovoo 
     */
    public function getEfeitovoo()
    {
        return $this->efeitovoo;
    }

    /**
     * Set ocorrencia
     *
     * @param \AppBundle\Entity\BalaoOcorrencia $ocorrencia
     * @return BalaoOcorrenciaAeronave
     */
    public function setOcorrencia(\AppBundle\Entity\BalaoOcorrencia $ocorrencia = null)
    {
        $this->ocorrencia = $ocorrencia;

        return $this;
    }

    /**
     * Get ocorrencia
     *
     * @return \AppBundle\Entity\BalaoOcorrencia 
     */
    public function getOcorrencia()
    {
        return $this->ocorrencia;
    }

    /**
     * Set fasevoo
     *
     * @param \AppBundle\Entity\TaxonomiaFasevoo $fasevoo
     * @return BalaoOcorrenciaAeronave
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
}

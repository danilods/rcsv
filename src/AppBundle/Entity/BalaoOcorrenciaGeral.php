<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalaoOcorrenciaGeral
 *
 * @ORM\Table(name="balao_ocorrencia_geral", indexes={@ORM\Index(name="fk_ocorrencia_balao_ocorrencia1_idx", columns={"ocorrencia_id"})})
 * @ORM\Entity
 */
class BalaoOcorrenciaGeral
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
     * @ORM\Column(name="altitude", type="string", length=15, nullable=true)
     */
    private $altitude;

    /**
     * @var string
     *
     * @ORM\Column(name="altitude_metros", type="string", length=15, nullable=true)
     */
    private $altitudeMetros;

    /**
     * @var string
     *
     * @ORM\Column(name="posicao_relativa", type="string", length=15, nullable=true)
     */
    private $posicaoRelativa;

    /**
     * @var string
     *
     * @ORM\Column(name="distancia_estimada_relativa", type="string", length=45, nullable=true)
     */
    private $distanciaEstimadaRelativa;

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
     * @ORM\Column(name="distancia_fixo", type="string", length=15, nullable=true)
     */
    private $distanciaFixo;

    /**
     * @var string
     *
     * @ORM\Column(name="distancia_ponto_conhecido", type="string", length=45, nullable=true)
     */
    private $distanciaPontoConhecido;

    /**
     * @var string
     *
     * @ORM\Column(name="sentido_deslocamento", type="string", length=45, nullable=true)
     */
    private $sentidoDeslocamento;

    /**
     * @var string
     *
     * @ORM\Column(name="tamanho_balao", type="string", length=45, nullable=true)
     */
    private $tamanhoBalao;

    /**
     * @var string
     *
     * @ORM\Column(name="balao_fogo", type="string", length=5, nullable=true)
     */
    private $balaoFogo;

    /**
     * @var string
     *
     * @ORM\Column(name="carga_suspensa", type="string", length=45, nullable=true)
     */
    private $cargaSuspensa;

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
     * @return BalaoOcorrenciaGeral
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
     * Set altitudeMetros
     *
     * @param string $altitudeMetros
     * @return BalaoOcorrenciaGeral
     */
    public function setAltitudeMetros($altitudeMetros)
    {
        $this->altitudeMetros = $altitudeMetros;

        return $this;
    }

    /**
     * Get altitudeMetros
     *
     * @return string 
     */
    public function getAltitudeMetros()
    {
        return $this->altitudeMetros;
    }

    /**
     * Set posicaoRelativa
     *
     * @param string $posicaoRelativa
     * @return BalaoOcorrenciaGeral
     */
    public function setPosicaoRelativa($posicaoRelativa)
    {
        $this->posicaoRelativa = $posicaoRelativa;

        return $this;
    }

    /**
     * Get posicaoRelativa
     *
     * @return string 
     */
    public function getPosicaoRelativa()
    {
        return $this->posicaoRelativa;
    }

    /**
     * Set distanciaEstimadaRelativa
     *
     * @param string $distanciaEstimadaRelativa
     * @return BalaoOcorrenciaGeral
     */
    public function setDistanciaEstimadaRelativa($distanciaEstimadaRelativa)
    {
        $this->distanciaEstimadaRelativa = $distanciaEstimadaRelativa;

        return $this;
    }

    /**
     * Get distanciaEstimadaRelativa
     *
     * @return string 
     */
    public function getDistanciaEstimadaRelativa()
    {
        return $this->distanciaEstimadaRelativa;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return BalaoOcorrenciaGeral
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
     * @return BalaoOcorrenciaGeral
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
     * Set distanciaFixo
     *
     * @param string $distanciaFixo
     * @return BalaoOcorrenciaGeral
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
     * @return BalaoOcorrenciaGeral
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
     * Set sentidoDeslocamento
     *
     * @param string $sentidoDeslocamento
     * @return BalaoOcorrenciaGeral
     */
    public function setSentidoDeslocamento($sentidoDeslocamento)
    {
        $this->sentidoDeslocamento = $sentidoDeslocamento;

        return $this;
    }

    /**
     * Get sentidoDeslocamento
     *
     * @return string 
     */
    public function getSentidoDeslocamento()
    {
        return $this->sentidoDeslocamento;
    }

    /**
     * Set tamanhoBalao
     *
     * @param string $tamanhoBalao
     * @return BalaoOcorrenciaGeral
     */
    public function setTamanhoBalao($tamanhoBalao)
    {
        $this->tamanhoBalao = $tamanhoBalao;

        return $this;
    }

    /**
     * Get tamanhoBalao
     *
     * @return string 
     */
    public function getTamanhoBalao()
    {
        return $this->tamanhoBalao;
    }

    /**
     * Set balaoFogo
     *
     * @param string $balaoFogo
     * @return BalaoOcorrenciaGeral
     */
    public function setBalaoFogo($balaoFogo)
    {
        $this->balaoFogo = $balaoFogo;

        return $this;
    }

    /**
     * Get balaoFogo
     *
     * @return string 
     */
    public function getBalaoFogo()
    {
        return $this->balaoFogo;
    }

    /**
     * Set cargaSuspensa
     *
     * @param string $cargaSuspensa
     * @return BalaoOcorrenciaGeral
     */
    public function setCargaSuspensa($cargaSuspensa)
    {
        $this->cargaSuspensa = $cargaSuspensa;

        return $this;
    }

    /**
     * Get cargaSuspensa
     *
     * @return string 
     */
    public function getCargaSuspensa()
    {
        return $this->cargaSuspensa;
    }

    /**
     * Set ocorrencia
     *
     * @param \AppBundle\Entity\BalaoOcorrencia $ocorrencia
     * @return BalaoOcorrenciaGeral
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
}

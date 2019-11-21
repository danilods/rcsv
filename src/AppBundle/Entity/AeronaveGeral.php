<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AeronaveGeral
 *
 * @ORM\Table(name="aeronave_geral", uniqueConstraints={@ORM\UniqueConstraint(name="matricula", columns={"matricula"})}, indexes={@ORM\Index(name="aeronave_geral_7fd9696e", columns={"nacionalidade_registro_id"}), @ORM\Index(name="aeronave_geral_0db0b5f9", columns={"nacionalidade_fabricacao_id"}), @ORM\Index(name="aeronave_geral_040db6bb", columns={"nacionalidade_projeto_id"})})
 * @ORM\Entity
 */
class AeronaveGeral
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
     * @ORM\Column(name="matricula", type="string", length=10, nullable=false)
     */
    private $matricula;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano_fabricacao", type="integer", nullable=true)
     */
    private $anoFabricacao;

    /**
     * @var string
     *
     * @ORM\Column(name="classificacao", type="string", length=10, nullable=false)
     */
    private $classificacao;

    /**
     * @var string
     *
     * @ORM\Column(name="equipamento", type="string", length=15, nullable=false)
     */
    private $equipamento;

    /**
     * @var string
     *
     * @ORM\Column(name="fabricante_codigo", type="string", length=3, nullable=false)
     */
    private $fabricanteCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="fabricante_nome", type="string", length=50, nullable=false)
     */
    private $fabricanteNome;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=50, nullable=false)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=3, nullable=false)
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_icao", type="string", length=5, nullable=false)
     */
    private $tipoIcao;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_motor", type="string", length=15, nullable=false)
     */
    private $tipoMotor;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_motor", type="integer", nullable=true)
     */
    private $quantidadeMotor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_trem_pouso", type="string", length=20, nullable=false)
     */
    private $tipoTremPouso;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_assentos", type="integer", nullable=true)
     */
    private $numeroAssentos;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_serie", type="string", length=15, nullable=false)
     */
    private $numeroSerie;

    /**
     * @var integer
     *
     * @ORM\Column(name="passageiros_maximo", type="integer", nullable=true)
     */
    private $passageirosMaximo;

    /**
     * @var float
     *
     * @ORM\Column(name="peso_max_decolagem", type="float", precision=10, scale=0, nullable=false)
     */
    private $pesoMaxDecolagem;

    /**
     * @var integer
     *
     * @ORM\Column(name="tripulacao_minima", type="integer", nullable=true)
     */
    private $tripulacaoMinima;

    /**
     * @var \GeografiaPais
     *
     * @ORM\ManyToOne(targetEntity="GeografiaPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nacionalidade_registro_id", referencedColumnName="id")
     * })
     */
    private $nacionalidadeRegistro;

    /**
     * @var \GeografiaPais
     *
     * @ORM\ManyToOne(targetEntity="GeografiaPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nacionalidade_fabricacao_id", referencedColumnName="id")
     * })
     */
    private $nacionalidadeFabricacao;

    /**
     * @var \GeografiaPais
     *
     * @ORM\ManyToOne(targetEntity="GeografiaPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nacionalidade_projeto_id", referencedColumnName="id")
     * })
     */
    private $nacionalidadeProjeto;



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
     * Set matricula
     *
     * @param string $matricula
     * @return AeronaveGeral
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set anoFabricacao
     *
     * @param integer $anoFabricacao
     * @return AeronaveGeral
     */
    public function setAnoFabricacao($anoFabricacao)
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get anoFabricacao
     *
     * @return integer 
     */
    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    /**
     * Set classificacao
     *
     * @param string $classificacao
     * @return AeronaveGeral
     */
    public function setClassificacao($classificacao)
    {
        $this->classificacao = $classificacao;

        return $this;
    }

    /**
     * Get classificacao
     *
     * @return string 
     */
    public function getClassificacao()
    {
        return $this->classificacao;
    }

    /**
     * Set equipamento
     *
     * @param string $equipamento
     * @return AeronaveGeral
     */
    public function setEquipamento($equipamento)
    {
        $this->equipamento = $equipamento;

        return $this;
    }

    /**
     * Get equipamento
     *
     * @return string 
     */
    public function getEquipamento()
    {
        return $this->equipamento;
    }

    /**
     * Set fabricanteCodigo
     *
     * @param string $fabricanteCodigo
     * @return AeronaveGeral
     */
    public function setFabricanteCodigo($fabricanteCodigo)
    {
        $this->fabricanteCodigo = $fabricanteCodigo;

        return $this;
    }

    /**
     * Get fabricanteCodigo
     *
     * @return string 
     */
    public function getFabricanteCodigo()
    {
        return $this->fabricanteCodigo;
    }

    /**
     * Set fabricanteNome
     *
     * @param string $fabricanteNome
     * @return AeronaveGeral
     */
    public function setFabricanteNome($fabricanteNome)
    {
        $this->fabricanteNome = $fabricanteNome;

        return $this;
    }

    /**
     * Get fabricanteNome
     *
     * @return string 
     */
    public function getFabricanteNome()
    {
        return $this->fabricanteNome;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return AeronaveGeral
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set classe
     *
     * @param string $classe
     * @return AeronaveGeral
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return string 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set tipoIcao
     *
     * @param string $tipoIcao
     * @return AeronaveGeral
     */
    public function setTipoIcao($tipoIcao)
    {
        $this->tipoIcao = $tipoIcao;

        return $this;
    }

    /**
     * Get tipoIcao
     *
     * @return string 
     */
    public function getTipoIcao()
    {
        return $this->tipoIcao;
    }

    /**
     * Set tipoMotor
     *
     * @param string $tipoMotor
     * @return AeronaveGeral
     */
    public function setTipoMotor($tipoMotor)
    {
        $this->tipoMotor = $tipoMotor;

        return $this;
    }

    /**
     * Get tipoMotor
     *
     * @return string 
     */
    public function getTipoMotor()
    {
        return $this->tipoMotor;
    }

    /**
     * Set quantidadeMotor
     *
     * @param integer $quantidadeMotor
     * @return AeronaveGeral
     */
    public function setQuantidadeMotor($quantidadeMotor)
    {
        $this->quantidadeMotor = $quantidadeMotor;

        return $this;
    }

    /**
     * Get quantidadeMotor
     *
     * @return integer 
     */
    public function getQuantidadeMotor()
    {
        return $this->quantidadeMotor;
    }

    /**
     * Set tipoTremPouso
     *
     * @param string $tipoTremPouso
     * @return AeronaveGeral
     */
    public function setTipoTremPouso($tipoTremPouso)
    {
        $this->tipoTremPouso = $tipoTremPouso;

        return $this;
    }

    /**
     * Get tipoTremPouso
     *
     * @return string 
     */
    public function getTipoTremPouso()
    {
        return $this->tipoTremPouso;
    }

    /**
     * Set numeroAssentos
     *
     * @param integer $numeroAssentos
     * @return AeronaveGeral
     */
    public function setNumeroAssentos($numeroAssentos)
    {
        $this->numeroAssentos = $numeroAssentos;

        return $this;
    }

    /**
     * Get numeroAssentos
     *
     * @return integer 
     */
    public function getNumeroAssentos()
    {
        return $this->numeroAssentos;
    }

    /**
     * Set numeroSerie
     *
     * @param string $numeroSerie
     * @return AeronaveGeral
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    /**
     * Get numeroSerie
     *
     * @return string 
     */
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    /**
     * Set passageirosMaximo
     *
     * @param integer $passageirosMaximo
     * @return AeronaveGeral
     */
    public function setPassageirosMaximo($passageirosMaximo)
    {
        $this->passageirosMaximo = $passageirosMaximo;

        return $this;
    }

    /**
     * Get passageirosMaximo
     *
     * @return integer 
     */
    public function getPassageirosMaximo()
    {
        return $this->passageirosMaximo;
    }

    /**
     * Set pesoMaxDecolagem
     *
     * @param float $pesoMaxDecolagem
     * @return AeronaveGeral
     */
    public function setPesoMaxDecolagem($pesoMaxDecolagem)
    {
        $this->pesoMaxDecolagem = $pesoMaxDecolagem;

        return $this;
    }

    /**
     * Get pesoMaxDecolagem
     *
     * @return float 
     */
    public function getPesoMaxDecolagem()
    {
        return $this->pesoMaxDecolagem;
    }

    /**
     * Set tripulacaoMinima
     *
     * @param integer $tripulacaoMinima
     * @return AeronaveGeral
     */
    public function setTripulacaoMinima($tripulacaoMinima)
    {
        $this->tripulacaoMinima = $tripulacaoMinima;

        return $this;
    }

    /**
     * Get tripulacaoMinima
     *
     * @return integer 
     */
    public function getTripulacaoMinima()
    {
        return $this->tripulacaoMinima;
    }

    /**
     * Set nacionalidadeRegistro
     *
     * @param \AppBundle\Entity\GeografiaPais $nacionalidadeRegistro
     * @return AeronaveGeral
     */
    public function setNacionalidadeRegistro(\AppBundle\Entity\GeografiaPais $nacionalidadeRegistro = null)
    {
        $this->nacionalidadeRegistro = $nacionalidadeRegistro;

        return $this;
    }

    /**
     * Get nacionalidadeRegistro
     *
     * @return \AppBundle\Entity\GeografiaPais 
     */
    public function getNacionalidadeRegistro()
    {
        return $this->nacionalidadeRegistro;
    }

    /**
     * Set nacionalidadeFabricacao
     *
     * @param \AppBundle\Entity\GeografiaPais $nacionalidadeFabricacao
     * @return AeronaveGeral
     */
    public function setNacionalidadeFabricacao(\AppBundle\Entity\GeografiaPais $nacionalidadeFabricacao = null)
    {
        $this->nacionalidadeFabricacao = $nacionalidadeFabricacao;

        return $this;
    }

    /**
     * Get nacionalidadeFabricacao
     *
     * @return \AppBundle\Entity\GeografiaPais 
     */
    public function getNacionalidadeFabricacao()
    {
        return $this->nacionalidadeFabricacao;
    }

    /**
     * Set nacionalidadeProjeto
     *
     * @param \AppBundle\Entity\GeografiaPais $nacionalidadeProjeto
     * @return AeronaveGeral
     */
    public function setNacionalidadeProjeto(\AppBundle\Entity\GeografiaPais $nacionalidadeProjeto = null)
    {
        $this->nacionalidadeProjeto = $nacionalidadeProjeto;

        return $this;
    }

    /**
     * Get nacionalidadeProjeto
     *
     * @return \AppBundle\Entity\GeografiaPais 
     */
    public function getNacionalidadeProjeto()
    {
        return $this->nacionalidadeProjeto;
    }
    
     public function __toString() {
        return $this->matricula;
    }
}

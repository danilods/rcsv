<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AerodromoPista
 *
 * @ORM\Table(name="aerodromo_pista", indexes={@ORM\Index(name="aerodromo_pista_e1f9e6ae", columns={"aerodromo_id"})})
 * @ORM\Entity
 */
class AerodromoPista
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
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome;

    /**
     * @var float
     *
     * @ORM\Column(name="comprimento", type="float", precision=10, scale=0, nullable=true)
     */
    private $comprimento;

    /**
     * @var float
     *
     * @ORM\Column(name="largura", type="float", precision=10, scale=0, nullable=true)
     */
    private $largura;

    /**
     * @var string
     *
     * @ORM\Column(name="cabeceira_a", type="string", length=5, nullable=true)
     */
    private $cabeceiraA;

    /**
     * @var string
     *
     * @ORM\Column(name="cabeceira_b", type="string", length=5, nullable=true)
     */
    private $cabeceiraB;

    /**
     * @var string
     *
     * @ORM\Column(name="piso", type="string", length=20, nullable=false)
     */
    private $piso;

    /**
     * @var integer
     *
     * @ORM\Column(name="pcn", type="integer", nullable=true)
     */
    private $pcn;

    /**
     * @var string
     *
     * @ORM\Column(name="pavimento", type="string", length=3, nullable=false)
     */
    private $pavimento;

    /**
     * @var string
     *
     * @ORM\Column(name="resist_subleito", type="string", length=3, nullable=false)
     */
    private $resistSubleito;

    /**
     * @var string
     *
     * @ORM\Column(name="pressao_maxima", type="string", length=3, nullable=false)
     */
    private $pressaoMaxima;

    /**
     * @var string
     *
     * @ORM\Column(name="avaliacao_pcn", type="string", length=3, nullable=false)
     */
    private $avaliacaoPcn;

    /**
     * @var float
     *
     * @ORM\Column(name="pmpa_kg", type="float", precision=10, scale=0, nullable=true)
     */
    private $pmpaKg;

    /**
     * @var float
     *
     * @ORM\Column(name="pmp_mpa", type="float", precision=10, scale=0, nullable=true)
     */
    private $pmpMpa;

    /**
     * @var string
     *
     * @ORM\Column(name="pista_formato", type="string", length=12, nullable=false)
     */
    private $pistaFormato;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return AerodromoPista
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set comprimento
     *
     * @param float $comprimento
     * @return AerodromoPista
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return float 
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set largura
     *
     * @param float $largura
     * @return AerodromoPista
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get largura
     *
     * @return float 
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set cabeceiraA
     *
     * @param string $cabeceiraA
     * @return AerodromoPista
     */
    public function setCabeceiraA($cabeceiraA)
    {
        $this->cabeceiraA = $cabeceiraA;

        return $this;
    }

    /**
     * Get cabeceiraA
     *
     * @return string 
     */
    public function getCabeceiraA()
    {
        return $this->cabeceiraA;
    }

    /**
     * Set cabeceiraB
     *
     * @param string $cabeceiraB
     * @return AerodromoPista
     */
    public function setCabeceiraB($cabeceiraB)
    {
        $this->cabeceiraB = $cabeceiraB;

        return $this;
    }

    /**
     * Get cabeceiraB
     *
     * @return string 
     */
    public function getCabeceiraB()
    {
        return $this->cabeceiraB;
    }

    /**
     * Set piso
     *
     * @param string $piso
     * @return AerodromoPista
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return string 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set pcn
     *
     * @param integer $pcn
     * @return AerodromoPista
     */
    public function setPcn($pcn)
    {
        $this->pcn = $pcn;

        return $this;
    }

    /**
     * Get pcn
     *
     * @return integer 
     */
    public function getPcn()
    {
        return $this->pcn;
    }

    /**
     * Set pavimento
     *
     * @param string $pavimento
     * @return AerodromoPista
     */
    public function setPavimento($pavimento)
    {
        $this->pavimento = $pavimento;

        return $this;
    }

    /**
     * Get pavimento
     *
     * @return string 
     */
    public function getPavimento()
    {
        return $this->pavimento;
    }

    /**
     * Set resistSubleito
     *
     * @param string $resistSubleito
     * @return AerodromoPista
     */
    public function setResistSubleito($resistSubleito)
    {
        $this->resistSubleito = $resistSubleito;

        return $this;
    }

    /**
     * Get resistSubleito
     *
     * @return string 
     */
    public function getResistSubleito()
    {
        return $this->resistSubleito;
    }

    /**
     * Set pressaoMaxima
     *
     * @param string $pressaoMaxima
     * @return AerodromoPista
     */
    public function setPressaoMaxima($pressaoMaxima)
    {
        $this->pressaoMaxima = $pressaoMaxima;

        return $this;
    }

    /**
     * Get pressaoMaxima
     *
     * @return string 
     */
    public function getPressaoMaxima()
    {
        return $this->pressaoMaxima;
    }

    /**
     * Set avaliacaoPcn
     *
     * @param string $avaliacaoPcn
     * @return AerodromoPista
     */
    public function setAvaliacaoPcn($avaliacaoPcn)
    {
        $this->avaliacaoPcn = $avaliacaoPcn;

        return $this;
    }

    /**
     * Get avaliacaoPcn
     *
     * @return string 
     */
    public function getAvaliacaoPcn()
    {
        return $this->avaliacaoPcn;
    }

    /**
     * Set pmpaKg
     *
     * @param float $pmpaKg
     * @return AerodromoPista
     */
    public function setPmpaKg($pmpaKg)
    {
        $this->pmpaKg = $pmpaKg;

        return $this;
    }

    /**
     * Get pmpaKg
     *
     * @return float 
     */
    public function getPmpaKg()
    {
        return $this->pmpaKg;
    }

    /**
     * Set pmpMpa
     *
     * @param float $pmpMpa
     * @return AerodromoPista
     */
    public function setPmpMpa($pmpMpa)
    {
        $this->pmpMpa = $pmpMpa;

        return $this;
    }

    /**
     * Get pmpMpa
     *
     * @return float 
     */
    public function getPmpMpa()
    {
        return $this->pmpMpa;
    }

    /**
     * Set pistaFormato
     *
     * @param string $pistaFormato
     * @return AerodromoPista
     */
    public function setPistaFormato($pistaFormato)
    {
        $this->pistaFormato = $pistaFormato;

        return $this;
    }

    /**
     * Get pistaFormato
     *
     * @return string 
     */
    public function getPistaFormato()
    {
        return $this->pistaFormato;
    }

    /**
     * Set aerodromo
     *
     * @param \AppBundle\Entity\AerodromoGeral $aerodromo
     * @return AerodromoPista
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
}

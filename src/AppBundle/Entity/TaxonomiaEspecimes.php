<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaEspecimes
 *
 * @ORM\Table(name="taxonomia_especimes", indexes={@ORM\Index(name="fk_taxonomia_especimes_classificacao_familia1_idx", columns={"classificacao_familia_id"})})
 * @ORM\Entity
 */
class TaxonomiaEspecimes
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
     * @ORM\Column(name="nome_popular", type="string", length=50, nullable=true)
     */
    private $nomePopular;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_cientifico", type="string", length=50, nullable=true)
     */
    private $nomeCientifico;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_cientifica_en", type="string", length=50, nullable=true)
     */
    private $nomeCientificaEn;

    /**
     * @var string
     *
     * @ORM\Column(name="tamanho_especime", type="string", length=15, nullable=true)
     */
    private $tamanhoEspecime;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_especime", type="string", length=15, nullable=true)
     */
    private $pesoEspecime;

    /**
     * @var string
     *
     * @ORM\Column(name="distribuicao_geografica", type="string", length=100, nullable=true)
     */
    private $distribuicaoGeografica;

    /**
     * @var string
     *
     * @ORM\Column(name="habitos_alimentares", type="string", length=100, nullable=true)
     */
    private $habitosAlimentares;

    /**
     * @var \FaunaClassificacaoFamilia
     *
     * @ORM\ManyToOne(targetEntity="FaunaClassificacaoFamilia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classificacao_familia_id", referencedColumnName="id")
     * })
     */
    private $classificacaoFamilia;



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
     * Set nomePopular
     *
     * @param string $nomePopular
     * @return TaxonomiaEspecimes
     */
    public function setNomePopular($nomePopular)
    {
        $this->nomePopular = $nomePopular;

        return $this;
    }

    /**
     * Get nomePopular
     *
     * @return string 
     */
    public function getNomePopular()
    {
        return $this->nomePopular;
    }

    /**
     * Set nomeCientifico
     *
     * @param string $nomeCientifico
     * @return TaxonomiaEspecimes
     */
    public function setNomeCientifico($nomeCientifico)
    {
        $this->nomeCientifico = $nomeCientifico;

        return $this;
    }

    /**
     * Get nomeCientifico
     *
     * @return string 
     */
    public function getNomeCientifico()
    {
        return $this->nomeCientifico;
    }

    /**
     * Set nomeCientificaEn
     *
     * @param string $nomeCientificaEn
     * @return TaxonomiaEspecimes
     */
    public function setNomeCientificaEn($nomeCientificaEn)
    {
        $this->nomeCientificaEn = $nomeCientificaEn;

        return $this;
    }

    /**
     * Get nomeCientificaEn
     *
     * @return string 
     */
    public function getNomeCientificaEn()
    {
        return $this->nomeCientificaEn;
    }

    /**
     * Set tamanhoEspecime
     *
     * @param string $tamanhoEspecime
     * @return TaxonomiaEspecimes
     */
    public function setTamanhoEspecime($tamanhoEspecime)
    {
        $this->tamanhoEspecime = $tamanhoEspecime;

        return $this;
    }

    /**
     * Get tamanhoEspecime
     *
     * @return string 
     */
    public function getTamanhoEspecime()
    {
        return $this->tamanhoEspecime;
    }

    /**
     * Set pesoEspecime
     *
     * @param string $pesoEspecime
     * @return TaxonomiaEspecimes
     */
    public function setPesoEspecime($pesoEspecime)
    {
        $this->pesoEspecime = $pesoEspecime;

        return $this;
    }

    /**
     * Get pesoEspecime
     *
     * @return string 
     */
    public function getPesoEspecime()
    {
        return $this->pesoEspecime;
    }

    /**
     * Set distribuicaoGeografica
     *
     * @param string $distribuicaoGeografica
     * @return TaxonomiaEspecimes
     */
    public function setDistribuicaoGeografica($distribuicaoGeografica)
    {
        $this->distribuicaoGeografica = $distribuicaoGeografica;

        return $this;
    }

    /**
     * Get distribuicaoGeografica
     *
     * @return string 
     */
    public function getDistribuicaoGeografica()
    {
        return $this->distribuicaoGeografica;
    }

    /**
     * Set habitosAlimentares
     *
     * @param string $habitosAlimentares
     * @return TaxonomiaEspecimes
     */
    public function setHabitosAlimentares($habitosAlimentares)
    {
        $this->habitosAlimentares = $habitosAlimentares;

        return $this;
    }

    /**
     * Get habitosAlimentares
     *
     * @return string 
     */
    public function getHabitosAlimentares()
    {
        return $this->habitosAlimentares;
    }

    /**
     * Set classificacaoFamilia
     *
     * @param \AppBundle\Entity\FaunaClassificacaoFamilia $classificacaoFamilia
     * @return TaxonomiaEspecimes
     */
    public function setClassificacaoFamilia(\AppBundle\Entity\FaunaClassificacaoFamilia $classificacaoFamilia = null)
    {
        $this->classificacaoFamilia = $classificacaoFamilia;

        return $this;
    }

    /**
     * Get classificacaoFamilia
     *
     * @return \AppBundle\Entity\FaunaClassificacaoFamilia 
     */
    public function getClassificacaoFamilia()
    {
        return $this->classificacaoFamilia;
    }
}

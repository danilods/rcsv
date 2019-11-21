<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaOcorrenciaEspecies
 *
 * @ORM\Table(name="fauna_ocorrencia_especies", indexes={@ORM\Index(name="fk_ocorrencia_especimes_taxonomia_especimes1_idx", columns={"especimes_id"}), @ORM\Index(name="fk_ocorrencia_especimes_ocorrencia_fauna1_idx", columns={"ocorrencia_fauna_id"})})
 * @ORM\Entity
 */
class FaunaOcorrenciaEspecies
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
     * @ORM\Column(name="coletadas_dna", type="string", length=5, nullable=true)
     */
    private $coletadasDna;

    /**
     * @var string
     *
     * @ORM\Column(name="enviadas_dna", type="string", length=5, nullable=true)
     */
    private $enviadasDna;

    /**
     * @var string
     *
     * @ORM\Column(name="fotografadas", type="string", length=5, nullable=true)
     */
    private $fotografadas;

    /**
     * @var string
     *
     * @ORM\Column(name="fotos_enviadas_identifcacao", type="string", length=5, nullable=true)
     */
    private $fotosEnviadasIdentifcacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_especimes_avistadas", type="integer", nullable=true)
     */
    private $numEspecimesAvistadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_especimes_atingidas", type="integer", nullable=true)
     */
    private $numEspecimesAtingidas;

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
     * @var \TaxonomiaEspecimes
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaEspecimes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="especimes_id", referencedColumnName="id")
     * })
     */
    private $especimes;



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
     * Set coletadasDna
     *
     * @param string $coletadasDna
     * @return FaunaOcorrenciaEspecies
     */
    public function setColetadasDna($coletadasDna)
    {
        $this->coletadasDna = $coletadasDna;

        return $this;
    }

    /**
     * Get coletadasDna
     *
     * @return string 
     */
    public function getColetadasDna()
    {
        return $this->coletadasDna;
    }

    /**
     * Set enviadasDna
     *
     * @param string $enviadasDna
     * @return FaunaOcorrenciaEspecies
     */
    public function setEnviadasDna($enviadasDna)
    {
        $this->enviadasDna = $enviadasDna;

        return $this;
    }

    /**
     * Get enviadasDna
     *
     * @return string 
     */
    public function getEnviadasDna()
    {
        return $this->enviadasDna;
    }

    /**
     * Set fotografadas
     *
     * @param string $fotografadas
     * @return FaunaOcorrenciaEspecies
     */
    public function setFotografadas($fotografadas)
    {
        $this->fotografadas = $fotografadas;

        return $this;
    }

    /**
     * Get fotografadas
     *
     * @return string 
     */
    public function getFotografadas()
    {
        return $this->fotografadas;
    }

    /**
     * Set fotosEnviadasIdentifcacao
     *
     * @param string $fotosEnviadasIdentifcacao
     * @return FaunaOcorrenciaEspecies
     */
    public function setFotosEnviadasIdentifcacao($fotosEnviadasIdentifcacao)
    {
        $this->fotosEnviadasIdentifcacao = $fotosEnviadasIdentifcacao;

        return $this;
    }

    /**
     * Get fotosEnviadasIdentifcacao
     *
     * @return string 
     */
    public function getFotosEnviadasIdentifcacao()
    {
        return $this->fotosEnviadasIdentifcacao;
    }

    /**
     * Set numEspecimesAvistadas
     *
     * @param integer $numEspecimesAvistadas
     * @return FaunaOcorrenciaEspecies
     */
    public function setNumEspecimesAvistadas($numEspecimesAvistadas)
    {
        $this->numEspecimesAvistadas = $numEspecimesAvistadas;

        return $this;
    }

    /**
     * Get numEspecimesAvistadas
     *
     * @return integer 
     */
    public function getNumEspecimesAvistadas()
    {
        return $this->numEspecimesAvistadas;
    }

    /**
     * Set numEspecimesAtingidas
     *
     * @param integer $numEspecimesAtingidas
     * @return FaunaOcorrenciaEspecies
     */
    public function setNumEspecimesAtingidas($numEspecimesAtingidas)
    {
        $this->numEspecimesAtingidas = $numEspecimesAtingidas;

        return $this;
    }

    /**
     * Get numEspecimesAtingidas
     *
     * @return integer 
     */
    public function getNumEspecimesAtingidas()
    {
        return $this->numEspecimesAtingidas;
    }

    /**
     * Set ocorrenciaFauna
     *
     * @param \AppBundle\Entity\FaunaOcorrenciaGeral $ocorrenciaFauna
     * @return FaunaOcorrenciaEspecies
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
     * Set especimes
     *
     * @param \AppBundle\Entity\TaxonomiaEspecimes $especimes
     * @return FaunaOcorrenciaEspecies
     */
    public function setEspecimes(\AppBundle\Entity\TaxonomiaEspecimes $especimes = null)
    {
        $this->especimes = $especimes;

        return $this;
    }

    /**
     * Get especimes
     *
     * @return \AppBundle\Entity\TaxonomiaEspecimes 
     */
    public function getEspecimes()
    {
        return $this->especimes;
    }
}

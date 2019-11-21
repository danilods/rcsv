<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvRegistroControle
 *
 * @ORM\Table(name="rcsv_registro_controle", indexes={@ORM\Index(name="fkey", columns={"ocorrencia_id"})})
 * @ORM\Entity
 */
class RcsvRegistroControle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_registro", type="string", length=255)
     */
    private $tipoRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes", type="string", length=255)
     */
    private $observacoes;
	
	
	/**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false)
     */
    private $status;

	
	/**
     * @var string
     *
     * @ORM\Column(name="ocorrencia_registro", type="string", length=255)
     */
    private $ocorrenciaRegistro;

    

	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="data_registro", type="datetime", nullable=true)
     */
    private $dataRegistro;
	
	 /**
     * @var \RcsvOcorrencia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RcsvOcorrencia", inversedBy="ocorrenciaRegistroControle", cascade={"all"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_id", referencedColumnName="id")
     * })
     */
    private $ocorrencia;
	
	
	
	
	/**
     * Set dataRegistro
     *
     * @param \DateTime $registradoEm
     * @return RcsvRegistroControle
     */
    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;

        return $this;
    }

    /**
     * Get registradoEm
     *
     * @return \DateTime 
     */
    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }
	
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
     * Set tipoRegistro
     *
     * @param string $tipoRegistro
     *
     * @return RcsvRegistroControle
     */
    public function setTipoRegistro($tipoRegistro)
    {
        $this->tipoRegistro = $tipoRegistro;

        return $this;
    }

    /**
     * Get tipoRegistro
     *
     * @return string
     */
    public function getTipoRegistro()
    {
        return $this->tipoRegistro;
    }

    /**
     * Set observacoes
     *
     * @param string $observacoes
     *
     * @return RcsvRegistroControle
     */
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;

        return $this;
    }

    /**
     * Get observacoes
     *
     * @return string
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * Set ocorrenciaId
     *
     * @param string $ocorrenciaId
     *
     * @return RcsvRegistroControle
     */
    public function setOcorrenciaId($ocorrenciaId)
    {
        $this->ocorrenciaId = $ocorrenciaId;

        return $this;
    }

    /**
     * Get ocorrenciaId
     *
     * @return string
     */
    public function getOcorrenciaId()
    {
        return $this->ocorrenciaId;
    }
	
	
	
	 /**
     * Set ocorrenciaId
     *
     * @param string $ocorrenciaId
     *
     * @return RcsvRegistroControle
     */
    public function setOcorrenciaRegistro($ocorrenciaRegistro)
    {
        $this->ocorrenciaRegistro = $ocorrenciaRegistro;

        return $this;
    }

    /**
     * Get ocorrenciaId
     *
     * @return string
     */
    public function getOcorrenciaRegistro()
    {
        return $this->ocorrenciaRegistro;
    }
	
	
	/**
     * Set ocorrencia
     *
     * @param \AppBundle\Entity\RcsvOcorrencia $ocorrencia
     * @return RcsvControle
     */
    public function setOcorrencia(\AppBundle\Entity\RcsvOcorrencia $ocorrencia = null)
    {
        $this->ocorrencia = $ocorrencia;

        return $this;
    }

    /**
     * Get ocorrencia
     *
     * @return \AppBundle\Entity\RcsvOcorrencia 
     */
    public function getOcorrencia()
    {
        return $this->ocorrencia;
    }
}


<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalaoOcorrenciaControle
 *
 * @ORM\Table(name="balao_ocorrencia_controle", indexes={@ORM\Index(name="fk_ocorrencia_controle_ocorrencia2_idx", columns={"ocorrencia_id"})})
 * @ORM\Entity
 */
class BalaoOcorrenciaControle
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
     * @ORM\Column(name="situacao_ocorrencia", type="string", length=100, nullable=true)
     */
    private $situacaoOcorrencia;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridade", type="string", length=45, nullable=true)
     */
    private $prioridade;

    /**
     * @var string
     *
     * @ORM\Column(name="fase_atual", type="string", length=50, nullable=true)
     */
    private $faseAtual;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_acompanhamento", type="integer", nullable=true)
     */
    private $statusAcompanhamento;

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
     * Set situacaoOcorrencia
     *
     * @param string $situacaoOcorrencia
     * @return BalaoOcorrenciaControle
     */
    public function setSituacaoOcorrencia($situacaoOcorrencia)
    {
        $this->situacaoOcorrencia = $situacaoOcorrencia;

        return $this;
    }

    /**
     * Get situacaoOcorrencia
     *
     * @return string 
     */
    public function getSituacaoOcorrencia()
    {
        return $this->situacaoOcorrencia;
    }

    /**
     * Set prioridade
     *
     * @param string $prioridade
     * @return BalaoOcorrenciaControle
     */
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;

        return $this;
    }

    /**
     * Get prioridade
     *
     * @return string 
     */
    public function getPrioridade()
    {
        return $this->prioridade;
    }

    /**
     * Set faseAtual
     *
     * @param string $faseAtual
     * @return BalaoOcorrenciaControle
     */
    public function setFaseAtual($faseAtual)
    {
        $this->faseAtual = $faseAtual;

        return $this;
    }

    /**
     * Get faseAtual
     *
     * @return string 
     */
    public function getFaseAtual()
    {
        return $this->faseAtual;
    }

    /**
     * Set statusAcompanhamento
     *
     * @param integer $statusAcompanhamento
     * @return BalaoOcorrenciaControle
     */
    public function setStatusAcompanhamento($statusAcompanhamento)
    {
        $this->statusAcompanhamento = $statusAcompanhamento;

        return $this;
    }

    /**
     * Get statusAcompanhamento
     *
     * @return integer 
     */
    public function getStatusAcompanhamento()
    {
        return $this->statusAcompanhamento;
    }

    /**
     * Set ocorrencia
     *
     * @param \AppBundle\Entity\BalaoOcorrencia $ocorrencia
     * @return BalaoOcorrenciaControle
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

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaOcorrenciaControle
 *
 * @ORM\Table(name="fauna_ocorrencia_controle", indexes={@ORM\Index(name="fk_ocorrencia_controle_fauna_ocorrencia_fauna1_idx", columns={"ocorrencia_fauna_id"})})
 * @ORM\Entity
 */
class FaunaOcorrenciaControle
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
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_aprovacao", type="date", nullable=true)
     */
    private $dataAprovacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes", type="string", length=255, nullable=true)
     */
    private $observacoes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_em", type="datetime", nullable=true)
     */
    private $registroEm;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return FaunaOcorrenciaControle
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dataAprovacao
     *
     * @param \DateTime $dataAprovacao
     * @return FaunaOcorrenciaControle
     */
    public function setDataAprovacao($dataAprovacao)
    {
        $this->dataAprovacao = $dataAprovacao;

        return $this;
    }

    /**
     * Get dataAprovacao
     *
     * @return \DateTime 
     */
    public function getDataAprovacao()
    {
        return $this->dataAprovacao;
    }

    /**
     * Set observacoes
     *
     * @param string $observacoes
     * @return FaunaOcorrenciaControle
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
     * Set registroEm
     *
     * @param \DateTime $registroEm
     * @return FaunaOcorrenciaControle
     */
    public function setRegistroEm($registroEm)
    {
        $this->registroEm = $registroEm;

        return $this;
    }

    /**
     * Get registroEm
     *
     * @return \DateTime 
     */
    public function getRegistroEm()
    {
        return $this->registroEm;
    }

    /**
     * Set ocorrenciaFauna
     *
     * @param \AppBundle\Entity\FaunaOcorrenciaGeral $ocorrenciaFauna
     * @return FaunaOcorrenciaControle
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
}

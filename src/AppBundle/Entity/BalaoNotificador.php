<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalaoNotificador
 *
 * @ORM\Table(name="balao_notificador", indexes={@ORM\Index(name="fk_notificador_ocorrencia1_idx", columns={"ocorrencia_id"})})
 * @ORM\Entity
 */
class BalaoNotificador
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="funcao", type="string", length=100, nullable=true)
     */
    private $funcao;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_notificacao", type="datetime", nullable=true)
     */
    private $dataNotificacao;

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
     * Set nome
     *
     * @param string $nome
     * @return BalaoNotificador
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
     * Set funcao
     *
     * @param string $funcao
     * @return BalaoNotificador
     */
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }

    /**
     * Get funcao
     *
     * @return string 
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return BalaoNotificador
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return BalaoNotificador
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dataNotificacao
     *
     * @param \DateTime $dataNotificacao
     * @return BalaoNotificador
     */
    public function setDataNotificacao($dataNotificacao)
    {
        $this->dataNotificacao = $dataNotificacao;

        return $this;
    }

    /**
     * Get dataNotificacao
     *
     * @return \DateTime 
     */
    public function getDataNotificacao()
    {
        return $this->dataNotificacao;
    }

    /**
     * Set ocorrencia
     *
     * @param \AppBundle\Entity\BalaoOcorrencia $ocorrencia
     * @return BalaoNotificador
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

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;



/**
 * RcsvNotificador
 *
 * @ORM\Table(name="rcsv_notificador", indexes={@ORM\Index(name="fk_rcsv_notificador_rcsv_ocorrencia1_idx", columns={"ocorrencia_id"})})
 * @ORM\Entity
 */
class RcsvNotificador
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
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf",type="string", length=20,  nullable=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone",type="string", length=20,  nullable=true)
     */
    private $telefone;

    /**
     * @var string
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="num_habilitacao", type="integer", length=20, nullable=true)
     */
    private $numHabilitacao;

    /**
     * @var string
     *
     * @ORM\Column(name="orgao_empresa", type="string", length=45, nullable=true)
     */
    private $orgaoEmpresa;

    /**
     * @var \RcsvOcorrencia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RcsvOcorrencia", inversedBy="notificadorOcorrencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_id", referencedColumnName="id")
     * })
     */
    private $ocorrencia;
	
	
	/**
     * @var \RcsvElosSipaer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RcsvElosSipaer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orgao_id", referencedColumnName="id")
     * })
     */
    private $eloSipaer;



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
     * @return RcsvNotificador
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
     * Set cpf
     *
     * @param string $cpf
     * @return RcsvNotificador
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return RcsvNotificador
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
     * @return RcsvNotificador
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
     * Set numHabilitacao
     *
     * @param string $numHabilitacao
     * @return RcsvNotificador
     */
    public function setNumHabilitacao($numHabilitacao)
    {
        $this->numHabilitacao = $numHabilitacao;

        return $this;
    }

    /**
     * Get numHabilitacao
     *
     * @return string 
     */
    public function getNumHabilitacao()
    {
        return $this->numHabilitacao;
    }

    /**
     * Set orgaoEmpresa
     *
     * @param string $orgaoEmpresa
     * @return RcsvNotificador
     */
    public function setOrgaoEmpresa($orgaoEmpresa)
    {
        $this->orgaoEmpresa = $orgaoEmpresa;

        return $this;
    }

    /**
     * Get orgaoEmpresa
     *
     * @return string 
     */
    public function getOrgaoEmpresa()
    {
        return $this->orgaoEmpresa;
    }

    /**
     * Set ocorrencia
     *
     * @param \AppBundle\Entity\RcsvOcorrencia $ocorrencia
     * @return RcsvNotificador
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

    /**
     * Set eloSipaer
     *
     * @param \AppBundle\Entity\RcsvElosSipaer $eloSipaer
     *
     * @return RcsvNotificador
     */
    public function setEloSipaer(\AppBundle\Entity\RcsvElosSipaer $eloSipaer = null)
    {
        $this->eloSipaer = $eloSipaer;

        return $this;
    }

    /**
     * Get eloSipaer
     *
     * @return \AppBundle\Entity\RcsvElosSipaer
     */
    public function getEloSipaer()
    {
        return $this->eloSipaer;
    }
}

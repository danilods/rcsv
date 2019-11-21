<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AeronaveOperador
 *
 * @ORM\Table(name="aeronave_operador", uniqueConstraints={@ORM\UniqueConstraint(name="nome_operador", columns={"nome_operador"})}, indexes={@ORM\Index(name="aeronave_operador_51020e6f", columns={"cidade_id"}), @ORM\Index(name="aeronave_operador_afg45", columns={"cadastrado_por_id"})})
 * @ORM\Entity
 */
class AeronaveOperador
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
     * @ORM\Column(name="nome_operador", type="string", length=100, nullable=false)
     */
    private $nomeOperador;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_codigo", type="string", length=30, nullable=true)
     */
    private $nomeCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_cnpj", type="string", length=20, nullable=true)
     */
    private $cpfCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=200, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=100, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone1", type="string", length=100, nullable=true)
     */
    private $telefone1;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone2", type="string", length=100, nullable=true)
     */
    private $telefone2;

    /**
     * @var string
     *
     * @ORM\Column(name="atividade_principal", type="string", length=50, nullable=false)
     */
    private $atividadePrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="membro_cnpaa", type="string", length=10, nullable=false)
     */
    private $membroCnpaa;

    /**
     * @var string
     *
     * @ORM\Column(name="elo_sipaer", type="string", length=20, nullable=false)
     */
    private $eloSipaer;

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes", type="text", nullable=true)
     */
    private $observacoes;

    /**
     * @var integer
     *
     * @ORM\Column(name="cadastrado_por_id", type="integer", nullable=true)
     */
    private $cadastradoPorId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cadastrado_em", type="date", nullable=false)
     */
    private $cadastradoEm;

    /**
     * @var \GeografiaCidade
     *
     * @ORM\ManyToOne(targetEntity="GeografiaCidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
     * })
     */
    private $cidade;



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
     * Set nomeOperador
     *
     * @param string $nomeOperador
     * @return AeronaveOperador
     */
    public function setNomeOperador($nomeOperador)
    {
        $this->nomeOperador = $nomeOperador;

        return $this;
    }

    /**
     * Get nomeOperador
     *
     * @return string 
     */
    public function getNomeOperador()
    {
        return $this->nomeOperador;
    }

    /**
     * Set nomeCodigo
     *
     * @param string $nomeCodigo
     * @return AeronaveOperador
     */
    public function setNomeCodigo($nomeCodigo)
    {
        $this->nomeCodigo = $nomeCodigo;

        return $this;
    }

    /**
     * Get nomeCodigo
     *
     * @return string 
     */
    public function getNomeCodigo()
    {
        return $this->nomeCodigo;
    }

    /**
     * Set cpfCnpj
     *
     * @param string $cpfCnpj
     * @return AeronaveOperador
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    /**
     * Get cpfCnpj
     *
     * @return string 
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return AeronaveOperador
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return AeronaveOperador
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set telefone1
     *
     * @param string $telefone1
     * @return AeronaveOperador
     */
    public function setTelefone1($telefone1)
    {
        $this->telefone1 = $telefone1;

        return $this;
    }

    /**
     * Get telefone1
     *
     * @return string 
     */
    public function getTelefone1()
    {
        return $this->telefone1;
    }

    /**
     * Set telefone2
     *
     * @param string $telefone2
     * @return AeronaveOperador
     */
    public function setTelefone2($telefone2)
    {
        $this->telefone2 = $telefone2;

        return $this;
    }

    /**
     * Get telefone2
     *
     * @return string 
     */
    public function getTelefone2()
    {
        return $this->telefone2;
    }

    /**
     * Set atividadePrincipal
     *
     * @param string $atividadePrincipal
     * @return AeronaveOperador
     */
    public function setAtividadePrincipal($atividadePrincipal)
    {
        $this->atividadePrincipal = $atividadePrincipal;

        return $this;
    }

    /**
     * Get atividadePrincipal
     *
     * @return string 
     */
    public function getAtividadePrincipal()
    {
        return $this->atividadePrincipal;
    }

    /**
     * Set membroCnpaa
     *
     * @param string $membroCnpaa
     * @return AeronaveOperador
     */
    public function setMembroCnpaa($membroCnpaa)
    {
        $this->membroCnpaa = $membroCnpaa;

        return $this;
    }

    /**
     * Get membroCnpaa
     *
     * @return string 
     */
    public function getMembroCnpaa()
    {
        return $this->membroCnpaa;
    }

    /**
     * Set eloSipaer
     *
     * @param string $eloSipaer
     * @return AeronaveOperador
     */
    public function setEloSipaer($eloSipaer)
    {
        $this->eloSipaer = $eloSipaer;

        return $this;
    }

    /**
     * Get eloSipaer
     *
     * @return string 
     */
    public function getEloSipaer()
    {
        return $this->eloSipaer;
    }

    /**
     * Set observacoes
     *
     * @param string $observacoes
     * @return AeronaveOperador
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
     * Set cadastradoPorId
     *
     * @param integer $cadastradoPorId
     * @return AeronaveOperador
     */
    public function setCadastradoPorId($cadastradoPorId)
    {
        $this->cadastradoPorId = $cadastradoPorId;

        return $this;
    }

    /**
     * Get cadastradoPorId
     *
     * @return integer 
     */
    public function getCadastradoPorId()
    {
        return $this->cadastradoPorId;
    }

    /**
     * Set cadastradoEm
     *
     * @param \DateTime $cadastradoEm
     * @return AeronaveOperador
     */
    public function setCadastradoEm($cadastradoEm)
    {
        $this->cadastradoEm = $cadastradoEm;

        return $this;
    }

    /**
     * Get cadastradoEm
     *
     * @return \DateTime 
     */
    public function getCadastradoEm()
    {
        return $this->cadastradoEm;
    }

    /**
     * Set cidade
     *
     * @param \AppBundle\Entity\GeografiaCidade $cidade
     * @return AeronaveOperador
     */
    public function setCidade(\AppBundle\Entity\GeografiaCidade $cidade = null)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return \AppBundle\Entity\GeografiaCidade 
     */
    public function getCidade()
    {
        return $this->cidade;
    }
    
     public function __toString() {
        return $this->nomeOperador;
    }
}

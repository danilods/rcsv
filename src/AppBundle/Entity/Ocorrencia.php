<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ocorrencia
 *
 * @ORM\Table(name="ocorrencia")
 * @ORM\Entity
 */
class Ocorrencia
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
     * @ORM\Column(name="tipo_ficha", type="string", length=15, nullable=true)
     */
    private $tipoFicha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ocorrencia", type="date", nullable=true)
     */
    private $dataOcorrencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=true)
     */
    private $hora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_utc", type="time", nullable=true)
     */
    private $horaUtc;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=45, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="aerodromo", type="string", length=100, nullable=true)
     */
    private $aerodromo;

    /**
     * @var string
     *
     * @ORM\Column(name="obs_local_ocorrencia", type="string", length=100, nullable=true)
     */
    private $obsLocalOcorrencia;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=100, nullable=true)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=45, nullable=true)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="fabricante", type="string", length=45, nullable=true)
     */
    private $fabricante;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria_aeronave", type="string", length=150, nullable=true)
     */
    private $categoriaAeronave;

    /**
     * @var string
     *
     * @ORM\Column(name="danos_aeronave", type="string", length=10, nullable=true)
     */
    private $danosAeronave;

    /**
     * @var string
     *
     * @ORM\Column(name="lesao_pessoas", type="string", length=10, nullable=true)
     */
    private $lesaoPessoas;

    /**
     * @var string
     *
     * @ORM\Column(name="historico", type="text", nullable=true)
     */
    private $historico;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_emissor", type="string", length=100, nullable=true)
     */
    private $nomeEmissor;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=45, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="seripa", type="string", length=150, nullable=true)
     */
    private $seripa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cadastro", type="datetime", nullable=true)
     */
    private $cadastro;



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
     * Set tipoFicha
     *
     * @param string $tipoFicha
     * @return Ocorrencia
     */
    public function setTipoFicha($tipoFicha)
    {
        $this->tipoFicha = $tipoFicha;

        return $this;
    }

    /**
     * Get tipoFicha
     *
     * @return string 
     */
    public function getTipoFicha()
    {
        return $this->tipoFicha;
    }

    /**
     * Set dataOcorrencia
     *
     * @param \DateTime $dataOcorrencia
     * @return Ocorrencia
     */
    public function setDataOcorrencia($dataOcorrencia)
    {
        $this->dataOcorrencia = $dataOcorrencia;

        return $this;
    }

    /**
     * Get dataOcorrencia
     *
     * @return \DateTime 
     */
    public function getDataOcorrencia()
    {
        return $this->dataOcorrencia;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     * @return Ocorrencia
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set horaUtc
     *
     * @param \DateTime $horaUtc
     * @return Ocorrencia
     */
    public function setHoraUtc($horaUtc)
    {
        $this->horaUtc = $horaUtc;

        return $this;
    }

    /**
     * Get horaUtc
     *
     * @return \DateTime 
     */
    public function getHoraUtc()
    {
        return $this->horaUtc;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Ocorrencia
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Ocorrencia
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set aerodromo
     *
     * @param string $aerodromo
     * @return Ocorrencia
     */
    public function setAerodromo($aerodromo)
    {
        $this->aerodromo = $aerodromo;

        return $this;
    }

    /**
     * Get aerodromo
     *
     * @return string 
     */
    public function getAerodromo()
    {
        return $this->aerodromo;
    }

    /**
     * Set obsLocalOcorrencia
     *
     * @param string $obsLocalOcorrencia
     * @return Ocorrencia
     */
    public function setObsLocalOcorrencia($obsLocalOcorrencia)
    {
        $this->obsLocalOcorrencia = $obsLocalOcorrencia;

        return $this;
    }

    /**
     * Get obsLocalOcorrencia
     *
     * @return string 
     */
    public function getObsLocalOcorrencia()
    {
        return $this->obsLocalOcorrencia;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     * @return Ocorrencia
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
     * Set modelo
     *
     * @param string $modelo
     * @return Ocorrencia
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
     * Set fabricante
     *
     * @param string $fabricante
     * @return Ocorrencia
     */
    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get fabricante
     *
     * @return string 
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set categoriaAeronave
     *
     * @param string $categoriaAeronave
     * @return Ocorrencia
     */
    public function setCategoriaAeronave($categoriaAeronave)
    {
        $this->categoriaAeronave = $categoriaAeronave;

        return $this;
    }

    /**
     * Get categoriaAeronave
     *
     * @return string 
     */
    public function getCategoriaAeronave()
    {
        return $this->categoriaAeronave;
    }

    /**
     * Set danosAeronave
     *
     * @param string $danosAeronave
     * @return Ocorrencia
     */
    public function setDanosAeronave($danosAeronave)
    {
        $this->danosAeronave = $danosAeronave;

        return $this;
    }

    /**
     * Get danosAeronave
     *
     * @return string 
     */
    public function getDanosAeronave()
    {
        return $this->danosAeronave;
    }

    /**
     * Set lesaoPessoas
     *
     * @param string $lesaoPessoas
     * @return Ocorrencia
     */
    public function setLesaoPessoas($lesaoPessoas)
    {
        $this->lesaoPessoas = $lesaoPessoas;

        return $this;
    }

    /**
     * Get lesaoPessoas
     *
     * @return string 
     */
    public function getLesaoPessoas()
    {
        return $this->lesaoPessoas;
    }

    /**
     * Set historico
     *
     * @param string $historico
     * @return Ocorrencia
     */
    public function setHistorico($historico)
    {
        $this->historico = $historico;

        return $this;
    }

    /**
     * Get historico
     *
     * @return string 
     */
    public function getHistorico()
    {
        return $this->historico;
    }

    /**
     * Set nomeEmissor
     *
     * @param string $nomeEmissor
     * @return Ocorrencia
     */
    public function setNomeEmissor($nomeEmissor)
    {
        $this->nomeEmissor = $nomeEmissor;

        return $this;
    }

    /**
     * Get nomeEmissor
     *
     * @return string 
     */
    public function getNomeEmissor()
    {
        return $this->nomeEmissor;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Ocorrencia
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
     * Set telefone
     *
     * @param string $telefone
     * @return Ocorrencia
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
     * Set celular
     *
     * @param string $celular
     * @return Ocorrencia
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set seripa
     *
     * @param string $seripa
     * @return Ocorrencia
     */
    public function setSeripa($seripa)
    {
        $this->seripa = $seripa;

        return $this;
    }

    /**
     * Get seripa
     *
     * @return string 
     */
    public function getSeripa()
    {
        return $this->seripa;
    }

    /**
     * Set cadastro
     *
     * @param \DateTime $cadastro
     * @return Ocorrencia
     */
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;

        return $this;
    }

    /**
     * Get cadastro
     *
     * @return \DateTime 
     */
    public function getCadastro()
    {
        return $this->cadastro;
    }
}

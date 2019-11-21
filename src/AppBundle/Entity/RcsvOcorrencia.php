<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;




/**
 * RcsvOcorrencia
 *
 * @ORM\Table(name="rcsv_ocorrencia", indexes={@ORM\Index(name="fk_ocorrencia_rcsv_geografia_cidade1_idx", columns={"cidade_id"}), @ORM\Index(name="fk_ocorrencia_rcsv_aerodromo_geral1_idx", columns={"aerodromo_id"}), @ORM\Index(name="fk_ocorrencia_rcsv_taxonomia_funcao_tipo_notificador1_idx", columns={"tipo_notificador_id"}), @ORM\Index(name="fk_classificacao_id", columns={"classificacao_id"})})
 * @ORM\Entity
 */
class RcsvOcorrencia
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
     * @ORM\Column(name="rcsv_aprovado", type="string", length=3, nullable=true)
     */
    private $rcsvAprovado;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     * 
     */
    private $numero;
	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="email_enviado", type="integer", nullable=true)
     * 
     */
    private $emailEnviado;
	
	
	/**
     * @var integer
     *
     * @ORM\Column(name="prioridade", type="integer", nullable=true)
     * 
     */
    private $prioridade;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numero_militar", type="integer", nullable=true)
     * 
     */
    private $numeroMilitar;

     /**
     * @var string
     *
     * @ORM\Column(name="numero_rcsv", type="string", length=255, nullable=true)
     */
    private $numeroRcsv;


    /**
     * @var string
     *
     * @ORM\Column(name="situacao_rcsv", type="string", length=100, nullable=false)
     */
    private $situacaoRcsv;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_reporte", type="string", length=45, nullable=false)
     */
    private $tipoReporte;
	
	
    /**
     * @var \Date
     * /**
     * @ORM\Column(name="data_ocorrencia", type="date", nullable=true)
     */
    private $dataOcorrencia;

    /**
     * @var string
     *
     * @ORM\Column(name="rcsv_historico", type="text", length=65535, nullable=true)
     */
    private $rcsvHistorico;
	
	/**
     * @var string
     *
     * @ORM\Column(name="rcsv_historico_resumido", type="text", length=65535, nullable=true)
     */
    private $rcsvHistoricoResumido;

    /**
     * @var string
     *
     * @ORM\Column(name="hora_local", type="string", length=45, nullable=true)
     */
    private $horaLocal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cadastro_em", type="datetime", nullable=true)
     */
    private $cadastroEm;

    /**
     * @var \RcsvFuncaoNotificador
     *
     * @ORM\ManyToOne(targetEntity="RcsvFuncaoNotificador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_notificador_id", referencedColumnName="id")
     * })
     */
    private $tipoNotificador;

    /**
     * @var \RcsvTaxonomiaClassificacao
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaClassificacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classificacao_id", referencedColumnName="id")
     * })
     */
    private $classificacao;

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
     * @var \GeografiaCidade
     *
     * @ORM\ManyToOne(targetEntity="GeografiaCidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
     * })
     */
    private $cidade;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="publicado", type="boolean", nullable=true)
     * 
     */
    private $publicado;
	
	
    
    /**
    * @ORM\OneToMany(targetEntity="RcsvNotificador", mappedBy="ocorrencia",cascade={"persist"}, orphanRemoval=true)
    */
    private $notificadorOcorrencia;
    
    /**
    *  @ORM\OneToMany(targetEntity="RcsvControle", mappedBy="ocorrencia",cascade={"persist"}, orphanRemoval=true)
    */  
    private $ocorrenciaControle;
    
   
    
    /**
    * @ORM\OneToMany(targetEntity="RcsvOcorrenciaTipo", mappedBy="ocorrenciaRcsv",cascade={"persist"}, orphanRemoval=true)
    */
    private $ocorrenciaTipo;



    public function __construct() {
        
        $this->notificadorOcorrencia = new \Doctrine\Common\Collections\ArrayCollection();
        
        $this->ocorrenciaControle = new \Doctrine\Common\Collections\ArrayCollection();
        
        $this->ocorrenciaTipo = new \Doctrine\Common\Collections\ArrayCollection();
        
        
        
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
     * Set numeroRcsv
     *
     * @param string $numeroRcsv
     * @return RcsvOcorrencia
     */
    public function setNumeroRcsv($numeroRcsv)
    {
        $this->numeroRcsv = $numeroRcsv;

        return $this;
    }
	
	 public function setNumero($numero)
    {
        $this->numero=$numero;
		
		return $this;
    }
	
	
	 public function setEmailEnviado($emailEnviado)
    {
        
		
		return $this->emailEnviado;
    }
	
	
	 public function getEmailEnviado()
    {
       
		
		return  $this->emailEnviado;
    }
	
	
	
	
	 public function setNumeroMilitar($numeroMilitar)
    {
        $this->numeroMilitar=$numeroMilitar;
		
		return $this;
    }
	
	
	/**
     * Get numeroMilitar
     *
     * @return integer 
     */
    public function getNumeroMilitar()
    {
        return $this->numeroMilitar;
    }
	
	/**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }
	
	
	 public function setPrioridade($prioridade)
    {
        $this->prioridade=$prioridade;
		
		return $this;
    }
	
	 public function getPrioridade()
    {
        
		return $this->prioridade;
    }

     /**
     * Get numeroRcsv
     *
     * @return string 
     */
    public function getNumeroRcsv()
    {
        return $this->numeroRcsv;
    }

	 /**
     * Set rcsvAprovado
     *
     * @param string $rcsvAprovado
     * @return RcsvOcorrencia
     */
    public function setRcsvAprovado($rcsvAprovado)
    {
        $this->rcsvAprovado = $rcsvAprovado;

        return $this;
    }



    /**
     * Get getRcsvAprovado
     *
     * @return string 
     */
    public function getRcsvAprovado()
    {
        return $this->rcsvAprovado;
    }
	
    /**
     * Set situacaoRcsv
     *
     * @param string $situacaoRcsv
     * @return RcsvOcorrencia
     */
    public function setSituacaoRcsv($situacaoRcsv)
    {
        $this->situacaoRcsv = $situacaoRcsv;

        return $this;
    }



    /**
     * Get situacaoRcsv
     *
     * @return string 
     */
    public function getSituacaoRcsv()
    {
        return $this->situacaoRcsv;
    }

    /**
     * Set tipoReporte
     *
     * @param string $tipoReporte
     * @return RcsvOcorrencia
     */
    public function setTipoReporte($tipoReporte)
    {
        $this->tipoReporte = $tipoReporte;

        return $this;
    }

    /**
     * Get tipoReporte
     *
     * @return string 
     */
    public function getTipoReporte()
    {
        return $this->tipoReporte;
    }

    /**
     * Set dataOcorrencia
     *
     * @param \Date $dataOcorrencia
     * @return RcsvOcorrencia
     */
    public function setDataOcorrencia($dataOcorrencia)
    {
        $this->dataOcorrencia = $dataOcorrencia;
        
        $newDate = date("d-m-Y", strtotime($this));

        return $newDate;
    }

    /**
     * Get dataOcorrencia
     *
     * @return \Date
     */
    public function getDataOcorrencia()
    { 
        return $this->dataOcorrencia;
    }

    /**
     * Set rcsvHistorico
     *
     * @param string $rcsvHistorico
     * @return RcsvOcorrencia
     */
    public function setRcsvHistorico($rcsvHistorico)
    {
        $this->rcsvHistorico = $rcsvHistorico;

        return $this;
    }

    /**
     * Get rcsvHistorico
     *
     * @return string 
     */
    public function getRcsvHistorico()
    {
        return $this->rcsvHistorico;
    }

    /**
     * Set horaLocal
     *
     * @param time $horaLocal
     * @return RcsvOcorrencia
     */
    public function setHoraLocal($horaLocal)
    {
        $this->horaLocal = $horaLocal;

        return $this;
    }

    /**
     * Get horaLocal
     *
     * @return string 
     */
    public function getHoraLocal()
    {
        return $this->horaLocal;
    }

    /**
     * Set cadastroEm
     *
     * @param \DateTime $cadastroEm
     * @return RcsvOcorrencia
     */
    public function setCadastroEm($cadastroEm)
    {
        $this->cadastroEm = $cadastroEm;

        return $this;
    }

    /**
     * Get cadastroEm
     *
     * @return \DateTime 
     */
    public function getCadastroEm()
    {
        return $this->cadastroEm;
    }

    /**
     * Set tipoNotificador
     *
     * @param \AppBundle\Entity\RcsvFuncaoNotificador $tipoNotificador
     * @return RcsvOcorrencia
     */
    public function setTipoNotificador(\AppBundle\Entity\RcsvFuncaoNotificador $tipoNotificador = null)
    {
        $this->tipoNotificador = $tipoNotificador;

        return $this;
    }

    /**
     * Get tipoNotificador
     *
     * @return \AppBundle\Entity\RcsvFuncaoNotificador 
     */
    public function getTipoNotificador()
    {
        return $this->tipoNotificador;
    }

    /**
     * Set classificacao
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaClassificacao $classificacao
     * @return RcsvOcorrencia
     */
    public function setClassificacao(\AppBundle\Entity\RcsvTaxonomiaClassificacao $classificacao = null)
    {
        $this->classificacao = $classificacao;

        return $this;
    }

    /**
     * Get classificacao
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaClassificacao 
     */
    public function getClassificacao()
    {
        return $this->classificacao;
    }

    /**
     * Set aerodromo
     *
     * @param \AppBundle\Entity\AerodromoGeral $aerodromo
     * @return RcsvOcorrencia
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

    /**
     * Set cidade
     *
     * @param \AppBundle\Entity\GeografiaCidade $cidade
     * @return RcsvOcorrencia
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

    /**
     * Add notificadorOcorrencia
     *
     * @param \AppBundle\Entity\RcsvNotificador $notificadorOcorrencia
     * @return RcsvOcorrencia
     */
    public function addNotificadorOcorrencium(\AppBundle\Entity\RcsvNotificador $notificadorOcorrencia)
    {
        $this->notificadorOcorrencia[] = $notificadorOcorrencia;

        return $this;
    }

    /**
     * Remove notificadorOcorrencia
     *
     * @param \AppBundle\Entity\RcsvNotificador $notificadorOcorrencia
     */
    public function removeNotificadorOcorrencium(\AppBundle\Entity\RcsvNotificador $notificadorOcorrencia)
    {
        $this->notificadorOcorrencia->removeElement($notificadorOcorrencia);
    }

    /**
     * Get notificadorOcorrencia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotificadorOcorrencia()
    {
        return $this->notificadorOcorrencia;
    }

    /**
     * Add ocorrenciaControle
     *
     * @param \AppBundle\Entity\Photo $ocorrenciaControle
     * @return Photo
     */
    public function addOcorrenciaControle(\AppBundle\Entity\RcsvControle $ocorrenciaControle)
    {
        $this->ocorrenciaControle[] = $ocorrenciaControle;

        return $this;
    }

    

    /**
     * Add ocorrenciaTipo
     *
     * @param \AppBundle\Entity\RcsvOcorrenciaTipo $ocorrenciaTipo
     * @return RcsvOcorrencia
     */
    public function addOcorrenciaTipo(\AppBundle\Entity\RcsvOcorrenciaTipo $ocorrenciaTipo)
    {
        $this->ocorrenciaTipo[] = $ocorrenciaTipo;

        return $this;
    }

    /**
     * Remove ocorrenciaTipo
     *
     * @param \AppBundle\Entity\RcsvOcorrenciaTipo $ocorrenciaTipo
     */
    public function removeOcorrenciaTipo(\AppBundle\Entity\RcsvOcorrenciaTipo $ocorrenciaTipo)
    {
        $this->ocorrenciaTipo->removeElement($ocorrenciaTipo);
    }

    /**
     * Get ocorrenciaTipo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOcorrenciaTipo()
    {
        return $this->ocorrenciaTipo;
    }

    /**
     * Add ocorrenciaAnexos
     *
     * @param \AppBundle\Entity\RcsvArquivos $ocorrenciaAnexos
     * @return RcsvOcorrencia
     */
    public function addOcorrenciaAnexo(\AppBundle\Entity\RcsvArquivos $ocorrenciaAnexos)
    {
        $this->ocorrenciaAnexos[] = $ocorrenciaAnexos;

        return $this;
    }

    /**
     * Remove ocorrenciaAnexos
     *
     * @param \AppBundle\Entity\RcsvArquivos $ocorrenciaAnexos
     */
    public function removeOcorrenciaAnexo(\AppBundle\Entity\RcsvArquivos $ocorrenciaAnexos)
    {
        $this->ocorrenciaAnexos->removeElement($ocorrenciaAnexos);
    }

    /**
     * Get ocorrenciaAnexos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOcorrenciaAnexos()
    {
        return $this->ocorrenciaAnexos;
    }

    /**
     * Remove ocorrenciaControle
     *
     * @param \AppBundle\Entity\RcsvControle $ocorrenciaControle
     */
    public function removeOcorrenciaControle(\AppBundle\Entity\RcsvControle $ocorrenciaControle)
    {
        $this->ocorrenciaControle->removeElement($ocorrenciaControle);
    }

    /**
     * Get ocorrenciaControle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOcorrenciaControle()
    {
        return $this->ocorrenciaControle;
    }
   

    /**
     * Set rcsvHistoricoResumido
     *
     * @param string $rcsvHistoricoResumido
     *
     * @return RcsvOcorrencia
     */
    public function setRcsvHistoricoResumido($rcsvHistoricoResumido)
    {
        $this->rcsvHistoricoResumido = $rcsvHistoricoResumido;

        return $this;
    }

    /**
     * Get rcsvHistoricoResumido
     *
     * @return string
     */
    public function getRcsvHistoricoResumido()
    {
        return $this->rcsvHistoricoResumido;
    }

    /**
     * Set publicado
     *
     * @param integer $publicado
     *
     * @return RcsvOcorrencia
     */
    public function setPublicado($publicado)
    {
        $this->publicado = $publicado;

        return $this;
    }

    /**
     * Get publicado
     *
     * @return integer
     */
    public function getPublicado()
    {
        return $this->publicado;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Controle
 *
 * @ORM\Table(name="controle", indexes={@ORM\Index(name="fk_rcsv_controle_ocorrencia_rcsv1_idx", columns={"ocorrencia_id"})})
 * @ORM\Entity
 */
class Controle
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
     * @ORM\Column(name="rcsv_despacho", type="string", length=150, nullable=true)
     */
    private $rcsvDespacho;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dia_encaminhamento", type="date", nullable=true)
     */
    private $diaEncaminhamento;

    /**
     * @var string
     *
     * @ORM\Column(name="obs_encaminhamento", type="text", length=65535, nullable=true)
     */
    private $obsEncaminhamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="ocorrencia_id", type="integer", nullable=true)
     */
    private $ocorrenciaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registrado_em", type="datetime", nullable=true)
     */
    private $registradoEm;

    /**
     * @var string
     *
     * @ORM\Column(name="anexo_controle", type="string", length=255, nullable=true)
     */
    private $anexoControle;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;



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
     * Set rcsvDespacho
     *
     * @param string $rcsvDespacho
     * @return Controle
     */
    public function setRcsvDespacho($rcsvDespacho)
    {
        $this->rcsvDespacho = $rcsvDespacho;

        return $this;
    }

    /**
     * Get rcsvDespacho
     *
     * @return string 
     */
    public function getRcsvDespacho()
    {
        return $this->rcsvDespacho;
    }

    /**
     * Set diaEncaminhamento
     *
     * @param \DateTime $diaEncaminhamento
     * @return Controle
     */
    public function setDiaEncaminhamento($diaEncaminhamento)
    {
        $this->diaEncaminhamento = $diaEncaminhamento;

        return $this;
    }

    /**
     * Get diaEncaminhamento
     *
     * @return \DateTime 
     */
    public function getDiaEncaminhamento()
    {
        return $this->diaEncaminhamento;
    }

    /**
     * Set obsEncaminhamento
     *
     * @param string $obsEncaminhamento
     * @return Controle
     */
    public function setObsEncaminhamento($obsEncaminhamento)
    {
        $this->obsEncaminhamento = $obsEncaminhamento;

        return $this;
    }

    /**
     * Get obsEncaminhamento
     *
     * @return string 
     */
    public function getObsEncaminhamento()
    {
        return $this->obsEncaminhamento;
    }

    /**
     * Set ocorrenciaId
     *
     * @param integer $ocorrenciaId
     * @return Controle
     */
    public function setOcorrenciaId($ocorrenciaId)
    {
        $this->ocorrenciaId = $ocorrenciaId;

        return $this;
    }

    /**
     * Get ocorrenciaId
     *
     * @return integer 
     */
    public function getOcorrenciaId()
    {
        return $this->ocorrenciaId;
    }

    /**
     * Set registradoEm
     *
     * @param \DateTime $registradoEm
     * @return Controle
     */
    public function setRegistradoEm($registradoEm)
    {
        $this->registradoEm = $registradoEm;

        return $this;
    }

    /**
     * Get registradoEm
     *
     * @return \DateTime 
     */
    public function getRegistradoEm()
    {
        return $this->registradoEm;
    }

    /**
     * Set anexoControle
     *
     * @param string $anexoControle
     * @return Controle
     */
    public function setAnexoControle($anexoControle)
    {
        $this->anexoControle = $anexoControle;

        return $this;
    }

    /**
     * Get anexoControle
     *
     * @return string 
     */
    public function getAnexoControle()
    {
        return $this->anexoControle;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Controle
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Controle
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Controle
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}

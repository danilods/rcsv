<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvArquivos
 *
 * @ORM\Table(name="rcsv_arquivos", indexes={@ORM\Index(name="fk_rcsv_arquivos_rcsv_ocorrencia1_idx", columns={"ocorrencia_id"})})
 * @ORM\Entity
 */
class RcsvArquivos
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
     * @ORM\Column(name="tipo", type="string", length=45, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_arquivo", type="string", length=45, nullable=true)
     */
    private $nomeArquivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var \RcsvOcorrencia
     *
     * @ORM\ManyToOne(targetEntity="RcsvOcorrencia")
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
     * Set tipo
     *
     * @param string $tipo
     * @return RcsvArquivos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nomeArquivo
     *
     * @param string $nomeArquivo
     * @return RcsvArquivos
     */
    public function setNomeArquivo($nomeArquivo)
    {
        $this->nomeArquivo = $nomeArquivo;

        return $this;
    }

    /**
     * Get nomeArquivo
     *
     * @return string 
     */
    public function getNomeArquivo()
    {
        return $this->nomeArquivo;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return RcsvArquivos
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set ocorrencia
     *
     * @param \AppBundle\Entity\RcsvOcorrencia $ocorrencia
     * @return RcsvArquivos
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

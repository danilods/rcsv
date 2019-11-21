<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaClassificacao
 *
 * @ORM\Table(name="rcsv_taxonomia_classificacao", indexes={@ORM\Index(name="fk_rcsv_taxonomia_classificacao_rscv_area_ocorrencia1_idx", columns={"area_ocorrencia_id"})})
 * @ORM\Entity
 */
class RcsvTaxonomiaClassificacao
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
     * @ORM\Column(name="classificacao_nome", type="string", length=100, nullable=true)
     */
    private $classificacaoNome;

    /**
     * @var string
     *
     * @ORM\Column(name="area_ocorrencia", type="string", length=45, nullable=true)
     */
    private $areaOcorrencia;

    /**
     * @var \RcsvAreaOcorrencia
     *
     * @ORM\ManyToOne(targetEntity="RcsvAreaOcorrencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_ocorrencia_id", referencedColumnName="id")
     * })
     */
    private $areaOcorrencia2;



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
     * Set classificacaoNome
     *
     * @param string $classificacaoNome
     * @return RcsvTaxonomiaClassificacao
     */
    public function setClassificacaoNome($classificacaoNome)
    {
        $this->classificacaoNome = $classificacaoNome;

        return $this;
    }

    /**
     * Get classificacaoNome
     *
     * @return string 
     */
    public function getClassificacaoNome()
    {
        return $this->classificacaoNome;
    }

    /**
     * Set areaOcorrencia
     *
     * @param string $areaOcorrencia
     * @return RcsvTaxonomiaClassificacao
     */
    public function setAreaOcorrencia($areaOcorrencia)
    {
        $this->areaOcorrencia = $areaOcorrencia;

        return $this;
    }

    /**
     * Get areaOcorrencia
     *
     * @return string 
     */
    public function getAreaOcorrencia()
    {
        return $this->areaOcorrencia;
    }

    /**
     * Set areaOcorrencia2
     *
     * @param \AppBundle\Entity\RcsvAreaOcorrencia $areaOcorrencia2
     * @return RcsvTaxonomiaClassificacao
     */
    public function setAreaOcorrencia2(\AppBundle\Entity\RcsvAreaOcorrencia $areaOcorrencia2 = null)
    {
        $this->areaOcorrencia2 = $areaOcorrencia2;

        return $this;
    }

    /**
     * Get areaOcorrencia2
     *
     * @return \AppBundle\Entity\RcsvAreaOcorrencia 
     */
    public function getAreaOcorrencia2()
    {
        return $this->areaOcorrencia2;
    }
     public function __toString() {
        return $this->getAreaOcorrencia()." - ".$this->getClassificacaoNome();
    }
}

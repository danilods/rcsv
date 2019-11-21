<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcorrenciaPartesAeronaveAtingida
 *
 * @ORM\Table(name="ocorrencia_partes_aeronave_atingida", indexes={@ORM\Index(name="fk_ocorrencia_partes_aeronave_atingida_ocorrencia_aeronave1_idx", columns={"ocorrencia_aeronave_id"}), @ORM\Index(name="fk_ocorrencia_partes_aeronave_atingida_taxonomia_partes_aer_idx", columns={"taxonomia_partes_aeronave_id"})})
 * @ORM\Entity
 */
class OcorrenciaPartesAeronaveAtingida
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
     * @ORM\Column(name="danos", type="string", length=45, nullable=true)
     */
    private $danos;

    /**
     * @var \BalaoOcorrenciaAeronave
     *
     * @ORM\ManyToOne(targetEntity="BalaoOcorrenciaAeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_aeronave_id", referencedColumnName="id")
     * })
     */
    private $ocorrenciaAeronave;

    /**
     * @var \TaxonomiaPartesAeronave
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaPartesAeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="taxonomia_partes_aeronave_id", referencedColumnName="id")
     * })
     */
    private $taxonomiaPartesAeronave;



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
     * Set danos
     *
     * @param string $danos
     * @return OcorrenciaPartesAeronaveAtingida
     */
    public function setDanos($danos)
    {
        $this->danos = $danos;

        return $this;
    }

    /**
     * Get danos
     *
     * @return string 
     */
    public function getDanos()
    {
        return $this->danos;
    }

    /**
     * Set ocorrenciaAeronave
     *
     * @param \AppBundle\Entity\BalaoOcorrenciaAeronave $ocorrenciaAeronave
     * @return OcorrenciaPartesAeronaveAtingida
     */
    public function setOcorrenciaAeronave(\AppBundle\Entity\BalaoOcorrenciaAeronave $ocorrenciaAeronave = null)
    {
        $this->ocorrenciaAeronave = $ocorrenciaAeronave;

        return $this;
    }

    /**
     * Get ocorrenciaAeronave
     *
     * @return \AppBundle\Entity\BalaoOcorrenciaAeronave 
     */
    public function getOcorrenciaAeronave()
    {
        return $this->ocorrenciaAeronave;
    }

    /**
     * Set taxonomiaPartesAeronave
     *
     * @param \AppBundle\Entity\TaxonomiaPartesAeronave $taxonomiaPartesAeronave
     * @return OcorrenciaPartesAeronaveAtingida
     */
    public function setTaxonomiaPartesAeronave(\AppBundle\Entity\TaxonomiaPartesAeronave $taxonomiaPartesAeronave = null)
    {
        $this->taxonomiaPartesAeronave = $taxonomiaPartesAeronave;

        return $this;
    }

    /**
     * Get taxonomiaPartesAeronave
     *
     * @return \AppBundle\Entity\TaxonomiaPartesAeronave 
     */
    public function getTaxonomiaPartesAeronave()
    {
        return $this->taxonomiaPartesAeronave;
    }
}

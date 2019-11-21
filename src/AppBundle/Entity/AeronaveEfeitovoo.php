<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AeronaveEfeitovoo
 *
 * @ORM\Table(name="aeronave_efeitovoo", indexes={@ORM\Index(name="fk_aeronave_efeitovoo_taxonomia_efeitovoo1_idx", columns={"efeitovoo_id"}), @ORM\Index(name="fk_aeronave_efeitovoo_ocorrencia_aeronave_fauna1_idx", columns={"aeronave_fauna_id"})})
 * @ORM\Entity
 */
class AeronaveEfeitovoo
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
     * @ORM\Column(name="outros_efeitos", type="string", length=100, nullable=true)
     */
    private $outrosEfeitos;

    /**
     * @var \TaxonomiaEfeitovoo
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaEfeitovoo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="efeitovoo_id", referencedColumnName="id")
     * })
     */
    private $efeitovoo;

    /**
     * @var \FaunaOcorrenciaAeronave
     *
     * @ORM\ManyToOne(targetEntity="FaunaOcorrenciaAeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aeronave_fauna_id", referencedColumnName="id")
     * })
     */
    private $aeronaveFauna;



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
     * Set outrosEfeitos
     *
     * @param string $outrosEfeitos
     * @return AeronaveEfeitovoo
     */
    public function setOutrosEfeitos($outrosEfeitos)
    {
        $this->outrosEfeitos = $outrosEfeitos;

        return $this;
    }

    /**
     * Get outrosEfeitos
     *
     * @return string 
     */
    public function getOutrosEfeitos()
    {
        return $this->outrosEfeitos;
    }

    /**
     * Set efeitovoo
     *
     * @param \AppBundle\Entity\TaxonomiaEfeitovoo $efeitovoo
     * @return AeronaveEfeitovoo
     */
    public function setEfeitovoo(\AppBundle\Entity\TaxonomiaEfeitovoo $efeitovoo = null)
    {
        $this->efeitovoo = $efeitovoo;

        return $this;
    }

    /**
     * Get efeitovoo
     *
     * @return \AppBundle\Entity\TaxonomiaEfeitovoo 
     */
    public function getEfeitovoo()
    {
        return $this->efeitovoo;
    }

    /**
     * Set aeronaveFauna
     *
     * @param \AppBundle\Entity\FaunaOcorrenciaAeronave $aeronaveFauna
     * @return AeronaveEfeitovoo
     */
    public function setAeronaveFauna(\AppBundle\Entity\FaunaOcorrenciaAeronave $aeronaveFauna = null)
    {
        $this->aeronaveFauna = $aeronaveFauna;

        return $this;
    }

    /**
     * Get aeronaveFauna
     *
     * @return \AppBundle\Entity\FaunaOcorrenciaAeronave 
     */
    public function getAeronaveFauna()
    {
        return $this->aeronaveFauna;
    }
     public function __toString() {
        return $this->outrosEfeitos;
    }
}

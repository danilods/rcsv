<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaAeronaveMotor
 *
 * @ORM\Table(name="fauna_aeronave_motor", indexes={@ORM\Index(name="fk_fauna_aeronave_motor_taxonomia_motor_geral1_idx", columns={"taxonomia_motor_geral_id"}), @ORM\Index(name="fk_fauna_aeronave_motor_ocorrencia_aeronave_fauna1_idx", columns={"ocorrencia_aeronave_fauna_id"})})
 * @ORM\Entity
 */
class FaunaAeronaveMotor
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
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var \FaunaOcorrenciaAeronave
     *
     * @ORM\ManyToOne(targetEntity="FaunaOcorrenciaAeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_aeronave_fauna_id", referencedColumnName="id")
     * })
     */
    private $ocorrenciaAeronaveFauna;

    /**
     * @var \TaxonomiaMotorGeral
     *
     * @ORM\ManyToOne(targetEntity="TaxonomiaMotorGeral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="taxonomia_motor_geral_id", referencedColumnName="id")
     * })
     */
    private $taxonomiaMotorGeral;



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
     * Set quantidade
     *
     * @param integer $quantidade
     * @return FaunaAeronaveMotor
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer 
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set ocorrenciaAeronaveFauna
     *
     * @param \AppBundle\Entity\FaunaOcorrenciaAeronave $ocorrenciaAeronaveFauna
     * @return FaunaAeronaveMotor
     */
    public function setOcorrenciaAeronaveFauna(\AppBundle\Entity\FaunaOcorrenciaAeronave $ocorrenciaAeronaveFauna = null)
    {
        $this->ocorrenciaAeronaveFauna = $ocorrenciaAeronaveFauna;

        return $this;
    }

    /**
     * Get ocorrenciaAeronaveFauna
     *
     * @return \AppBundle\Entity\FaunaOcorrenciaAeronave 
     */
    public function getOcorrenciaAeronaveFauna()
    {
        return $this->ocorrenciaAeronaveFauna;
    }

    /**
     * Set taxonomiaMotorGeral
     *
     * @param \AppBundle\Entity\TaxonomiaMotorGeral $taxonomiaMotorGeral
     * @return FaunaAeronaveMotor
     */
    public function setTaxonomiaMotorGeral(\AppBundle\Entity\TaxonomiaMotorGeral $taxonomiaMotorGeral = null)
    {
        $this->taxonomiaMotorGeral = $taxonomiaMotorGeral;

        return $this;
    }

    /**
     * Get taxonomiaMotorGeral
     *
     * @return \AppBundle\Entity\TaxonomiaMotorGeral 
     */
    public function getTaxonomiaMotorGeral()
    {
        return $this->taxonomiaMotorGeral;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tripulante
 *
 * @ORM\Table(name="tripulante", indexes={@ORM\Index(name="fk_temp_tripulante_temp_aeronave1_idx", columns={"temp_aeronave_id"})})
 * @ORM\Entity
 */
class Tripulante
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
     * @ORM\Column(name="funcao_tripulante", type="string", length=45, nullable=true)
     */
    private $funcaoTripulante;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_anac", type="integer", nullable=true)
     */
    private $codAnac;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_tripulante", type="string", length=45, nullable=true)
     */
    private $nomeTripulante;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_aeronave_id", type="integer", nullable=false)
     */
    private $tempAeronaveId;



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
     * Set funcaoTripulante
     *
     * @param string $funcaoTripulante
     * @return Tripulante
     */
    public function setFuncaoTripulante($funcaoTripulante)
    {
        $this->funcaoTripulante = $funcaoTripulante;

        return $this;
    }

    /**
     * Get funcaoTripulante
     *
     * @return string 
     */
    public function getFuncaoTripulante()
    {
        return $this->funcaoTripulante;
    }

    /**
     * Set codAnac
     *
     * @param integer $codAnac
     * @return Tripulante
     */
    public function setCodAnac($codAnac)
    {
        $this->codAnac = $codAnac;

        return $this;
    }

    /**
     * Get codAnac
     *
     * @return integer 
     */
    public function getCodAnac()
    {
        return $this->codAnac;
    }

    /**
     * Set nomeTripulante
     *
     * @param string $nomeTripulante
     * @return Tripulante
     */
    public function setNomeTripulante($nomeTripulante)
    {
        $this->nomeTripulante = $nomeTripulante;

        return $this;
    }

    /**
     * Get nomeTripulante
     *
     * @return string 
     */
    public function getNomeTripulante()
    {
        return $this->nomeTripulante;
    }

    /**
     * Set tempAeronaveId
     *
     * @param integer $tempAeronaveId
     * @return Tripulante
     */
    public function setTempAeronaveId($tempAeronaveId)
    {
        $this->tempAeronaveId = $tempAeronaveId;

        return $this;
    }

    /**
     * Get tempAeronaveId
     *
     * @return integer 
     */
    public function getTempAeronaveId()
    {
        return $this->tempAeronaveId;
    }
}

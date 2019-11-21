<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvAreaOcorrencia
 *
 * @ORM\Table(name="rcsv_area_ocorrencia")
 * @ORM\Entity
 */
class RcsvAreaOcorrencia
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
     * @ORM\Column(name="area_ocorrencia", type="string", length=100, nullable=true)
     */
    private $areaOcorrencia;



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
     * Set areaOcorrencia
     *
     * @param string $areaOcorrencia
     * @return RcsvAreaOcorrencia
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
    
     public function __toString() {
        return $this->areaOcorrencia;
    }
}

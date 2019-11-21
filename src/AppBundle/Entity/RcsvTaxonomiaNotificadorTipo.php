<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaNotificadorTipo
 *
 * @ORM\Table(name="rcsv_taxonomia_notificador_tipo")
 * @ORM\Entity
 */
class RcsvTaxonomiaNotificadorTipo
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
     * @ORM\Column(name="tipo_notificador", type="string", length=100, nullable=true)
     */
    private $tipoNotificador;



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
     * Set tipoNotificador
     *
     * @param string $tipoNotificador
     * @return RcsvTaxonomiaNotificadorTipo
     */
    public function setTipoNotificador($tipoNotificador)
    {
        $this->tipoNotificador = $tipoNotificador;

        return $this;
    }

    /**
     * Get tipoNotificador
     *
     * @return string 
     */
    public function getTipoNotificador()
    {
        return $this->tipoNotificador;
    }
    
     public function __toString() {
        return $this->tipoNotificador;
    }
}

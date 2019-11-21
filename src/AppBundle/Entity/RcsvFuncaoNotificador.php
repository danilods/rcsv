<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * RcsvFuncaoNotificador
 *
 * @ORM\Table(name="rcsv_funcao_notificador", indexes={@ORM\Index(name="fk_taxonomia_funcao_tipo_notificador_taxonomia_notificador__idx", columns={"notificador_tipo_id"})})
 * @ORM\Entity
 */
class RcsvFuncaoNotificador
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
     * @ORM\Column(name="nome_funcao", type="string", length=100, nullable=true)
     */
    private $nomeFuncao;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria_notificador", type="string", length=45, nullable=true)
     */
    private $categoriaNotificador;

    /**
     * @var \RcsvTaxonomiaNotificadorTipo
     *
     * @ORM\ManyToOne(targetEntity="RcsvTaxonomiaNotificadorTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notificador_tipo_id", referencedColumnName="id")
     * })
     */
    private $notificadorTipo;



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
     * Set nomeFuncao
     *
     * @param string $nomeFuncao
     * @return RcsvFuncaoNotificador
     */
    public function setNomeFuncao($nomeFuncao)
    {
        $this->nomeFuncao = $nomeFuncao;

        return $this;
    }

    /**
     * Get nomeFuncao
     *
     * @return string 
     */
    public function getNomeFuncao()
    {
        return $this->nomeFuncao;
    }

    /**
     * Set categoriaNotificador
     *
     * @param string $categoriaNotificador
     * @return RcsvFuncaoNotificador
     */
    public function setCategoriaNotificador($categoriaNotificador)
    {
        $this->categoriaNotificador = $categoriaNotificador;

        return $this;
    }

    /**
     * Get categoriaNotificador
     *
     * @return string 
     */
    public function getCategoriaNotificador()
    {
        return $this->categoriaNotificador;
    }

    /**
     * Set notificadorTipo
     *
     * @param \AppBundle\Entity\RcsvTaxonomiaNotificadorTipo $notificadorTipo
     * @return RcsvFuncaoNotificador
     */
    public function setNotificadorTipo(\AppBundle\Entity\RcsvTaxonomiaNotificadorTipo $notificadorTipo = null)
    {
        $this->notificadorTipo = $notificadorTipo;

        return $this;
    }

    /**
     * Get notificadorTipo
     *
     * @return \AppBundle\Entity\RcsvTaxonomiaNotificadorTipo 
     */
    public function getNotificadorTipo()
    {
        return $this->notificadorTipo;
    }
     public function __toString() {
        return $this->getCategoriaNotificador()." - ".$this->getNomeFuncao();
    }
}

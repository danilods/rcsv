<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesao
 *
 * @ORM\Table(name="lesao", indexes={@ORM\Index(name="fk_temp_lesao_temp_aeronave1_idx", columns={"temp_aeronave_id"})})
 * @ORM\Entity
 */
class Lesao
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
     * @ORM\Column(name="grau_lesao", type="string", length=45, nullable=true)
     */
    private $grauLesao;

    /**
     * @var string
     *
     * @ORM\Column(name="funcao_bordo", type="string", length=45, nullable=true)
     */
    private $funcaoBordo;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

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
     * Set grauLesao
     *
     * @param string $grauLesao
     * @return Lesao
     */
    public function setGrauLesao($grauLesao)
    {
        $this->grauLesao = $grauLesao;

        return $this;
    }

    /**
     * Get grauLesao
     *
     * @return string 
     */
    public function getGrauLesao()
    {
        return $this->grauLesao;
    }

    /**
     * Set funcaoBordo
     *
     * @param string $funcaoBordo
     * @return Lesao
     */
    public function setFuncaoBordo($funcaoBordo)
    {
        $this->funcaoBordo = $funcaoBordo;

        return $this;
    }

    /**
     * Get funcaoBordo
     *
     * @return string 
     */
    public function getFuncaoBordo()
    {
        return $this->funcaoBordo;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     * @return Lesao
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
     * Set tempAeronaveId
     *
     * @param integer $tempAeronaveId
     * @return Lesao
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

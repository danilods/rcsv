<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AeronaveCategoria
 *
 * @ORM\Table(name="aeronave_categoria", uniqueConstraints={@ORM\UniqueConstraint(name="nome", columns={"nome"}), @ORM\UniqueConstraint(name="nome_codigo", columns={"nome_codigo"})})
 * @ORM\Entity
 */
class AeronaveCategoria
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_codigo", type="string", length=10, nullable=false)
     */
    private $nomeCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="regulamento", type="string", length=40, nullable=false)
     */
    private $regulamento;

    /**
     * @var string
     *
     * @ORM\Column(name="aviacao", type="string", length=25, nullable=false)
     */
    private $aviacao;

    /**
     * @var string
     *
     * @ORM\Column(name="abrangencia", type="string", length=25, nullable=false)
     */
    private $abrangencia;



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
     * Set nome
     *
     * @param string $nome
     * @return AeronaveCategoria
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set nomeCodigo
     *
     * @param string $nomeCodigo
     * @return AeronaveCategoria
     */
    public function setNomeCodigo($nomeCodigo)
    {
        $this->nomeCodigo = $nomeCodigo;

        return $this;
    }

    /**
     * Get nomeCodigo
     *
     * @return string 
     */
    public function getNomeCodigo()
    {
        return $this->nomeCodigo;
    }

    /**
     * Set regulamento
     *
     * @param string $regulamento
     * @return AeronaveCategoria
     */
    public function setRegulamento($regulamento)
    {
        $this->regulamento = $regulamento;

        return $this;
    }

    /**
     * Get regulamento
     *
     * @return string 
     */
    public function getRegulamento()
    {
        return $this->regulamento;
    }

    /**
     * Set aviacao
     *
     * @param string $aviacao
     * @return AeronaveCategoria
     */
    public function setAviacao($aviacao)
    {
        $this->aviacao = $aviacao;

        return $this;
    }

    /**
     * Get aviacao
     *
     * @return string 
     */
    public function getAviacao()
    {
        return $this->aviacao;
    }

    /**
     * Set abrangencia
     *
     * @param string $abrangencia
     * @return AeronaveCategoria
     */
    public function setAbrangencia($abrangencia)
    {
        $this->abrangencia = $abrangencia;

        return $this;
    }

    /**
     * Get abrangencia
     *
     * @return string 
     */
    public function getAbrangencia()
    {
        return $this->abrangencia;
    }
    
     public function __toString() {
        return $this->getNome()."";
    }
}

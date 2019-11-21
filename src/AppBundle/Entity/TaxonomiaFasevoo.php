<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaFasevoo
 *
 * @ORM\Table(name="taxonomia_fasevoo", uniqueConstraints={@ORM\UniqueConstraint(name="nome", columns={"nome"})})
 * @ORM\Entity
 */
class TaxonomiaFasevoo
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
     * @ORM\Column(name="nome_codigo", type="string", length=6, nullable=false)
     */
    private $nomeCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="fase_icao", type="string", length=100, nullable=false)
     */
    private $faseIcao;



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
     * @return TaxonomiaFasevoo
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
     * @return TaxonomiaFasevoo
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
     * Set faseIcao
     *
     * @param string $faseIcao
     * @return TaxonomiaFasevoo
     */
    public function setFaseIcao($faseIcao)
    {
        $this->faseIcao = $faseIcao;

        return $this;
    }

    /**
     * Get faseIcao
     *
     * @return string 
     */
    public function getFaseIcao()
    {
        return $this->faseIcao;
    }
     public function __toString() {
        return $this->nome;
    }
}

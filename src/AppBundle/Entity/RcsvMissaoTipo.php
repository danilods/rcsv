<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvMissaoTipo
 *
 * @ORM\Table(name="rcsv_missao_tipo")
 * @ORM\Entity
 */
class RcsvMissaoTipo
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
     * @ORM\Column(name="nome_tipo_missao", type="string", length=100, nullable=true)
     */
    private $nomeTipoMissao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=true)
     */
    private $descricao;



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
     * Set tipoMissao
     *
     * @param string $tipoMissao
     * @return RcsvTaxonomiaMissao
     */
    public function setNomeTipoMissao($nomeTipoMissao)
    {
        $this->nomeTipoMissao = $nomeTipoMissao;

        return $this;
    }

    /**
     * Get tipoMissao
     *
     * @return string 
     */
    public function getNomeTipoMissao()
    {
        return $this->nomeTipoMissao;
    }

    /**
     * Set descricaoMissao
     *
     * @param string $descricaoMissao
     * @return RcsvTaxonomiaMissao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricaoMissao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
     public function __toString() {
        return $this->nomeTipoMissao."";
    }
}

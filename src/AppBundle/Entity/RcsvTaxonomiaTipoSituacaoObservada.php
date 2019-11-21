<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaSituacaoObservada
 *
 * @ORM\Table(name="taxonomia_rcsv_tipo_situacao_observada")
 * @ORM\Entity
 */
class RcsvTaxonomiaTipoSituacaoObservada
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
     * @ORM\Column(name="nome_situacao", type="string", length=100, nullable=true)
     */
    private $nomeSituacao;

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
     * Set nomeSituacao
     *
     * @param string $nomeSituacao
     * @return RcsvTaxonomiaSituacaoObservada
     */
    public function setNomeSituacao($nomeSituacao)
    {
        $this->nomeSituacao = $nomeSituacao;

        return $this;
    }

    /**
     * Get nomeSituacao
     *
     * @return string 
     */
    public function getNomeSituacao()
    {
        return $this->nomeSituacao;
    }

    /**
     * Set descricaoSituacao
     *
     * @param string $descricaoSituacao
     * @return RcsvTaxonomiaSituacaoObservada
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricaoSituacao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
    
     public function __toString() {
        return $this->nomeSituacao."";
    }
}

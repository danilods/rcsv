<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaClassificacaoFamilia
 *
 * @ORM\Table(name="fauna_classificacao_familia", indexes={@ORM\Index(name="fk_classificacao_familia_classificacao_ordem1_idx", columns={"classificacao_ordem_id"})})
 * @ORM\Entity
 */
class FaunaClassificacaoFamilia
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
     * @ORM\Column(name="nome_familia", type="string", length=100, nullable=true)
     */
    private $nomeFamilia;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=45, nullable=true)
     */
    private $observacao;

    /**
     * @var \FaunaClassificacaoOrdem
     *
     * @ORM\ManyToOne(targetEntity="FaunaClassificacaoOrdem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classificacao_ordem_id", referencedColumnName="id")
     * })
     */
    private $classificacaoOrdem;



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
     * Set nomeFamilia
     *
     * @param string $nomeFamilia
     * @return FaunaClassificacaoFamilia
     */
    public function setNomeFamilia($nomeFamilia)
    {
        $this->nomeFamilia = $nomeFamilia;

        return $this;
    }

    /**
     * Get nomeFamilia
     *
     * @return string 
     */
    public function getNomeFamilia()
    {
        return $this->nomeFamilia;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return FaunaClassificacaoFamilia
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string 
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set classificacaoOrdem
     *
     * @param \AppBundle\Entity\FaunaClassificacaoOrdem $classificacaoOrdem
     * @return FaunaClassificacaoFamilia
     */
    public function setClassificacaoOrdem(\AppBundle\Entity\FaunaClassificacaoOrdem $classificacaoOrdem = null)
    {
        $this->classificacaoOrdem = $classificacaoOrdem;

        return $this;
    }

    /**
     * Get classificacaoOrdem
     *
     * @return \AppBundle\Entity\FaunaClassificacaoOrdem 
     */
    public function getClassificacaoOrdem()
    {
        return $this->classificacaoOrdem;
    }
}

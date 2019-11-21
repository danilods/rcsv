<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaClassificacaoOrdem
 *
 * @ORM\Table(name="fauna_classificacao_ordem", indexes={@ORM\Index(name="fk_classificacao_ordem_classificacao_classe1_idx", columns={"classificacao_classe_id"})})
 * @ORM\Entity
 */
class FaunaClassificacaoOrdem
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
     * @ORM\Column(name="nome_ordem", type="string", length=100, nullable=true)
     */
    private $nomeOrdem;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=100, nullable=true)
     */
    private $observacao;

    /**
     * @var \FaunaClassificacaoClasse
     *
     * @ORM\ManyToOne(targetEntity="FaunaClassificacaoClasse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="classificacao_classe_id", referencedColumnName="id")
     * })
     */
    private $classificacaoClasse;



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
     * Set nomeOrdem
     *
     * @param string $nomeOrdem
     * @return FaunaClassificacaoOrdem
     */
    public function setNomeOrdem($nomeOrdem)
    {
        $this->nomeOrdem = $nomeOrdem;

        return $this;
    }

    /**
     * Get nomeOrdem
     *
     * @return string 
     */
    public function getNomeOrdem()
    {
        return $this->nomeOrdem;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return FaunaClassificacaoOrdem
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
     * Set classificacaoClasse
     *
     * @param \AppBundle\Entity\FaunaClassificacaoClasse $classificacaoClasse
     * @return FaunaClassificacaoOrdem
     */
    public function setClassificacaoClasse(\AppBundle\Entity\FaunaClassificacaoClasse $classificacaoClasse = null)
    {
        $this->classificacaoClasse = $classificacaoClasse;

        return $this;
    }

    /**
     * Get classificacaoClasse
     *
     * @return \AppBundle\Entity\FaunaClassificacaoClasse 
     */
    public function getClassificacaoClasse()
    {
        return $this->classificacaoClasse;
    }
}

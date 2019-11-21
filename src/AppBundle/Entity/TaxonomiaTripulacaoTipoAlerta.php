<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxonomiaTripulacaoTipoAlerta
 *
 * @ORM\Table(name="taxonomia_tripulacao_tipo_alerta")
 * @ORM\Entity
 */
class TaxonomiaTripulacaoTipoAlerta
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
     * @ORM\Column(name="nome_alerta", type="string", length=100, nullable=true)
     */
    private $nomeAlerta;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_alerta", type="string", length=100, nullable=true)
     */
    private $descricaoAlerta;

    /**
     * @var string
     *
     * @ORM\Column(name="codificacao_alerta", type="string", length=45, nullable=true)
     */
    private $codificacaoAlerta;



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
     * Set nomeAlerta
     *
     * @param string $nomeAlerta
     * @return TaxonomiaTripulacaoTipoAlerta
     */
    public function setNomeAlerta($nomeAlerta)
    {
        $this->nomeAlerta = $nomeAlerta;

        return $this;
    }

    /**
     * Get nomeAlerta
     *
     * @return string 
     */
    public function getNomeAlerta()
    {
        return $this->nomeAlerta;
    }

    /**
     * Set descricaoAlerta
     *
     * @param string $descricaoAlerta
     * @return TaxonomiaTripulacaoTipoAlerta
     */
    public function setDescricaoAlerta($descricaoAlerta)
    {
        $this->descricaoAlerta = $descricaoAlerta;

        return $this;
    }

    /**
     * Get descricaoAlerta
     *
     * @return string 
     */
    public function getDescricaoAlerta()
    {
        return $this->descricaoAlerta;
    }

    /**
     * Set codificacaoAlerta
     *
     * @param string $codificacaoAlerta
     * @return TaxonomiaTripulacaoTipoAlerta
     */
    public function setCodificacaoAlerta($codificacaoAlerta)
    {
        $this->codificacaoAlerta = $codificacaoAlerta;

        return $this;
    }

    /**
     * Get codificacaoAlerta
     *
     * @return string 
     */
    public function getCodificacaoAlerta()
    {
        return $this->codificacaoAlerta;
    }
}

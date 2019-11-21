<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaunaClassificacaoClasse
 *
 * @ORM\Table(name="fauna_classificacao_classe")
 * @ORM\Entity
 */
class FaunaClassificacaoClasse
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
     * @ORM\Column(name="nome_classe", type="string", length=100, nullable=true)
     */
    private $nomeClasse;



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
     * Set nomeClasse
     *
     * @param string $nomeClasse
     * @return FaunaClassificacaoClasse
     */
    public function setNomeClasse($nomeClasse)
    {
        $this->nomeClasse = $nomeClasse;

        return $this;
    }

    /**
     * Get nomeClasse
     *
     * @return string 
     */
    public function getNomeClasse()
    {
        return $this->nomeClasse;
    }
}

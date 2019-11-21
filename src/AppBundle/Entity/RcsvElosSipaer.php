<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvTaxonomiaSituacaoObservada
 *
 * @ORM\Table(name="rcsv_elos_sipaer")
 * @ORM\Entity
 */
class RcsvElosSipaer
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
     * @ORM\Column(name="nome_elo", type="string", length=100, nullable=true)
     */
    private $nomeElo;

    /**
     * @var string
     *
     * @ORM\Column(name="sigla_elo", type="string", length=100, nullable=true)
     */
    private $siglaElo;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="email_elo", type="string", length=100, nullable=true)
     */
    private $emailElo;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="endereco_elo", type="string", length=255, nullable=true)
     */
    private $enderecoElo;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="telefone_elo", type="string", length=255, nullable=true)
     */
    private $telefoneElo;



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
    public function setNomeElo($nomeElo)
    {
        $this->nomeElo = $nomeElo;

        return $this;
    }

    /**
     * Get nomeSituacao
     *
     * @return string 
     */
    public function getNomeElo()
    {
        return $this->nomeElo;
    }

    /**
     * Set nomeSituacao
     *
     * @param string $nomeSituacao
     * @return RcsvTaxonomiaSituacaoObservada
     */
    public function setSiglaElo($siglaElo)
    {
        $this->siglaElo = $siglaElo;

        return $this;
    }

    /**
     * Get nomeSituacao
     *
     * @return string 
     */
    public function getSiglaElo()
    {
        return $this->siglaElo;
    }
    
	
	public function setEmailElo($emailElo)
    {
        $this->emailElo = $emailElo;

        return $this;
    }

    /**
     * Get nomeSituacao
     *
     * @return string 
     */
    public function getEmailElo()
    {
        return $this->emailElo;
    }
	
	public function setEnderecoElo($enderecoElo)
    {
        $this->enderecoElo = $enderecoElo;

        return $this;
    }

    /**
     * Get nomeSituacao
     *
     * @return string 
     */
    public function getEnderecoElo()
    {
        return $this->enderecoElo;
    }
	
	public function setTelefoneElo($telefoneElo)
    {
        $this->telefoneElo = $telefoneElo;

        return $this;
    }

    /**
     * Get nomeSituacao
     *
     * @return string 
     */
    public function getTelefoneElo()
    {
        return $this->telefoneElo;
    }
	
     public function __toString() {
        return $this->getNomeElo()."";
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeografiaCidade
 *
 * @ORM\Table(name="geografia_cidade", uniqueConstraints={@ORM\UniqueConstraint(name="uf_id", columns={"uf_id", "pais_id", "nome"})}, indexes={@ORM\Index(name="geografia_cidade_d617b6bc", columns={"uf_id"}), @ORM\Index(name="geografia_cidade_de1867db", columns={"pais_id"})})
 * @ORM\Entity
 */
class GeografiaCidade
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
     * @ORM\Column(name="latitude", type="string", length=15, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=15, nullable=false)
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="altitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $altitude;

    /**
     * @var \GeografiaUf
     *
     * @ORM\ManyToOne(targetEntity="GeografiaUf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uf_id", referencedColumnName="id")
     * })
     */
    private $uf;

    /**
     * @var \GeografiaPais
     *
     * @ORM\ManyToOne(targetEntity="GeografiaPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     * })
     */
    private $pais;



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
     * @return GeografiaCidade
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
     * Set latitude
     *
     * @param string $latitude
     * @return GeografiaCidade
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return GeografiaCidade
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set altitude
     *
     * @param float $altitude
     * @return GeografiaCidade
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return float 
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set uf
     *
     * @param \AppBundle\Entity\GeografiaUf $uf
     * @return GeografiaCidade
     */
    public function setUf(\AppBundle\Entity\GeografiaUf $uf = null)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return \AppBundle\Entity\GeografiaUf 
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set pais
     *
     * @param \AppBundle\Entity\GeografiaPais $pais
     * @return GeografiaCidade
     */
    public function setPais(\AppBundle\Entity\GeografiaPais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \AppBundle\Entity\GeografiaPais 
     */
    public function getPais()
    {
        return $this->pais;
    }
     public function __toString() {
        return $this->nome." - ".$this->getUf();
    }
}

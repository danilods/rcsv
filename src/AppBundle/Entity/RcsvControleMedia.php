<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RcsvControleMedia
 *
 * @ORM\Table(name="rcsv_controle_media", indexes={@ORM\Index(name="media_id", columns={"media_id"}), @ORM\Index(name="rcsv_controle_id", columns={"rcsv_controle_id"})})
 * @ORM\Entity
 */
class RcsvControleMedia
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
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \MediaMedia
     *
     * @ORM\ManyToOne(targetEntity="MediaMedia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     * })
     */
    private $media;

    /**
     * @var \RcsvControle
     *
     * @ORM\ManyToOne(targetEntity="RcsvControle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rcsv_controle_id", referencedColumnName="id")
     * })
     */
    private $rcsvControle;



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
     * Set updated
     *
     * @param \DateTime $updated
     * @return RcsvControleMedia
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set media
     *
     * @param \AppBundle\Entity\MediaMedia $media
     * @return RcsvControleMedia
     */
    public function setMedia(\AppBundle\Entity\MediaMedia $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \AppBundle\Entity\MediaMedia 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set rcsvControle
     *
     * @param \AppBundle\Entity\RcsvControle $rcsvControle
     * @return RcsvControleMedia
     */
    public function setRcsvControle(\AppBundle\Entity\RcsvControle $rcsvControle = null)
    {
        $this->rcsvControle = $rcsvControle;

        return $this;
    }

    /**
     * Get rcsvControle
     *
     * @return \AppBundle\Entity\RcsvControle 
     */
    public function getRcsvControle()
    {
        return $this->rcsvControle;
    }
}

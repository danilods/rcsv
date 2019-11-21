<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * RcsvControle
 *
 * @ORM\Table(name="rcsv_controle", indexes={@ORM\Index(name="fk_rcsv_controle_ocorrencia_rcsv1_idx", columns={"ocorrencia_id"})})
 * @ORM\Entity
 * @Vich\Uploadable
 */
class RcsvControle
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
     * @ORM\Column(name="tipo_documento", type="string", length=255, nullable=true)
     */
    private $tipoDocumento;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dia_encaminhamento", type="date", nullable=true)
     */
    private $diaEncaminhamento;

    /**
     * @var string
     *
     * @ORM\Column(name="obs_encaminhamento", type="text", length=65535, nullable=true)
     */
    private $obsEncaminhamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registrado_em", type="datetime", nullable=true)
     */
    private $registradoEm;

    /**
     * @var \RcsvOcorrencia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RcsvOcorrencia", inversedBy="ocorrenciaControle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorrencia_id", referencedColumnName="id")
     * })
     */
    private $ocorrencia;
    
    /**
     * @ORM\Column(name="image_name", type="string", length=255)
     *
     * @var string
     */
    private $imageName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="image_name")
     * 
     * @var File
     */
    private $imageFile;
    
   
    
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->registradoEm= new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    
    

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
     * Set diaEncaminhamento
     *
     * @param \Date $diaEncaminhamento
     * @return RcsvControle
     */
    public function setDiaEncaminhamento($diaEncaminhamento)
    {
        $this->diaEncaminhamento = $diaEncaminhamento;

        return $this;
    }

    /**
     * Get diaEncaminhamento
     *
     * @return \Date
     */
    public function getDiaEncaminhamento()
    {
        return $this->diaEncaminhamento;
    }

    /**
     * Set obsEncaminhamento
     *
     * @param string $obsEncaminhamento
     * @return RcsvControle
     */
    public function setObsEncaminhamento($obsEncaminhamento)
    {
        $this->obsEncaminhamento = $obsEncaminhamento;

        return $this;
    }

    /**
     * Get obsEncaminhamento
     *
     * @return string 
     */
    public function getObsEncaminhamento()
    {
        return $this->obsEncaminhamento;
    }

    /**
     * Set registradoEm
     *
     * @param \DateTime $registradoEm
     * @return RcsvControle
     */
    public function setRegistradoEm($registradoEm)
    {
        $this->registradoEm = $registradoEm;

        return $this;
    }

    /**
     * Get registradoEm
     *
     * @return \DateTime 
     */
    public function getRegistradoEm()
    {
        return $this->registradoEm;
    }

    /**
     * Set ocorrencia
     *
     * @param \AppBundle\Entity\RcsvOcorrencia $ocorrencia
     * @return RcsvControle
     */
    public function setOcorrencia(\AppBundle\Entity\RcsvOcorrencia $ocorrencia = null)
    {
        $this->ocorrencia = $ocorrencia;

        return $this;
    }

    /**
     * Get ocorrencia
     *
     * @return \AppBundle\Entity\RcsvOcorrencia 
     */
    public function getOcorrencia()
    {
        return $this->ocorrencia;
    }

    /**
     * Add anexo
     *
     * @param \AppBundle\Entity\Photo $anexo
     * @return RcsvControle
     */
    public function addAnexo(\AppBundle\Entity\Photo $anexo)
    {
        $this->anexo[] = $anexo;

        return $this;
    }

    /**
     * Remove anexo
     *
     * @param \AppBundle\Entity\Photo $anexo
     */
    public function removeAnexo(\AppBundle\Entity\Photo $anexo)
    {
        $this->anexo->removeElement($anexo);
    }

    /**
     * Get anexo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnexo()
    {
        return $this->anexo;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     * @return RcsvControle
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string 
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     *
     * @return RcsvControle
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }
}

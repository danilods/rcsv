<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaMedia
 *
 * @ORM\Table(name="media__media")
 * @ORM\Entity
 */
class MediaMedia
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_name", type="string", length=255, nullable=false)
     */
    private $providerName;

    /**
     * @var integer
     *
     * @ORM\Column(name="provider_status", type="integer", nullable=false)
     */
    private $providerStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_reference", type="string", length=255, nullable=false)
     */
    private $providerReference;

    /**
     * @var json
     *
     * @ORM\Column(name="provider_metadata", type="json", nullable=true)
     */
    private $providerMetadata;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type", type="string", length=255, nullable=true)
     */
    private $contentType;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_size", type="integer", nullable=true)
     */
    private $contentSize;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright", type="string", length=255, nullable=true)
     */
    private $copyright;

    /**
     * @var string
     *
     * @ORM\Column(name="author_name", type="string", length=255, nullable=true)
     */
    private $authorName;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=64, nullable=true)
     */
    private $context;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cdn_is_flushable", type="boolean", nullable=true)
     */
    private $cdnIsFlushable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cdn_flush_at", type="datetime", nullable=true)
     */
    private $cdnFlushAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="cdn_status", type="integer", nullable=true)
     */
    private $cdnStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;



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
     * Set name
     *
     * @param string $name
     * @return MediaMedia
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MediaMedia
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return MediaMedia
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set providerName
     *
     * @param string $providerName
     * @return MediaMedia
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * Get providerName
     *
     * @return string 
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Set providerStatus
     *
     * @param integer $providerStatus
     * @return MediaMedia
     */
    public function setProviderStatus($providerStatus)
    {
        $this->providerStatus = $providerStatus;

        return $this;
    }

    /**
     * Get providerStatus
     *
     * @return integer 
     */
    public function getProviderStatus()
    {
        return $this->providerStatus;
    }

    /**
     * Set providerReference
     *
     * @param string $providerReference
     * @return MediaMedia
     */
    public function setProviderReference($providerReference)
    {
        $this->providerReference = $providerReference;

        return $this;
    }

    /**
     * Get providerReference
     *
     * @return string 
     */
    public function getProviderReference()
    {
        return $this->providerReference;
    }

    /**
     * Set providerMetadata
     *
     * @param json $providerMetadata
     * @return MediaMedia
     */
    public function setProviderMetadata($providerMetadata)
    {
        $this->providerMetadata = $providerMetadata;

        return $this;
    }

    /**
     * Get providerMetadata
     *
     * @return json 
     */
    public function getProviderMetadata()
    {
        return $this->providerMetadata;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return MediaMedia
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return MediaMedia
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set length
     *
     * @param string $length
     * @return MediaMedia
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return string 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set contentType
     *
     * @param string $contentType
     * @return MediaMedia
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string 
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set contentSize
     *
     * @param integer $contentSize
     * @return MediaMedia
     */
    public function setContentSize($contentSize)
    {
        $this->contentSize = $contentSize;

        return $this;
    }

    /**
     * Get contentSize
     *
     * @return integer 
     */
    public function getContentSize()
    {
        return $this->contentSize;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     * @return MediaMedia
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return string 
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set authorName
     *
     * @param string $authorName
     * @return MediaMedia
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;

        return $this;
    }

    /**
     * Get authorName
     *
     * @return string 
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return MediaMedia
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set cdnIsFlushable
     *
     * @param boolean $cdnIsFlushable
     * @return MediaMedia
     */
    public function setCdnIsFlushable($cdnIsFlushable)
    {
        $this->cdnIsFlushable = $cdnIsFlushable;

        return $this;
    }

    /**
     * Get cdnIsFlushable
     *
     * @return boolean 
     */
    public function getCdnIsFlushable()
    {
        return $this->cdnIsFlushable;
    }

    /**
     * Set cdnFlushAt
     *
     * @param \DateTime $cdnFlushAt
     * @return MediaMedia
     */
    public function setCdnFlushAt($cdnFlushAt)
    {
        $this->cdnFlushAt = $cdnFlushAt;

        return $this;
    }

    /**
     * Get cdnFlushAt
     *
     * @return \DateTime 
     */
    public function getCdnFlushAt()
    {
        return $this->cdnFlushAt;
    }

    /**
     * Set cdnStatus
     *
     * @param integer $cdnStatus
     * @return MediaMedia
     */
    public function setCdnStatus($cdnStatus)
    {
        $this->cdnStatus = $cdnStatus;

        return $this;
    }

    /**
     * Get cdnStatus
     *
     * @return integer 
     */
    public function getCdnStatus()
    {
        return $this->cdnStatus;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return MediaMedia
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return MediaMedia
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}

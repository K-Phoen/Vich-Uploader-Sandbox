<?php

namespace KPhoen\Bundle\MultipleUploadableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bike
 */
class Bike
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $images;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->name ? $this->name : '';
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
     * Set name
     *
     * @param string $name
     * @return Bike
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
     * Add images
     *
     * @param \KPhoen\Bundle\MultipleUploadableBundle\Entity\BikeImage $image
     * @return Bike
     */
    public function addImage(BikeImage $image)
    {
        $this->images[] = $image;
        $image->setBike($this);

        return $this;
    }

    /**
     * Remove images
     *
     * @param \KPhoen\Bundle\MultipleUploadableBundle\Entity\BikeImage $image
     */
    public function removeImage(BikeImage $image)
    {
        $this->images->removeElement($image);
        $image->setBike(null);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}

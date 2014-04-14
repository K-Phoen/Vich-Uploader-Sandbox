<?php

namespace KPhoen\Bundle\MultipleUploadableBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;

/**
 * BikeImage
 */
class BikeImage
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var integer
     */
    protected $bike_id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $file_name;

    /**
     * @var File $back_image
     */
    protected $image;

    /**
     * @var \KPhoen\Bundle\MultipleUploadableBundle\Entity\Bike
     */
    protected $bike;


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
     * Set bike_id
     *
     * @param integer $bikeId
     * @return BikeImage
     */
    public function setBikeId($bikeId)
    {
        $this->bike_id = $bikeId;

        return $this;
    }

    /**
     * Get bike_id
     *
     * @return integer
     */
    public function getBikeId()
    {
        return $this->bike_id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return BikeImage
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set file_name
     *
     * @param string $fileName
     * @return BikeImage
     */
    public function setFileName($fileName)
    {
        $this->file_name = $fileName;

        return $this;
    }

    /**
     * Get file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * Set bike
     *
     * @param \KPhoen\Bundle\MultipleUploadableBundle\Entity\Bike $bike
     * @return BikeImage
     */
    public function setBike(Bike $bike = null)
    {
        $this->bike = $bike;

        return $this;
    }

    /**
     * Get bike
     *
     * @return \KPhoen\Bundle\MultipleUploadableBundle\Entity\Bike
     */
    public function getBike()
    {
        return $this->bike;
    }

    public function setImage(File $image)
    {
        $this->image = $image;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }
}

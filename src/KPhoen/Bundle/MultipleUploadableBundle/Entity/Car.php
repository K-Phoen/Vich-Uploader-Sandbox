<?php

namespace KPhoen\Bundle\MultipleUploadableBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Car
 */
class Car
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
     * @var string
     */
    protected $front_image_filename;

    /**
     * @var File $front_image
     */
    protected $front_image;

    /**
     * @var string
     */
    protected $back_image_filename;

    /**
     * @var File $back_image
     */
    protected $back_image;


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
     * @return Car
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
     * Set front_image_filename
     *
     * @param string $frontImageFilename
     * @return Car
     */
    public function setFrontImageFilename($frontImageFilename)
    {
        $this->front_image_filename = $frontImageFilename;

        return $this;
    }

    /**
     * Get front_image_filename
     *
     * @return string
     */
    public function getFrontImageFilename()
    {
        return $this->front_image_filename;
    }

    /**
     * Set back_image_filename
     *
     * @param string $backImageFilename
     * @return Car
     */
    public function setBackImageFilename($backImageFilename)
    {
        $this->back_image_filename = $backImageFilename;

        return $this;
    }

    /**
     * Get back_image_filename
     *
     * @return string
     */
    public function getBackImageFilename()
    {
        return $this->back_image_filename;
    }

    public function setFrontImage(File $image)
    {
        $this->front_image = $image;

        return $this;
    }

    public function getFrontImage()
    {
        return $this->front_image;
    }

    public function setBackImage(File $image)
    {
        $this->back_image = $image;

        return $this;
    }

    public function getBackImage()
    {
        return $this->back_image;
    }
}

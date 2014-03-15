<?php

namespace KPhoen\MultipleUploadableBundle\Model;

use Symfony\Component\HttpFoundation\File\File;

use KPhoen\MultipleUploadableBundle\Model\om\BaseCar;

class Car extends BaseCar
{
    /**
     * @var File $front_imagee
     */
    protected $front_image;

    /**
     * @var File $back_image
     */
    protected $back_image;

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

<?php

namespace KPhoen\MultipleUploadableBundle\Model;

use Symfony\Component\HttpFoundation\File\File;

use KPhoen\MultipleUploadableBundle\Model\om\BaseBikeImage;

class BikeImage extends BaseBikeImage
{
    /**
     * @var File $image
     */
    protected $image;

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

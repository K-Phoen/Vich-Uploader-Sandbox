<?php

namespace KPhoen\SingleUploadableBundle\Model;

use Symfony\Component\HttpFoundation\File\File;

use KPhoen\SingleUploadableBundle\Model\om\BaseImage;

class Image extends BaseImage
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

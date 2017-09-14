<?php

namespace Fruitcake\ImageOptimizer\Adapter;

use Magento\Framework\Image\Adapter\ImageMagick;

class ImageMagickOptimizer extends ImageMagick
{
    use OptimizerTrait;

    public function save($destination = null, $newName = null)
    {
        parent::save($destination, $newName);
        $this->optimize($destination, $newName);
    }
}

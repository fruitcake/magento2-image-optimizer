<?php

namespace Fruitcake\ImageOptimizer\Adapter;

use Magento\Framework\Image\Adapter\Gd2;

class Gd2Optimizer extends Gd2
{
    use OptimizerTrait;

    public function save($destination = null, $newName = null)
    {
        parent::save($destination, $newName);
        $this->optimize($destination, $newName);
    }
}

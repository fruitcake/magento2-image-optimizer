<?php

namespace Fruitcake\ImageOptimizer\Adapter;

use Spatie\ImageOptimizer\Optimizer;
use Spatie\ImageOptimizer\OptimizerChain;
use Spatie\ImageOptimizer\OptimizerChainFactory;

trait OptimizerTrait {

    /** @var  OptimizerChain */
    protected $optimizerChain;

    abstract protected function _prepareDestination($destination = null, $newName = null);

    public function optimize($destination = null, $newName = null)
    {
        $fileName = $this->_prepareDestination($destination, $newName);
        $this->getOptimizerChain()->optimize($fileName);
    }

    /**
     * @return OptimizerChain
     */
    protected function getOptimizerChain()
    {
        if ( ! $this->optimizerChain) {
            $this->optimizerChain = OptimizerChainFactory::create();

            if (isset($this->logger)) {
                $this->optimizerChain->useLogger($this->logger);
            }
        }

        return $this->optimizerChain;
    }

}
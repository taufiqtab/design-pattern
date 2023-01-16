<?php

use appdul\FactoryMethod\learn\Logistic;

class RoadLogistic extends Logistic{
    private $maxLoad;

    public function __construct(string $load)
    {
        $this->maxLoad = $load;
    }

    public function createTransport()
    {
        return new Truck($this->maxLoad);
    }
}

?>
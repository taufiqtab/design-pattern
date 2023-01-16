<?php

namespace appdul\FactoryMethod\learn;

abstract class Logistic{

    abstract public function createTransport();

    public function planDelivery(){
        $transport = $this->createTransport();
        $transport->deliver();
    }
}

?>
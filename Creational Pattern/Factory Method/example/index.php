<?php

use appdul\FactoryMethod\learn\Logistic;

function main(Logistic $logistic){
    $logistic->planDelivery();
}

main(new RoadLogistic(10));

?>
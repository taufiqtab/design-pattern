<?php

// require_once('../interfaces/Transport.php');

class Truck implements Transport{
    private $maxLoad;

    public function __construct(string $load)
    {
        $this->maxLoad = $load;
    }

    public function deliver(): void
    {
        echo "Deliver menggunakan Truck dengan muatan ". $this->maxLoad;
    }
}

?>
<?php

namespace Data;

interface Car {
    function drive() : void;

    function getTire() : int;
}

class Innova implements Car {
    public function drive() : void {
        echo "Drive Innova" . PHP_EOL;
    }

    public function getTire() : int {
        return 4;
    }
}
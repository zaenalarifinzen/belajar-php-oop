<?php

namespace Data;

interface HasBrand {
    function getBrand() : string;
}

interface IsMaintenance {
    function isMaintenance() : bool;
}

interface Car extends HasBrand {
    function drive() : void;

    function getTire() : int;
}

class Innova implements Car, IsMaintenance {
    public function drive() : void {
        echo "Drive Innova" . PHP_EOL;
    }

    public function getTire() : int {
        return 4;
    }

    public function getBrand() : string {
        return "Innova";
    }

    public function isMaintenance() : bool{
        return false;
    }
}
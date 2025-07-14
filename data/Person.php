<?php

class Person {
    const AUTHOR = "Zada Production";

    //properties
    var string $name;
    var ?string $address; // nullable
    var string $country = "Indonesia"; // Default value

    //constructor
    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    //function
    function sayHello(?string $name) {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info() {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct(){
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}
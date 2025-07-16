<?php

class Zero {
    private array $properties = [];

    public function __get($name) {
        return $this->properties[$name];
    }

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __isset($name) : bool {
        return isset($this->properties[$name]);
    }

    public function __unset($name) {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments) {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments) {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Zaenal";
$zero->middleName = "Arifin";
$zero->lastName = "Unais";

var_dump($zero);

$zero->sayHello("Muhammad", "Unais");
$zero::sayHello("Kamu", "Ganteng");
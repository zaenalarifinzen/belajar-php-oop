<?php

require "data/Person.php";

define("APPLICATION", "Belajar PHP OOP"); // cara lama
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;
<?php

require "data/Person.php";

$person = new Person("Zaenal", "Jakarta");
// $person->name = "Zaenal";
// $person->address = "Kebumen";
// $person->country = "Indonesia";

echo "Name = $person->name" . PHP_EOL;
echo "Address = $person->address" . PHP_EOL;
echo "Country = $person->country" . PHP_EOL;

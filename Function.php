<?php

require "data/Person.php";

$ifat = new Person();
$ifat->name = "Ifat";
$ifat->sayHello("Zaenal");

$unais = new Person();
$unais->name = "Unais";
$unais->sayHello(null);

$ifat->info();
$unais->info();
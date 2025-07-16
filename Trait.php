<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{SayGoodBye, SayHello, Person};

$person = new Person();
$person->goodBye("Joko");
$person->hello("Budi");

$person->name = "Alexa";
var_dump($person);

$person->run();
<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Zaenal");
var_dump($company);

$company->programmer = new BackendProgrammer("Zaenal");
var_dump($company);

$company->programmer = new FrontendProgrammer("Zaenal");
var_dump($company);

sayHelloProgrammer(new Programmer("Basya"));
sayHelloProgrammer(new FrontendProgrammer("Basya"));
sayHelloProgrammer(new BackendProgrammer("Basya"));

<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Unais";
$manager->sayHello("Kamu");

$vp = new VicePresident();
$vp->name = "Zaenal";
$vp->sayHello("Kamu");

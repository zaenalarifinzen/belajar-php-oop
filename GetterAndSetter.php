<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Gadget");
$category->setExpensive(true);

$category->setName("    ");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
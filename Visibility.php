<?php

require_once "data/Product.php";

$product = new Product("Apel" , 20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 1000);
echo $dummy->info();
<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();
echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Zaenal Arifin";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10,15,15,5,5);
echo "Result : $result" . PHP_EOL;
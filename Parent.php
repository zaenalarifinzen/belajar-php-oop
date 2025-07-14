<?php
require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$shape = new Rectangle();
echo $shape->getCorner() . PHP_EOL;
echo $shape->getParentCorner() . PHP_EOL;
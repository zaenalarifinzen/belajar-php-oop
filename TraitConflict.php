<?php

trait A {
    function doA() : void {
        echo "a" . PHP_EOL;
    }

    function doB() : void {
        echo "b" . PHP_EOL;
    }
}

trait B {
    function doA() : void {
        echo "A" . PHP_EOL;
    }

    function doB() : void {
        echo "B" . PHP_EOL;
    }
}

class Sample {
    use A, B {
        A::doA insteadOf B;
        B::doB insteadOf A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();
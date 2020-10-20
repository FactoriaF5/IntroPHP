<?php

function consolePrint($value)
{
    echo $value . PHP_EOL;
}

function suma(int $a, int $b)
{
    return $a + $b;
}

$suma = suma(3, 2);

consolePrint($suma);

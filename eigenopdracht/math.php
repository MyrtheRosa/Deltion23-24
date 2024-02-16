<?php

function add($number1, $number2)
{
    echo "Totaal: " . $number1 + $number2;
}
$number1 = 12;
$number2 = 3;

add($number1, $number2);

function double($banana)
{
    echo "\nDubbele van $banana is " . $banana * 2;
}
double(5);
double(12);
?>
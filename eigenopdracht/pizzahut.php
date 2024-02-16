<?php

echo "Welcome to Pizza Hut!\n";


$pizzaprijs = 0;
$toppingprijs = 3;
$som = 0;

echo "Kies uw pizza (small, medium or large)\n";
$pizza = readline();
if ($pizza == "small") {
    $pizzaprijs = 7;
} elseif ($pizza == "medium") {
    $pizzaprijs = 9;
} elseif ($pizza == "large") {
    $pizzaprijs = 12;
}

$toppings = array();

$userinput = "";

while ($userinput != "done") {
    echo "Kies uw topping \n";
    $userinput = readline();
    array_push($toppings, $userinput);
}

$som = $pizzaprijs + count($toppings) * $toppingprijs;

echo "Summary of your order: \n";
echo "Kosten pizza: $pizzaprijs \n";
echo "Kosten topping: $toppingprijs \n";
echo "Total price: $som \n"

    ?>
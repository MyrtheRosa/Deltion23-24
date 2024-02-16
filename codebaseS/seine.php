<?php

$leeftijd = intval(readline("Voer uw leeftijd in: "));

if ($leeftijd < 3) {
    $prijs = 0;
    echo "Baby's zijn gratis :)";
} elseif ($leeftijd >= 3 && $leeftijd <= 16) {
    $prijs = 12 * 0.5;
    echo "Kinderen onder de 16 krijgen 50% korting";
} elseif ($leeftijd >= 65) {
    $prijs = 12 * 0.75;
    echo "Ouderen boven de 65 jaar krijgen 25% korting :)";
} else {
    $prijs = 12;
    echo "Volwassenen betalen 12 euro.";
}

?>
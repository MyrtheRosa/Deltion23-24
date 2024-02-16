<?php


$leeftijd = intval(readline("Voer uw leeftijd in :)"));

if ($leeftijd < 9 || $leeftijd > 118) {
    echo "U kunt dit programma niet gebruiken";
    exit; //stop het programma als de leeftijd buiten de grenzen ligt//;
}
$fellicitatie = [10, 16, 18, 50, 67, 100];
if (in_array($leeftijd, $felicitatiewaarden)) {
    echo "Gefeliciteerd! U bent nu " . $leeftijd . " jaar oud!\n";
} elseif ($leeftijd === 67 - 5) {
    echo "Over 5 jaar wordt u 67 jaar oud. Bereid u voor!\n";
} else {
    echo "U bent momenteel " . $leeftijd . " jaar oud.\n";
}

?>
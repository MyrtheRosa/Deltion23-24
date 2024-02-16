<?php

$leeftijden = array();

for ($i = 0; $i < 5; $i++) {
    echo "Geef leeftijd op: ";
    $age = intval(readline());
    array_push($leeftijden, $age);
}

$boven18 = 0;
$onder18 = 0;
$som = 0;
foreach ($leeftijden as $leeftijd) {



    if ($leeftijd >= 18) {
        $boven18++;
    } elseif ($leeftijd < 18) {
        $onder18 = $onder18 + 1;
    }

}

$som = array_sum($leeftijden);
$gemiddelde = $som / count($leeftijden);

echo "\nAantal personen ouder dan 18: " . $boven18;

echo "\nAantal personen jonger dan 18: " . $onder18;

echo "\nGemiddelde leeftijd: " . $gemiddelde;


?>
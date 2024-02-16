<?php

echo "Kies een tafel! ";
$tafel = 6;

echo "Kies een begin :) ";
$beginpunt = 3;

echo "Kies een eindpunt ";
$eindpunt = 13;



echo "de tafel van $tafel van $beginpunt tot $eindpunt.";

for ($index = $beginpunt; $index <= $eindpunt; $index++) {
    $resultaat = $index * $tafel;
    echo "$index x $tafel = $resultaat.";
}

echo "Wilt u een andere tafel zien? Ja/Nee.";
$keuze = "Ja";

while ($keuze === "Ja") {
    $keuze = "Nee";
}

echo "Het programma is gestopt."

    ?>
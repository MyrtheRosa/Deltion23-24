<?php

echo "voer uw leeftijd in: ";
$leeftijd = intval(readline());

if ($leeftijd > 16) {
    $verschil = $leeftijd - 16;
    echo "Je bent $verschil jaar ouder dan 16";
} else {
    echo "Je bent nog geen 16 jaar oud";
}

if ($leeftijd < 50) {
    $jongerdan50 = 50 - $leeftijd;
    echo "Je bent ook $jongerdan50 jaar jonger dan 50";
} else {
    echo "Je bent ouder dan 50";
}

if ($leeftijd < 67) {
    $jongerdan67 = 67 - $leeftijd;
    echo "Nog $jongerdan67 jaren tot je 67 bent";
} else {
    echo "U bent al 67 jaar of ouder";
}

if ($leeftijd < 100) {
    $jongerdan100 = 100 - $leeftijd;
    echo "Nog $jongerdan100 jaren tot je 100 bent";
} else {
    echo "U bent al 100 jaar of ouder";
}

?>
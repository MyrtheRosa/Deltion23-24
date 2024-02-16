<?php

$progammeertalen = array("PHP", "#C", "HTML", "Javascript", "Java", "C++", "C");

array_push($progammeertalen, "Python", "Swift");

sort($progammeertalen);

foreach ($progammeertalen as $taal) {
    echo $taal . "\n";
}
$aantalitems = count($progammeertalen);
echo "Aantal items in de array: " . $aantalitems;

?>
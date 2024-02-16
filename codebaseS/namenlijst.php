<?php

$namen = array("Peter", "Andre", "Ian", "Jeroen", "Peter", "Andre", "Ian", "Jeroen");

sort($namen);

foreach ($namen as $naam) {
    echo "$naam" . "\n";
}
$aantalitems = count($namen);

echo "Aantal namen in de array:" . $aantalitems;


?>
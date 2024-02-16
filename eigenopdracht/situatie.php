<?php

$favorite = array("Kasper", "Femke", "Nynke", "Maria", "Ype");

sort($favorite);

foreach ($favorite as $persoon) {
    echo "$persoon" . "\n";

    if ($persoon === "Kasper") {
        echo "cool beans \n";
    } else {
        ($persoon !== "Kasper");
        echo "Have a nice day \n";
    }
}
?>
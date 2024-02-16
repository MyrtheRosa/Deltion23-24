<?php

$favoritefood = array("Chicken", "Fries", "Sushi", "Cake", "Teokkbokki", "Pineapple");

sort($favoritefood);

$empty = array();

foreach ($favoritefood as $stuffings) {

    $lengteVanStuffings = strlen($stuffings);
    if ($lengteVanStuffings > 5) {
        echo "item is langer dan 5 \n";
        array_push($empty, $stuffings);
    }
}

foreach ($empty as $item) {
    echo "$item \n";
}

// $name = "orn";
// if (strlen($name) >= 4) {
//     echo "thats a long name";
// } else if (strlen($name) == 3) {
//     echo "its three";
// } else if (strlen($name) == 8) {
//     echo "its three";
// } else if (strlen($name) == 12) {
//     echo "its three";
// } else {
//     echo "be better";
// }



// array_push($favoritefood, "Chicken", "Pineapple");

?>
<?php

$zin = readline("Voer een zin in: ");

$hoofdletter = strtoupper($zin);
$kleineletter = strtolower($zin);
$eersteletterwoorden = ucwords($zin);
$eersteletterzin = ucfirst($zin);

echo "$hoofdletter\n";
echo "$kleineletter\n";
echo "$eersteletterwoorden\n";
echo "eersteletterzin\n";

?>
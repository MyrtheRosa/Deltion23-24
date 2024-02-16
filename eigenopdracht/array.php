<?php

function outputName($name)
{
    echo "Voornaam: " . $name . "<br>";
}

$names = array("Kernel", "Munchie", "Corn", "Rosa", "Vigo", "Doros", );
foreach ($names as $name) {
    outputName($name);
    outputName($name);
    outputName($name);
    outputName($name);
    outputName($name);
}

?>
<?php

// Can return: winterjas, zomerjas, regenjas
function selectCoat($temperature, $isRaining)
{
    if ($temperature <= 5) {
        return "winterjas";
    }
    if ($isRaining) {
        return "regenjas";
    } else {
        return "zomerjas";
    }

}

function serveer($order)
{
    return "this is food";
}


$temperature = 10;
$isRaining = false;

$coat = selectCoat($temperature, $isRaining);

echo "You should wear: " . $coat;
?>
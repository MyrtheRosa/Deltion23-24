<?php

$day = "Mon";

switch ($day) {
    case "Mon":
        echo "Today is Monday";
        //Hier kan je doen wat je wilt net als met if/else
        break;
    case "Tue": //als er iets in zit dan gaat de code door
        echo "Today is Tuesday";
        break;
    default: //als alles faalt pakt het de default
        echo "It's another day";
}


?>
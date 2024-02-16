<?php
session_start();

//print_r($_POST);

$_SESSION["gebruikersnaam"] = "";
if (isset($_POST["gebruikersnaam"])) {
    $_SESSION["gebruikersnaam"] = $_POST["gebruikersnaam"];
}
if (isset($_POST["wachtwoord"])) {
    $_SESSION["wachtwoord"] = $_POST["wachtwoord"];
}

// check of inlog klopt
$_SESSION["ingelogd"] = false;
if (
    ($_SESSION["gebruikersnaam"] == 'Myrthe' and $_SESSION["wachtwoord"] == 'testtest') or
    ($_SESSION["gebruikersnaam"] == 'Dingle' and $_SESSION["wachtwoord"] == 'test123')
) {
    $_SESSION["ingelogd"] = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login sessie</title>
    <style>
        body {

            display: flex;
            flex-direction: column;
            /* Center horizontally */
            justify-content: center;
            /* Center vertically */
            align-items: center;
            /* Make sure the body takes up the full viewport height */

            /* Remove default margin */
            margin: 0;
        }
    </style>
</head>

<body>

    <form method="post">
        <label for="gebruikersnaam">Vul hier uw gebruikersnaam in: </label><br>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="login"><br>
        <label for="wachtwoord">Vul hier uw wachtwoord in: </label><br>
        <input type="password" id="wachtwoord" name="wachtwoord" placeholder="wachtwoord"><br>
        <br>
        <input type="submit" value="Log in">
    </form>
    <?php

    if ($_SESSION["ingelogd"] == true) {
        echo "Welkom " . $_SESSION['gebruikersnaam'] . "!";

    } else {
        echo "U heeft geen toegang";
    }


    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpele login</title>
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
        <label for="login">Vul hier uw gebruikersnaam in: </label><br>
        <input type="text" id="login" name="login" placeholder="login"><br>
        <label for="wachtwoord">Vul hier uw wachtwoord in: </label><br>
        <input type="password" id="wachtwoord" name="wachtwoord" placeholder="wachtwoord"><br>
        <br>
        <input type="submit" value="Log in">
    </form>
    <?php
    if (empty($_POST["login"])) {
        return;
    }
    if (empty($_POST["wachtwoord"])) {
        return;
    }
    if ($_POST["login"] == 'testtest' && $_POST["wachtwoord"] == 'test123') {
        echo "<h1>Welkom op mijn website</h1>";
    } else {
        echo "Gebruikersnaam of wachtwoord is niet correct";
    }
    ?>
</body>

</html>
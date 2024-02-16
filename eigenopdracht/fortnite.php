<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortnite</title>
    <style>
        body {
            background-color: lightpink;
            display: flex;
            flex-direction: column;
            /* Center horizontally */
            justify-content: center;
            /* Center vertically */
            align-items: center;
            /* Make sure the body takes up the full viewport height */

            /* Remove default margin */
            margin: 50;
        }

        fieldset {
            padding: 16px;
            background-color: white;
            width: 600px;
        }
    </style>
</head>

<body>
    <!-- we want a form
text field for squad name
3 checkboxes om aan te geven of je duo's , trio's of squad's speelt
email van de squad leader
4 text velden voor de namen van de spelers


submit knop


als je op de submit knop drukt zie je de info die je hebt ingevoerd -->
    <form>
        <fieldset>
            <h3> Vul hier je Squadnaam in </h3>
            <p>
                <input type="text" id="squadnaam" name="squadnaam" placeholder="Squadnaam">
            <p>
            <h3>Vul in met hoeveel mensen je speelt</h3>
            <p>
                <input type="radio" id="duo" name="gamemode" value="duo">
                <label for="duo"> Spelen in Duo </label>
            <p>
                <input type="radio" id="trio" name="gamemode" value="trio">
                <label for="trio"> Spelen in Trio </label>
            <p>
                <input type="radio" id="squad" name="gamemode" value="squad">
                <label for="squad"> Spelen met een Squad </label>
            <p>
            <h3>Vul de E-mail van de Squad Leader in</h3>
            <p>
                <label for="email"> Vul je E-mail in: </label>
                <input type="email" id="email" name="email" placeholder="E-mail">
            <p>
            <h3> Vul jullie namen in</h3>
            <p>
                <label for="naam1"> Naam: </label>
                <input type="text" id="naam1" name="naam1" placeholder="Type hier je naam">
            <p>
                <label for="naam2"> Naam: </label>
                <input type="text" id="naam2" name="naam2" placeholder="Type hier je naam">
            <p>
                <label for="naam3"> Naam: </label>
                <input type="text" id="naam3" name="naam3" placeholder="Type hier je naam">
            <p>
                <label for="naam4"> Naam: </label>
                <input type="text" id="naam4" name="naam4" placeholder="Type hier je naam">
            <p>
                <input type="submit" value="Verzenden">
        </fieldset>
    </form>
    <?php
    echo "<fieldset>";
    echo "<h3> Dit zijn jullie gegevens: </h3> <p>";
    if (isset($_GET["squadnaam"])) {
        $squadnaam = $_GET["squadnaam"];
        if (empty($_GET["squadnaam"])) {
            return;
        }
        echo "Jullie Squadnaam: " . $squadnaam . " <p>";
    }
    if (isset($_GET["gamemode"])) {
        $gamemode = $_GET["gamemode"];
        if (empty($_GET["gamemode"])) {
            return;
        }
        echo "Je speelt in: " . $gamemode . "<p>";
    }
    if (isset($_GET["email"])) {

        $email = $_GET["email"];
        if (empty($_GET["email"])) {
            return;
        }
        echo "Er is een bevestigingsmail verstuurd naar dit E-mail adres: <p>" . $email . "<p>";
    }
    echo "<ul>";
    if (isset($_GET["naam1"])) {
        $naam1 = $_GET["naam1"];
        if (empty($_GET["naam1"])) {
            return;
        }
        echo "<li> Naam: " . $naam1 . "</li> <p>";
    }
    if (isset($_GET["naam2"])) {
        $naam2 = $_GET["naam2"];
        if (empty($_GET["naam2"])) {
            return;
        }
        echo "<li> Naam: " . $naam2 . "</li><p>";
    }
    if (isset($_GET["naam3"])) {
        $naam3 = $_GET["naam3"];
        if (empty($_GET["naam3"])) {
            return;
        }
        echo "<li>Naam: " . $naam3 . "</li><p>";
    }
    if (isset($_GET["naam4"])) {
        $naam4 = $_GET["naam4"];
        if (empty($_GET["naam4"])) {
            return;
        }
        echo "<li>Naam: " . $naam4 . "</li><p>";
    }
    echo "</ul>";
    echo "</fieldset>";
    ?>

</body>

</html>
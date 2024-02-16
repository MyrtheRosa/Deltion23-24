<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            justify-content: space-between;
        }

        fieldset {
            width: 450px;
            background-color: gainsboro;
        }

        .flexing {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <fieldset>
        <form style="display: flex; flex-direction: column; width: 300px;">
            <div class='flexing'><label for="cursistnr">Cursist Nummer: </label>
                <input type="number" name="cursistnr" value="0">
            </div>
            <div class='flexing'><label for="naam">Achternaam: </label>
                <input type="text" name="naam" placeholder="Vul hier uw achternaam in">
            </div>
            <div class='flexing'><label for="roepnaam">Roepnaam: </label>
                <input type="text" name="roepnaam" placeholder="Vul hier uw roepnaam in">
            </div>
            <div class='flexing'><label for="straat">Straat: </label>
                <input type="text" name="straat" placeholder="Vul uw straat in">
            </div>
            <div class='flexing'><label for="postcode">Postcode: </label>
                <input type="text" name="postcode" placeholder="Vul uw postcode in">
            </div>
            <div class='flexing'><label for="plaats">Plaats: </label>
                <input type="text" name="plaats" placeholder="Vul uw woonplaats in">
            </div>
            <div class=''><label for="geslacht">Geslacht: </label>
                <br>
                <input type="radio" name="geslacht" value="M">Man
            </div>
            <div><input type="radio" name="geslacht" value="V">Vrouw
            </div>
            <div><input type="radio" name="geslacht" value="O">Other
            </div>
            <div class='flexing'><label for="datum">Geboorte datum: </label>
                <input type="date" name="datum">
            </div>
            <div><input type="submit" value="Send"></div>

    </fieldset>

    <?php

    if (!isset($_GET['naam'])) {
        echo "U heeft niet alles ingevuld";
        return;
    }
    echo "Uw gegevens zijn verstuurd \n";

    //maak verbinding met de database
    
    $connectie = mysqli_connect("localhost", "root", "", "school");
    if ($connectie == null) {
        die("Geen verbinding");
    }

    $cursistnr = $_GET['cursistnr'];
    $naam = $_GET['naam'];
    $roepnaam = $_GET['roepnaam'];
    $straat = $_GET['straat'];
    $postcode = $_GET['postcode'];
    $plaats = $_GET['plaats'];
    $geslacht = $_GET['geslacht'];
    $geb_datum = $_GET['datum'];

    $insertSql = "INSERT INTO cursist (cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum)
    VALUES('$cursistnr', '$naam', '$roepnaam', '$straat', '$postcode', '$plaats', '$geslacht', '$geb_datum')";

    if (mysqli_query($connectie, $insertSql)) {
        echo "Cursist succesvol toegevoegd";
    } else {
        echo "ERROR: " . $insertSql . "<br>" . mysqli_error($connectie);
    }

    mysqli_close($connectie);



    ?>


</body>

</html>
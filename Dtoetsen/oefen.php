<?php
error_reporting(E_ALL);
//echo "hoi";die();

//
// https://www.w3schools.com/php/func_mysqli_fetch_assoc.asp
// Procedural stule

// ---- start ---- maak database connectie (geef foutmelding als het niet goed gaat) -------- //
$con = mysqli_connect("localhost", "root", "", "test");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
// ---- stop ----- maak database connectie (geef foutmelding als het niet goed gaat) -------- //

// vang verzonden variabelen op en geef weer
echo $_GET['voornaam'];
echo $_GET['tussenvoegsel'];
echo $_GET['achternaam'];
echo $_GET['email'];
// invoegen in tabel
$sql = "INSERT INTO user (vnaam, email)
    VALUES('" . $_GET['voornaam'] . "', '" . $_GET['email'] . "')";
$result = mysqli_query($con, $sql);             // laat de query los op de database

// ---- start ---- voer een query uit die alle gebruikers ophaalt en zet ze in een array ---- //
$sql = "SELECT * FROM user";                    // $sql is de query die alle users opvraagt
$result = mysqli_query($con, $sql);             // laat de query los op de database

$aUsers = [];                                   // maak een nieuwe, lege array "aUsers" aan
while ($row = mysqli_fetch_assoc($result)) {    // haal per regel (= een user) het resultaat op
    $aUsers[] = $row;                           // push elke gebruiker (elke $row) in de array
}
// ---- stop ----- voer een query uit die alle gebruikers ophaalt en zet ze in een array ---- //

// Free result set
mysqli_free_result($result);

// Mysql close connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulieren</title>
    <style>
        body {
            font-family: verdana;
        }

        .tblA {
            /* border: 1px solid gray; */
            border-collapse: collapse;
        }

        .tblA td,
        .tblA th {
            border: 1px solid gray;
            padding: 3px;
        }
    </style>

</head>

<body>
    <h1>oefening met MySQL en HTML Forms</h1>

    <table class="tblA">
        <tr>
            <th>naam</th>
            <th>email</th>
        </tr>
        <?php
        foreach ($aUsers as $user) { // geef een lijst met users
            echo "<tr>";
            echo "<td>";
            echo $user["vnaam"] . " " . $user["tv"] . " " . $user["anaam"];
            echo "</td>";

            echo "<td>";
            echo $user["email"];
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br> <br>
    <form>
        <table class="tblA">
            <tr>
                <td>Voornaam:</td>
                <td><input type="text" name="voornaam" id="voornaam"></td>
            </tr>
            <tr>
                <td>Tussenvoegsel:</td>
                <td><input type="text" name="tussenvoegsel" id="tussenvoegsel"></td>
            </tr>
            <tr>
                <td>Achternaam:</td>
                <td><input type="text" name="achternaam" id="achternaam"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="verstuur" value="invoegen"></td>
            </tr>
    </form>

</body>

</html>
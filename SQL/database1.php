<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "persoonsgegevens";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
    }

    $sql = "SELECT * FROM gebruikers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Gebruiker: " . $row["voornaam"] . " " . $row["achternaam"] . "<br>";
        }
    } else {
        echo "Er staan geen rijen in deze tabel";
    }

    ?>
</body>

</html>
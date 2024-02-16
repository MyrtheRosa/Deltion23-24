<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>

    <style>
        .A {
            border-collapse: collapse;
        }

        .A td,
        .A th {
            border: 1px solid navy;
            padding: 3px;
        }

        fieldset {
            width: 300px;
        }
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php


    // gegevens database invoeren
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "top2000";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
    }

    // kijk of name en country geset zijn via GET => zo ja: voer ze in de tabel in
    if (isset($_GET['name']) && isset($_GET['country']) && isset($_GET['year']) && isset($_GET['verstuur'])) {

        echo "Uw gegevens zijn verstuurd <br>";

        $name = $_GET['name'];
        $country = $_GET['country'];
        $year = $_GET['year'];

        $insertSql = "INSERT INTO artist (`name`, `country`, `year`)
            VALUES('$name', '$country', '$year')";

        if (mysqli_query($conn, $insertSql)) {
            echo "Artiest succesvol toegevoegd \n";
        } else {
            echo "ERROR: " . $insertSql . "<br>" . mysqli_error($connectie);
        }
    }

    // haal de (aangevulde) gegevens van de tabel op
    $sql = "SELECT * FROM artist";
    $result = $conn->query($sql);


    ?>
    <fieldset>
        <table class="A">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Country</th>
                <th>Year</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

            <?php
            foreach ($result as $r) {
                echo "<tr>";
                echo "<td>";
                echo $r["id"];
                echo "</td>";
                echo "<td>";
                echo $r["name"];
                echo "</td>";
                echo "<td>";
                echo $r["country"];
                echo "</td>";
                echo "<td>";
                echo $r["year"];
                echo "</td>";
                echo "<td>";
                echo "<a href=\"delete.php?id={$r['id']}\">
                <i class=\"fa fa-trash\"></i>
                </a>";
                echo "</td>";
                echo "<td>";
                echo "<a href=\"update.php?id={$r['id']}\"
                <i class=\"fa fa-pencil\"> </i>";
                echo "</tr>";
            }
            ?>

        </table>
        <br> <br>

        <form>
            <table class="A">

                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>Country:</td>
                    <td><input type="text" name="country" id="country"></td>
                </tr>
                <tr>
                    <td>Year:</td>
                    <td><input type="text" name="year" id="year"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="verstuur" value="invoegen"></td>
                </tr>
        </form>
    </fieldset>


</body>

</html>
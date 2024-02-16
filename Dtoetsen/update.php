<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <script src="formvalidatie.js"></script>

    <style>
        .errors {
            border-width: 2px;
            border-color: red;
            border-style: solid;
            color: red;
        }
    </style>
</head>

<body>

    <?php
    // Kopieer code van connect.php naar dit bestand
    include 'dtoetssql.php';
    // Als er in de url een id is meegegeven van de rij, dan de id aan variabele geven
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    // SELECT query uitvoeren en alle data van rij ophalen
    $select = $conn->query("SELECT * FROM artist WHERE id=$id");
    $row = $select->fetch_assoc();
    // Als er op de button van het updateformulier is geklikt, dan de geüpdatete data van een rij verwerken in database
    if (isset($_GET['submit'])) {

        // Waardes van formulier ophalen en aan variabele geven
        $name = $_GET['name'];
        $country = $_GET['country'];
        $year = (int) $_GET['year'];
        // UPDATE query maken om geüpdatete data van een rij te kunnen verwerken in database
        $query = "UPDATE artist SET 
    name = '" . $name . "',
    country = '" . $country . "',
    year = '" . $year . "'
    WHERE id=$id";
        // Statement voorbereiden
        $stmt = $conn->prepare($query);
        // Query uitvoeren
        $stmt->execute();
        // Weer teruggaan naar index.php
        header("location: dtoetssql.php");
    }
    ?>
    <!-- Opgehaalde data van rij in value attribuut zetten -->
    <form method="get">
        <input type="hidden" name="id" id="ID" value="<?php echo $row['id']; ?>"><br>
        <input type="text" name="name" id="naam" onfocusout="Name()" value="<?php echo $row['name']; ?>"><br>
        <input type="text" name="country" id="land" value="<?php echo $row['country']; ?>"><br>
        <input type="text" name="year" id="jaar" onfocusout="Year()" value="<?php echo $row['year']; ?>"><br>
        <input type="submit" name="submit" id="submitbutton" value="Updaten"><br>
    </form>
    <div class="errors">

        <div id="errorbox1"></div>
        <div id="errorbox2"></div>

    </div>
    <br>
</body>

</html>
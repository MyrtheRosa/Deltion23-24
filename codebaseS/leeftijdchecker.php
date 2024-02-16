<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leeftijdchecker</title>
</head>

<body>
    <h1>Leeftijdchecker</h1>
    <form method="POST">
        Voer uw geboortedatum in(YYYY-MM-DD): <input type="text" name="birthdate">
        <input type="submit" value="berekenen">
        <?php
        if ($_SERVER["REQUEST-METHOD"] == "POST") {
            $birthdate = $_POST["birthdate"];
            if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $birthdate)) {
                $currentDate = date("Y-m-d");
                $diff = date_diff(date_create($birthdate), date_create($currentDate));
                $leeftijd = $diff->format("%y");

                echo "<p>Uw leeftijd is: $leeftijd jaar</p>";
            } else {
                echo "<p> Voer een geldige geboortedatum in (YYYY-MM-DD).</p>";
            }
        }
        ?>
</body>

</html>
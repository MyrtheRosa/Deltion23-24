<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto's</title>
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

        .car {
            height: 200px;
            width: 250px;
        }
    </style>
</head>

<body>

    <hr>
    <form>
        <select name="car">
            <option value="BMW"> BMW </option>
            <option value="Mercedes"> Mercedes</option>
            <option value="Audi"> Audi</option>
            <input type="submit" value="Verstuur" style="background-color: lightpink; border-radius: 16px;">
    </form>
    <?php
    if (empty($_GET["car"])) {
        return;
    }
    echo $_GET["car"];
    if ($_GET["car"] == "Mercedes") {
        echo '<img class= "car" src="mercedes1.jfif">
        <img class= "car" src="mercedes2.jfif">';
    }
    if ($_GET["car"] == "BMW") {
        echo '<img class= "car" src="bmw.jfif">
        <img class= "car" src="bmw1.jfif">';
    }
    if ($_GET["car"] == "Audi") {
        echo '<img class= "car" src="audi1.jfif">
        <img class= "car" src="audi2.jfif">';
    }
    ?>
</body>

</html>
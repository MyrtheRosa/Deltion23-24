<!DOCTYPE html>
<html lang="en">

<head>
    <title> Omtrek van een cirkel </title>
    <style>
        .circle {
            height: 300px;
            width: 500px
        }

        body {
            text-allign: center
        }

        .content {
            text-align: center;
            padding: 20px
        }
    </style>
</head>

<body style="margin: auto; width: 1080px; background-color: violet; color: SlateBlue">
    <div class="content">
        <h1> Cirkelberekingen </h1>
        <h4>
            <form action="htmlcircle.php" method="GET">
                <label for="diameter">Voer de diameter van de cirkel in (in cm):</label>
                <input type="number" id="diameter" name="diameter" required>
                <input type="submit" value="Bereken">
            </form>
        </h4>
        <?php
        $straal = $_GET['diameter'];
        $pi = 3.14159265359;
        $omtrek = 2 * $straal * $pi;

        echo "De omtrek van de cirkel met straal $straal is $omtrek.";
        ?>

        <br>
        <img class="circle" src="twistingcircle2.gif" alt="Circle GIF">
    </div>
</body>

</html>
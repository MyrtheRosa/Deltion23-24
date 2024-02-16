<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timmerbedrijf</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            height: 100vh;
            /* Make sure the body takes up the full viewport height */
            margin: 0;
            /* Remove default margin */
            background-color: bisque;
        }
    </style>
</head>

<body>


    <form action="" method="get">
        <p><img class="berken" src="berken.jpg"><br></p>
        <input type="radio" id="berken" name="houtsoort" value="Berken">
        <label for="berken">Berken - prijs per m2 € 9,50</label><br>

        <p><img class="grenen" src="grenen.jpg"> </p>
        <input type="radio" id="grenen" name="houtsoort" value="Grenen">
        <label for="grenen">Grenen - prijs per m2 € 8,50</label><br>
        <br>

        <p><img class="hardhout" src="hardhout.jpg"> </p>
        <input type="radio" id="hardhout" name="houtsoort" value="Hardhout">
        <label for="hardhout">Hardhout - prijs per m2 € 11,50</label><br>
        <br>

        <input type="radio" id="rechthoek" name="tafelsoort" value="rechthoekig">
        <label for="rechthoek">Ik wil een rechthoekige tafel</label> <br>
        <br>

        <label for="breedte">Breedte in mm</label>
        <input type="number" id="breedte" min="0" max="10000" name="breedte"><br>
        <br>
        <label for="lengte">Lengte in mm</label>
        <input type="number" id="lengte" min="0" max="10000" name="lengte"><br>
        <br>

        <input type="radio" id="rond" name="tafelsoort" value="rond">
        <label for="rond">Ik wil een ronde tafel</label> <br>
        <br>

        <label for="diameter">Diameter in mm</label>
        <input type="number" id="diameter" min="0" max="10000" name="diameter"><br>
        <br>

        <input type="submit" value="Bestel hier!">
    </form>

    <?php

    if ($_GET) {
        $prijsperm2 = 0;

        if ($_GET["houtsoort"] == "Berken") {
            $prijsperm2 = 9.5;
        } elseif ($_GET["houtsoort"] == "Grenen") {
            $prijsperm2 = 8.5;
        } elseif ($_GET["houtsoort"] == "Hardhout") {
            $prijsperm2 = 11.5;
        }
        $houtsoort = $_GET["houtsoort"];
        $tafelsoort = $_GET["tafelsoort"];

        if ($houtsoort && $tafelsoort) {
            if ($_GET["tafelsoort"] == "rechthoekig") {
                $lengte = floatval($_GET["lengte"]);
                $breedte = floatval($_GET["breedte"]);
                $oppervlakte = $breedte * $lengte;
            } elseif ($tafelsoort == "rond") {
                $diameter = floatval($_GET["diameter"]);
                $straal = $diameter / 2000;
                $oppervlakte = M_PI * $straal * $straal;
            }
            $totaalprijs = $oppervlakte * $prijsperm2;

            echo "Prijs vierkante meter: E" . number_format($prijsperm2, 2) . "<br>";
            echo "Oppervlakte: " . number_format($oppervlakte, 2) . "vierkante meter <br>";
            echo "Totale prijs: E" . number_format($totaalprijs, 2) . "<br>";
        }

        // if elseif tafelsoort
        // - breedte lengte
        // - diameter
    } else {
        echo "Selecteer een geldige houtsoort en tafelsoort om de prijs te berekenen.";
    }


    ?>

</body>

</html>
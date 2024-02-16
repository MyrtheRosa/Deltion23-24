<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
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

        .pizza1 {
            height: 100px;
            width: 125px;
        }

        .pizza2 {
            height: 100px;
            width: 125px;
        }

        .pizza3 {
            height: 100px;
            width: 125px;
        }
    </style>
</head>

<body>

    <h1>Bestel hier uw pizza</h1>

    <form>
        <p> <img class="pizza1" src="spianata_piccante.jpg"></p>
        <input type="radio" id="pizza1" name="pizza" value="pizza1">
        <label for="pizza1"> Pizza Spianata Piccante € 12,50</label><br>

        <p> <img class="pizza2" src="seppi.jpg"></P>
        <input type="radio" id="pizza2" name="pizza" value="pizza2">
        <label for="pizza2"> Pizza Seppi € 11,50</label><br>

        <p> <img class="pizza3" src="tirato.jpg"></p>
        <input type="radio" id="pizza3" name="pizza" value="pizza3">
        <label for="pizza3"> Pizza Tirato € 10,50</label><br>
        <br>
        <input type="checkbox" id="olijven" name="olijven" value="olijven">
        <label for="olijven">Extra olijven € 2,50</label><br>

        <input type="checkbox" id="kaas" name="kaas" value="kaas">
        <label for="kaas">Extra kaas € 1,50</label><br>

        <input type="checkbox" id="bezorgen" name="bezorgen" value="bezorgen">
        <label for="bezorgen"> Ik wil de pizza laten bezorgen € 3,50</label><br>
        <br>
        <input type="submit" value="Bestellen">
    </form>
    <?php
    echo "<ul>";
    if ($_GET) {
        $prijsperpizza = 0;

        if ($_GET["pizza"] == "pizza1") {
            $prijsperpizza = 12.50;
            echo "<li>U hebt de pizza Spianata Piccante besteld</li>";
        } elseif ($_GET["pizza"] == "pizza2") {
            $prijsperpizza = 11.50;
            echo "<li>U hebt de pizza Seppi besteld</li>";
        } elseif ($_GET["pizza"] == "pizza3") {
            $prijsperpizza = 10.50;
            echo "<li>U hebt de pizza Tirato besteld</li>";
        }

        if (isset($_GET["olijven"])) {
            $prijsperpizza = $prijsperpizza + 2.50;
            echo "<li>U hebt extra olijven besteld</li>";
        }

        if (isset($_GET["kaas"])) {
            $prijsperpizza = $prijsperpizza + 1.50;
            echo "<li>U hebt extra kaas besteld</li>";
        }
        if (isset($_GET["bezorgen"])) {
            $prijsperpizza = $prijsperpizza + 3.50;
            echo "<li>U wilt het laten bezorgen</li>";
        } else {
            $prijsperpizza;
            echo "U kunt het volgende bedrag afrekenen bij onze kassa";
        }

        echo "<h3>Bedankt voor uw bestelling!</h3>";
        echo "<li>Totale prijs: €$prijsperpizza</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>
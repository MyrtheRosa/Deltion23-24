<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops en afbeeldingen</title>
</head>

<body>
    <?php

    $fotos = array("afbeelding1.jpg", "afbeelding2.jpg", "afbeelding3.jpg", "afbeelding4.jpg", "afbeelding5.jpg");

    foreach ($fotos as $foto) {
        echo '<img class="fotos" src="' . $foto . '">'; // <img class="fotos" src="wertyu.gif">
    }

    for ($i = 1; $i <= 6; $i++) {
        echo '<img class="fotos" src="afbeelding' . $i . '.jpg">'; // <img class="fotos" src="wertyu.gif">
    }

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kleurkiezer</title>
    <style>
        body {
            background-color:
                <?php echo $_GET['color'] ?>
            ;
            display: flex;
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            height: 100vh;
            /* Make sure the body takes up the full viewport height */
            margin: 0;
            /* Remove default margin */
        }
    </style>
</head>

<body>
    <h1>
        <?php echo $_GET['color']; ?>
    </h1>
</body>

</html>
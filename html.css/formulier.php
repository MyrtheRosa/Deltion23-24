<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
    <style>
        body {
            background-color:
        }

        fieldset {
            width: 350px;
        }

        div {
            width: 360px;
        }
    </style>
</head>

<body>
    <div style="background-color: grey; width: fit-content;">
        <h1>Enquete</h1>
        <form action="" method="post">
            <fieldset style="padding:16px;background-color:white">
                <h2> Put your name here: </h2>
                <label for="fname"> First Name </label><br>
                <input type="text" id="fname" placeholder="First Name"><br>
                <br>
                <label for="lname"> Last Name </label><br>
                <input type="text" id="lname" placeholder="Last Name"> <br>
                <br>
            </fieldset>
            <fieldset style="padding:16px;background-color:white">
                <h2> Other Questions</h2>
                <h3> Choose a drink: </h3>
                <input type="radio" id="coffee" name="drink" value="coffee">
                <label for="coffee"> Coffee </label><br>
                <input type="radio" id="tea" name="drink" value="tea">
                <label for="tea"> Tea </label><br>
                <input type="radio" id="chocolatemilk" name="drink" value="chocolatemilk">
                <label for="chocolatemilk"> Hot Chocolate Milk </label><br>
                <br>

                <h3>What ice cream do you like? </h3>
                <input type="checkbox" id="chocolate" name="chocolate" value="chocolate">
                <label for="chocolate">Chocolate</label><br>
                <input type="checkbox" id="pudding" name="pudding" value="pudding">
                <label for="pudding">Chocolate Pudding</label><br>
                <input type="checkbox" id="cpb" name="cpb" value="cpb">
                <label for="cpb">Chocolate Peanut Butter </label><br>
                <input type="checkbox" id="vanilla" name="vanilla" value="vanilla">
                <label for="vanilla">Vanilla</label><br>
                <input type="checkbox" id="strawberry" name="strawberry" value="strawberry">
                <label for="strawberry">Strawberry</label><br>
                <br>

                <h3>Select a school:</h3>
                <select name="school" id="school">
                    <optgroup label="ACC">
                        <option>Boston College</option>
                        <option>Clemson</option>
                        <option>Duke</option>
                    </optgroup>
                    <optgroup label="Big XII">
                        <option>Oklahoma State</option>
                        <option>Texas</option>
                        <option>Texas Christian</option>
                        <option>Texas Tech</option>
                    </optgroup>
                    <optgroup label="Ivy League">
                        <option>Brown</option>
                        <option>Columbia</option>
                        <option>Cornell</option>
                    </optgroup>
                </select><br>
                <br>
                <label for="comments">
                    <h3>Please provide comments:</h3>
                </label>
                <textarea rows="5" cols="32" name="comments" id="comments"></textarea>
            </fieldset>
            <br>
            <input type="submit" value="Nu inleveren">
        </form>
    </div>
</body>

</html>
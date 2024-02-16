<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Greetings</title>

    <style>
        * {
            box-sizing: border-box;
        }



        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: bisque;
            text-align: center;
            margin: 0;
        }

        header {
            background-color: lightpink;
            padding: 10px;
            text-align: center;
            font-size: medium;
            color: goldenrod;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .snowflake {
            position: absolute;
            top: 10%;
            left: 10%;
            width: 65px;
            height: 70px;
        }

        .snowflake2 {
            position: absolute;
            top: 10%;
            right: 10%;
            width: 65px;
            height: 70px;
        }


        .section {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        section {
            display: flex;
            justify-content: space-around;
        }

        ul {
            width: max-content;
            margin-top: 0;
            padding: 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;

        }

        li {
            margin: 1px;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }

        li :hover {
            background-color: floralwhite;
        }

        li a {

            background-color: lavender;
            display: flex;
            justify-content: flex-end;
            padding: 14px 16px;
            color: goldenrod;
            text-decoration: none;
            text-align: center;
        }

        .body {
            display: flex;

        }

        .content {
            height: fit-content;
            background: fixed;
            padding: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: bisque;
            display: flex;
            flex-direction: row;
            flex: 1;
        }

        .contentleft {
            flex: 3;
        }

        .contentright {
            flex: 1;
        }

        article {
            float: right;
            padding: 20px;
            width: 85%;
            background-color: bisque;
            text-align: center;
        }

        fieldset {
            text-align: left;
        }

        .form {
            display: flex;
            flex-direction: row-reverse;
            text-align: left;
            flex: 1;
        }


        @media (max-width: 600px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>


<body>
    <header>
        <div class="">
            <img class="snowflake" src="snowflake.png" />
            <img class="snowflake2" src="snowflake.png" />
            <center>
                <h1>Christmas Greetings</h1>
            </center>
        </div>
        <p>
        <div class="section">
            <section>

                <ul>

                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Company</a></li>
                    <li><a href="">Blog</a></li>

                </ul>

            </section>
        </div>
    </header>
    <div class="body">
        <div class="content">
            <div class="contentleft">
                <h2>Lorum Ipsum</h2>
                <p>“Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium,
                    totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut
                    fugit,
                    sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro
                    quisquam
                    est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam
                    [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut
                    enim
                    ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                    aliquid ex
                    ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse,
                    quam
                    nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?”
                    <input type="submit" value="Learn More">
                </p>
            </div>

            <div class="contentright">
                <h2>Lorum Ipsum dolor</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                    <input type="submit" value="Learn More">
                </p>
            </div>


        </div>
        <div class="form">
            <article>
                <form>

                    <fieldset>
                        <h3>Newsletter Sign Up</h3>
                        <h4>Name: </h4>
                        <p>
                            <label for="fname"> First Name: </label>
                            <input type="text" name="name" id="fname" placeholder="First Name">
                        <p>
                            <label for="lname">Last Name: </label>
                            <input type="text" name="name" id="lname" placeholder="Last Name">
                        <p>
                            <label for="email"> E-mail </label>
                        <p>
                            <input type="email" id="email" name="email" placeholder="E-mail">
                        <p>
                            <label for="comments">
                                <h3>How can we help?</h3>
                                <textarea rows="5" cols="32" name="comments" id="comments"></textarea>
                                <p>
                                    <input type="submit" value="Send">
                </form>
            </article>
        </div>
    </div>
    <?php
    if (isset($_GET["name"])) {
        $name = $_GET["name"];
        if (empty($_GET["name"])) {
            return;
        }
        echo "Meneer/Mevrouw " . $name . " <p>";

    }
    if (isset($_GET["email"])) {

        $email = $_GET["email"];
        if (empty($_GET["email"])) {
            return;
        }
        echo "Bedankt voor uw aanmelding. <p> We hebben een bevestigingsmail verstuurd naar: " . $email . "";
    }
    ?>
</body>

</html>
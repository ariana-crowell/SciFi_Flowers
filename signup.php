<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .signup {
                font-family: Jacques Francois Shadow;
                color:whitesmoke;
            }
        </style>
        <link href="img/logo.png" rel="icon">
    </head>
    <body>
    <?php
        include 'includes/header.php';
    ?>
    <main>
        <div class="wrapper-main">
            <section class="section-defult">
                <center>
                <h1 class="signup">Signup</h1>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <br>
                    <input type="text" name="mail" placeholder="E-mail">
                    <br>
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <br>
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
                </center>
            </section>
        </div>
    </main>
    <?php
        include 'includes/footer.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
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
    </body>
</html>
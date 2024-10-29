<?php
    session_start();
    require "dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .signup {
                font-family: Jacques Francois Shadow;
                color:whitesmoke;
            }
        </style>
</head>
    <body>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="index.php"><p>Home</p></a>
                            <a class="nav-link active" aria-current="page" href="aboutus.php"><p>About Us</p></a>
                            <a class="nav-link active" aria-current="page" href="shop.php"><p>Shop</p></a>
                            <a class="nav-link active" aria-current="page" href="contact.php"><p>Contact Us</p></a>
                        </div>
                    </div>
                    <?php 
                        if (isset($_SESSION['idUsers'])) { 
                            echo '<form action="includes/logout.inc.php" method="post"> 
                            <button type="submit" name="logout-submit">Logout</button> 
                            </form>';
                            } 
                        else { 
                            echo '<form action="includes/login.inc.php" method="post"> 
                            <input type="text" name="mailuid" placeholder="Username/E-mail..."> 
                            <input type="password" name="pwd" placeholder="Password..."> 
                            <button type="submit" name="login-submit">Login</button> 
                            </form> 
                            <a class="signup" href="signup.php">Signup</a>'; 
                        }
                    ?>
                    <section>
                        <br>
                        <br>
                        <br>
                    <?php 
                        if (isset($_SESSION['idUsers'])) { 
                            echo '<p>You are logged in!</p>'; 
                        } 
                        else { 
                            echo '<p>You are logged out!</p>'; 
                        } 
                    ?>        
                    </section>
                </div>
            </nav>
    </body>
</html>

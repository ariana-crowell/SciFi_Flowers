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
            body {font-family: Arial, Helvetica, sans-serif;}
            * {box-sizing: border-box;}

            /* Button used to open the contact form - fixed at the bottom of the page */
            .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            top: 23px;
            right: 28px;
            width: 280px;
            }

            /* The popup form - hidden by default */
            .form-popup {
            display: none;
            position: absolute;
            top: 15px;
            right: 335px;
            border: 3px solid #f1f1f1;
            z-index: 9;
            background-color: #555;
            }

            /* Full-width input fields */
            .form-container input[type=text], .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            }

            /* When the inputs get focus, do something */
            .form-container input[type=text]:focus, .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
            }

            /* Add a red background color to the cancel button */
            .form-container .cancel {
            background-color: red;
            }

            /* Add some hover effects to buttons */
            .form-container .btn:hover, .open-button:hover {
            opacity: 1;
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
                            echo '<button class="open-button" onclick="openForm()">Login</button>
                                    <div class="form-popup" id="myForm">
                                        <form action="includes/login.inc.php" method="post">
                                        <input type="text" name="mailuid" placeholder="Username/E-mail..."> 
                                        <input type="password" name="pwd" placeholder="Password..."> 
                                        <button type="submit" name="login-submit">Login</button> 
                                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                        </form> 
                                        <a href="signup.php">Signup</a>
                                    </div>';
                        }
                    ?> 
                </div>
            </nav>
            <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

    </body>
    
</html>

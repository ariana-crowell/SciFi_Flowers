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

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}            
        </style>
</head>
    <body>
    <script>
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal = document.getElementById('id01');
</script>
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
                            echo '<button onclick="document.getElementById("id01").style.display="block" style="width:auto;">Login</button>
                                    <div id="id01" class="modal">                                    
                                    <form class="modal-content animate" action="/action_page.php" method="post">
                                        <div class="imgcontainer">
                                        <span onclick="document.getElementById("id01").style.display="none" class="close" title="Close Modal">&times;</span>
                                        <img src="img/logo.png" alt="Logo" class="avatar">
                                        </div>
                                        <div class="container">
                                        <label for="uname"><b>Username</b></label>
                                        <input type="text" placeholder="Enter Username" name="mailuid" required>
                                        <label for="pwd"><b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="pwd" required>                                            
                                        <button type="submit">Login</button>
                                        <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                        </label>
                                        </div>
                                        <div class="container" style="background-color:#f1f1f1">
                                        <button type="button" onclick="document.getElementById("id01").style.display="none" class="cancelbtn">Cancel</button>
                                        <span class="pwd">Forgot <a href="#">password?</a></span>
                                        <a class="signup" href="signup.php">Signup</a>
                                        </div>
                                    </form>
                                    </div>';
                        }
                    ?>
                </div>
            </nav>


    </body>
    
</html>

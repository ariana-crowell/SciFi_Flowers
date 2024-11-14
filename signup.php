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
            body {font-family:arial, helvetica, sans-serif;}
      *{box-sizing:border-box;}
      /* Style inputs with type="text", select elements and textareas */
      .form, select, textarea {
        width: 100%; /* Full width */
        padding: 12px; /* Some padding */ 
        border: 9px solid #ccc; /* Gray border */
        border-radius: 4px; /* Rounded borders */
        box-sizing: border-box; /* Make sure that padding and width stays in place */
        margin-top: 6px; /* Add a top margin */
        margin-bottom: 16px; /* Bottom margin */
        resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
      }
      /* Style the submit button with a specific background color etc */
      .signstyle[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }      
      /* When moving the mouse over the submit button, add a darker green color */
      input[type=submit]:hover {
        background-color: #45a049;
      }   
      /* Add a background color and some padding around the form */
      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
      .contact {
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
                <h1 class="contact">Sign Up</h1>
                </center>

                <div class="container">
                    
      <form class="form-signup" action="includes/signup.inc.php" method="post">

        <label for="fname">Username</label>
        <input class="form" type="text"  name="uid" placeholder="Username">

        <label for="lname">E-mail</label>
        <input class="form" type="text"  name="mail" placeholder="E-mail">

        <label for="lname">Password</label>
        <input class="form" type="password"  name="pwd" placeholder="Password">

        <label for="lname">Password-repeat</label>
        <input class="form" type="password"  name="pwd-repeat" placeholder="Password-repeat"> 
        

        <button class="signstyle" type="submit" value="Submit" name="signup-submit">Sign Up</button>

      </form>
    </div>
    <br>
            </section>
        </div>
    </main>
    <?php
        include 'includes/footer.php';
    ?>
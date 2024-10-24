<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
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
      input[type=submit] {
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
      /*FAQ Accordian style*/
      .accordion {
        align-items: center;
        background-color: #ccc;
        color: #444;
        cursor: pointer;
        width: 60%; /* Full width */
        padding: 12px; /* Some padding */ 
        border: 9px solid #ccc; /* Gray border */
        border-radius: 4px; /* Rounded borders */
        box-sizing: border-box; /* Make sure that padding and width stays in place */
        margin-top: 6px; /* Add a top margin */
        margin-bottom: 16px; /* Bottom margin */
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
      }
      .active, .accordion:hover {
        background-color: #ccc; 
      }
      .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
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
            require "includes/header.php"; 
        ?> 
    <!--Header-->
    <center><h1 class="contact">Contact Us!</h1></center>
      <!--Contact Form-->
    <div class="container">
      <form action="action_page.php">

        <label for="fname">First Name</label>
        <input class="form" type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input class="form" type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="lname">Phone Number</label>
        <input class="form" type="text" id="pnum" name="phonenumber" placeholder="Your phone number..">

        <label for="lname">Email</label>
        <input class="form" type="text" id="email" name="email" placeholder="Your email..">

        

        <label for="subject">Subject</label>
        <textarea id="message" name="subject" placeholder="..." style="height:200px"></textarea>

        <input type="submit" value="Submit">

      </form>
    </div>
    <br>
      <!--FAQ Form-->
      <center>
    <div class="accordion" id="accordionExample"><Center><h1>FAQs!</h1></center>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       How are our flowers made?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>To create our flowers, we design them in the lab using plant DNA.</strong> 
        We offer three flower body bases: poeny, rose, and lily. We hope to offer more options
        in the future, but as of now we take DNA samples from these live flowers and place the DNA 
        inside a stem sample. Once the DNA is in a stem sample, we place it in a solution to grow in a warmer for about 30 days. Once the flower begans to bud, 
        it is ready for shipping. The flower will continue to grow and last 6 monts with proper care.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Can my flower reproduce?
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>The flowers cannot reproduce.</strong> 
        Each flower is custom made from DNA samples that are modifed.
        This flower mutation does not offer the gentic possiblity of reproduction. Fortunately, our flowers last up to 6 months,
        and once you order a custom flower once, your order is saved and you can simply click "previous orders" and reorder your favorite flower!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       What type of flowers can I create?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>We offer three flower bases: peony, rose, and lily.</strong> 
        Currrently, we only offer three flower body bases, but we hope to offer more options in the future. 
        However, with these three bases, you have your choice of flower body base color, flower body base size,
        stem color, stem size, leaf options (texture, size, and color), and more! 
      </div>
    </div>
  </div>
</div>
</center>
<br>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
    </script>
    <?php
      include "includes/footer.php";
    ?>
  </body>
</html>
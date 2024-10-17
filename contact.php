<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      body {font-family:arial, helvetica, sans-serif;}
      *{box-sizing:border-box;}
      /* Style inputs with type="text", select elements and textareas */
          input[type=text], select, textarea {
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
  </style>
  </head>
  <body>
        <?php 
            require "includes/header.php"; 
        ?> 
    <!--Header-->
    <center><h1>Contact Us!</h1></center>
      <!--Contact Form-->
    <div class="container">
      <form action="action_page.php">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="lname">Phone Number</label>
        <input type="text" id="pnum" name="phonenumber" placeholder="Your phone number..">

        <label for="lname">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">

        

        <label for="subject">Subject</label>
        <textarea id="message" name="subject" placeholder="..." style="height:200px"></textarea>

        <input type="submit" value="Submit">

      </form>
    </div>
      <!--FAQ Form-->
      <center><h1>FAQs!</h1></center>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       How are the flowers made?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       What kind of flowers can I create?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
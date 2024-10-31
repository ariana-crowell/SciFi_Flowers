<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="img/logo.png" rel="icon">
        <style>
        .aboutus {
        font-family: Jacques Francois Shadow;
        color:whitesmoke;
      }
      .card{
        margin:30px;
      }
      .container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
  
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.size{
height:900px;
width: 900px;
}

    </style>
    </head>
    <body>
    
        <?php 
            require "includes/header.php"; 
        ?>
        <!--Header-->
    <center><h1 class="aboutus">About Us</h1></center>
        <br>


<div class="container " >
  <img src="img/First_scientist_better.jpg" alt="Avatar" class="image ">
  <div class="overlay">
    <div class="text"> Dr. Hydrangea, a professor at Cornell University, taught botany and biology,
         while also enjoying her passion of exploring the world. Multiple times a year
          she travels to different locations in South America to discover plants to bring 
          back to her class. Over the years, her love to travel to exotic locations to find
           rare plants outgrew her passion of classroom teaching, so she decided to partner 
           with someone who would be interested in working with these exotic plants. 
           Still honoring her love for biology, she now leads our Labatory department and creates our artificial plants.</div>
  </div>
</div>
<div class="container size" >
  <img src="img/third_botanist.jpg" alt="Avatar" class="image size">
  <div class="overlay">
    <div class="text"> Sapphire Johnson grew her passion for plants in a different light. 
      For years she has loved to learn about flowers and is a botany major
       at Cornell University. Her love for botany begins in her childhood as
        she receives flowers from her father every week. These flowers 
        intrigued her, but so did the flowers she read about in her SciFi Novels.
         She then paired her passion for botany with science fiction and presented 
         the idea of SciFi flowers to her professor and peer, Dr. Hydrangea. Together,
          they partnered with Sapphire to bring the company SciFi Flowers to life.</div>
  </div>
</div>
<div class="container size" >
  <img src="img/2nd_botanist_with_flowers.jpg" alt="Avatar" class="image size">
  <div class="overlay">
    <div class="text"> Lucia Lobbern began her passion for plants at a young age. 
      Growing up in a small cottage in Oregon, she spent most afternoons 
      exploring the world around her, and to her knowledge it was forestry. 
      She would find strange plants of beautiful nature and test them. This 
      curiosity led her to create a flower business in her hometown, selling 
      traditional flowers, but she knew she wanted to reach a greater audience,
       and have a flower shop that stands out from the rest.</div>
  </div>
</div>
     
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
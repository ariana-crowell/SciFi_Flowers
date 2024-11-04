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
        body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 500px;
  height: 500px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 1.5s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: rgb(117,108,108,0);
  color: black;
  
}

.flip-card-back {
  background-color:rgb(117,108,108);
  color: white;
  transform: rotateY(180deg);
}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#color {
    word-wrap: break-word;
    background-color: rgb(181,31,31,0);
    background-clip: border-box;
    border: none;
    height:500px;
}
#color1 {
    word-wrap: break-word;
    background-color: rgb(181,31,31,0);
    background-clip: border-box;
    border: none;
}
#color2 {
    word-wrap: break-word;
    background-color: rgb(181,31,31,0);
    background-clip: border-box;
    border: none;
}

#margin{  
  margin-top:10px;
  margin-right:90px;
  margin-bottom:10px;
  margin-left:90px;
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
<div class="row" id="margin" >

<div class="col-md-4">
    <div class="card" id="color">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/First_scientist_better.jpg" alt="Avatar" style="width: 500px;height:500px;">
    </div>
    <div class="flip-card-back">
      <h1 class="aboutus" >Gina Hydrangea</h1> 
      <ul>
        <li><p>Professor at Cornell University</p> </li>
        <li><p>Taught botany and biology</p>  </li>
        <li><p>Loves to travel and discover exotic plants</p></li>
        <li><p>Head of Sci-Fi Flowers Labatory</p></li>
      </ul>  
      <br>
      <p>Drhydrangea@gmail.com</p>
      <p>971-222-4444</p>
      <p>526 Sammie Dr, Seaside, Oregon</p>   
      
    </div>
  </div>
</div>
    </div>
  </div>

  <div class="col-md-4" style="align:center;">
    <div class="card" id="color1">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/third_botanist.jpg" alt="Avatar" style="width:500px;height:500px;">
    </div>
    <div class="flip-card-back">
      <h1 class="aboutus">Sapphire Johnson</h1> 
      <ul>
        <li><p>Botany major at Cornell University</p> </li>
        <li><p>Immense love for botany and Science Fiction </p>  </li>
        <li><p>Joined Sci-Fi Flowers with Dr. Hydrangea</p></li> 
        <li><p>Head of Plant Quality</p></li> 
      </ul>  
      <br>
      <p>saphjohnson@gmail.com</p>
      <p>971-444-2222</p>
      <p>526 Sammie Dr, Seaside, Oregon</p>   
      
    </div>
  </div>
</div>
    </div>
  </div>
       
  <div class="col-md-4">
    <div class="card" id="color2">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/2nd_botanist_with_flowers.jpg" alt="Avatar" style="width:500px;height:500px;">
    </div>
    <div class="flip-card-back">
      <h1 class="aboutus">Lucia Lobbern</h1> 
      <ul>
        <li><p>Obtained BBA at University of Oregon</p> </li>
        <li><p>Immense love for botany and Science Fiction </p>  </li>
        <li><p>Founded Sci-Fi Flowers in 2024</p></li>
        <li><p>Head of Products and Consultation</p></li>
      </ul>  
      <br>
      <p>lucialobbern@gmail.com</p>
      <p>971-222-4422</p>
      <p>526 Sammie Dr, Seaside, Oregon</p>   
      
    </div>
  </div>
</div>
    </div>
  </div>
</div>
       
<br>





     
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
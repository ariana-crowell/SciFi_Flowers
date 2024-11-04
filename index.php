<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="img/logo.png" rel="icon">
       <style>
        .carousel {
          height:650px;
          width:1100px;
        }
        .carouselimg {
          height:650px;
        }
       </style>
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>
        <br>
        <div class="container">
        <center>
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="9"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="10"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="C:\Users\Ania.Ross\Downloads\lab title.png" alt="Los Angeles" class="d-block w-100 carouselimg">
    </div>
    <div class="carousel-item">
      <img src="img/Lily-of-the-valley-flowers.webp" alt="Chicago" class="d-block w-100 carouselimg">
    </div>
    <div<div class="carousel-item">
      <img src="C:\Users\Ania.Ross\Downloads\lab dna.png" alt="New York" class="d-block w-100 carouselimg">
    </div> 
    <div class="carousel-item">
      <img src="img/squigily_flower.jpg" alt="New York" class="d-block w-100 carouselimg">
    </div>
    
    <div class="carousel-item">
      <img src="C:\Users\Ania.Ross\Downloads\lab flower.png" alt="New York" class="d-block w-100 carouselimg">
    </div>
     <div class="carousel-item">
      <img src="img/fly_trap.jpg" alt="New York" class="d-block w-100 carouselimg">
    </div>
    <div class="carousel-item">
      <img src="C:\Users\Ania.Ross\Downloads\Pink-Oleander-Flowers.webp" alt="New York" class="d-block w-100 carouselimg">
    </div>
    <div class="carousel-item">
      <img src="" alt="New York" class="d-block w-100 carouselimg">
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/OIP.yNxLyF10dT--5_sgXtKYzwHaEJ?w=317&h=180&c=7&r=0&o=5&pid=1.7" alt="New York" class="d-block w-100 carouselimg">
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/OIP.uX8VgqjRSOnBTXAuJWpo5AHaE7?w=265&h=180&c=7&r=0&o=5&pid=1.7" alt="New York" class="d-block w-100 carouselimg">
    </div>
  </div>
 
  </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
      </center>
      </div>
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
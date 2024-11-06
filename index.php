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
        .carousel-control-next,.carousel-control-prev {
          filter:invert(100%);
        }
       </style>
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>
        <br>
        <center>
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/lab_title.png" class="d-block w-100" alt="lab title" style="height:600px;">
            </div>
            <div class="carousel-item">
              <img src="img/lab_dna.png" class="d-block w-100" alt="lab dna" style="height:600px;">
            </div>
            <div class="carousel-item">
              <img src="img/lab_flower.png" class="d-block w-100" alt="lab flower" style="height:600px;">
            </div>
          </div>
          <button class="carousel-control-prev bs-primary-bg-subtle" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
      </center>
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
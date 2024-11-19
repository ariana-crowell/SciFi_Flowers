<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peony Base Product</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="img/logo.png" rel="icon">
        <style>
            .carousel{
                width:40rem;
            }
            .textcolor{
                font-family: Jacques Francois Shadow;
                color:white;
            }
        </style>
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>
        <br>
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-md-6">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/GreenLilyBase.jpg" class="d-block w-100" alt="lab title" style="height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Grey-BlueLilyBase.jpg" class="d-block w-100" alt="lab dna" style="height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Orange-YellowLilyBase.jpg" class="d-block w-100" alt="lab flower" style="height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/PinkLilyBase.jpg" class="d-block w-100" alt="lab flower" style="height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/PurpleLilyBase.jpg" class="d-block w-100" alt="lab flower" style="height:600px;">
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
            <div class="col-md-6">
                <h1 class="textcolor">Lily Base Flowers</h1>
            </div>
        </div>
        <br>    
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
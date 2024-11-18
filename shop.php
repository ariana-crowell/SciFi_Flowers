<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="img/logo.png" rel="icon">
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 18rem;
                margin-top:0rem;
                margin-right: 3rem;
                margin-bottom:1rem;
                margin-left:3rem;
                text-align: center;
                font-family: arial;
            }
        </style>
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>
        <br>
        <center><h1>Shop</h1></center>
        <div class="container row">
            <div class="col-md-2">
                <div class="card bg-secondary text-white" style="width: 35rem; height: 30rem;">
                    <img src="img/Orange-YellowPeonyBase.jpg" class="card-img-top" alt="..." style="height:20rem;">
                    <div class="card-body ">
                        <h5 class="card-title">Peony Base</h5>
                        <p class="card-text">$14-$34</p>
                    <a href="peonybase.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-2">
                <div class="card bg-secondary text-white" style="width: 35rem; height: 30rem;">
                    <img src="img/PinkLilyBase.jpg" class="card-img-top" alt="..." style="height:20rem;">
                    <div class="card-body ">
                        <h5 class="card-title">Lily Base</h5>
                        <p class="card-text">$12-$32</p>
                    <a href="lilybase.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-2">
                <div class="card bg-secondary text-white" style="width: 35rem; height: 30rem;">
                    <img src="img/PurpleRoseBase.jpg" class="card-img-top" alt="..." style="height:20rem;">
                    <div class="card-body ">
                        <h5 class="card-title">Rose Base</h5>
                        <p class="card-text">$10-$30</p>
                    <a href="rosebase.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
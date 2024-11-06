<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="img/logo.png" rel="icon">
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>
        <div class="row">
            <div class="card col-sm-4" style="width: 18rem; background-color:gray;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row">
                        <a href="#" class="btn btn-primary col-sm-6">Checkout Now</a>
                        <a href="#" class="btn btn-success col-sm-6">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="card col-sm-4" style="width: 18rem; background-color:gray;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row">
                        <a href="#" class="btn btn-primary col-sm-6">Checkout Now</a>
                        <a href="#" class="btn btn-success col-sm-6">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="card col-sm-4" style="width: 18rem; background-color:gray;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row">
                        <a href="#" class="btn btn-primary col-sm-6">Checkout Now</a>
                        <a href="#" class="btn btn-success col-sm-6">Add to Cart</a>
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
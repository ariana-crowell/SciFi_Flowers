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
                margin: auto;
                text-align: center;
                font-family: arial;
            }

            .price {
                color: grey;
                font-size: 22px;
            }

            .card button {
                border: none;
                outline: 0;
                padding: 12px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }

            .card button:hover {
                opacity: 0.7;
            }
        </style>
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>
        <br>
        <div class="container row">
            <div class="col-sm-2"></div>
            <div class="card bg-secondary text-white col-sm-2">
                <img src="img\Orange-YellowPeonyBase.jpg" alt="..." style="width:100%">
                <h1>Peony Base</h1>
                <p>$</p>
                <p><button>Learn More</button></p>
            </div>
            <div class="col-sm-2"></div>
            <div class="card bg-secondary text-white col-sm-2">
                <img src="img/PinkLilyBase.jpg" alt="..." style="width:100%">
                <h1>Lily Base</h1>
                <p>$</p>
                <p><button>Learn More</button></p>
            </div>
            <div class="col-sm-2"></div>
            <div class="card bg-secondary text-white col-sm-2">
                <img src="img/PurpleRoseBase.jpg" alt="..." style="width:100%">
                <h1>Rose Base</h1>
                <p>$</p>
                <p><button>Learn More</button></p>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
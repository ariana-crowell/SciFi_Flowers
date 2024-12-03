<?php
    require "includes/dbh.inc.php";
?>
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
            .carousel-control-next,.carousel-control-prev {
                filter:invert(100%);
            }
            p {
                font-family: Jacques Francois Shadow;
                color:white;
            }

            /*button*/
            .button {
	            border-radius: 50%;
                border: none;
                color: white;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                width:40px;
                height:40px;
            }

            .button1 {
                background-color: #b042ff; 
            }

            .button2 {
                background-color: #6f89b3; 
            }

            .button3 {
                background-color: #f5b227; 
            }

            .button4 {
                background-color: #fe5bac; 
            }

            .button5 {
                background-color: lightgreen; 
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
                        <img src="img/GreenPeonyBase.jpg" class="d-block w-100" alt="lab title" style="height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Grey-BluePeonyBase.jpg" class="d-block w-100" alt="lab dna" style="height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Orange-YellowPeonyBase.jpg" class="d-block w-100" alt="lab flower" style="height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/PinkPeonyBase.jpg" class="d-block w-100" alt="lab flower" style="height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/PurplePeonyBase.jpg" class="d-block w-100" alt="lab flower" style="height:600px;">
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
                <p>
                <?php
                    $sql = "select * from product join productname join description";
                    $result = mysqli_query($conn,$sql); 
                    $resultCheck = mysqli_num_rows($result);
                
                    if($resultCheck > 0){
                        if($row = mysqli_fetch_assoc($result)){
                            echo $row['ProductType'];
                            echo "<br>";
                            echo "$27-$31" ;
                            echo "<br>";
                            echo $row['FlowerDescription'];
                            echo "<br>";
                            echo "<br>";
                            echo "Explore Our Colors:";
                            echo "<br>";
                        }
                    }
                ?>
                <a href="purplepeony.php"><button class="button button1"></button></a>
                <a href="greybluepeony.php"><button class="button button2"></button></a>
                <a href="orangeyellowpeony.php"><button class="button button3"></button></a>
                <a href="pinkpeony.php"><button class="button button4"></button></a>
                <a href="greenpeony.php"><button class="button button5"></button></a>
                </p>
                <br>
            </div>
        </div>
        <br>    
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
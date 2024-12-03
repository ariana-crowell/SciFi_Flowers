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
                background-color: #6b1b71; 
            }

            .button2 {
                background-color: #517b9e; 
            }

            .button3 {
                background-color: #f7710d; 
            }

            .button4 {
                background-color: #d25166; 
            }

            .button5 {
                background-color: #3a6b00; 
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
                <img src="img/Grey-BlueLilyBase.jpg" style="height:570px; width:675px;">
            </div>
            <div class="col-md-6">
                <p>
                <?php
                    $sql = "select * from product join productname join description";
                    $result = mysqli_query($conn,$sql); 
                    $resultCheck = mysqli_num_rows($result);
                
                    if($resultCheck > 0){
                        if($row = mysqli_fetch_assoc($result)){
                            echo "Purple Lily";
                            echo "<br>";
                            echo "$29";
                            echo "<br>";
                            echo "Our lab-grown Lily flower is a testament to the modernity and wonders of science and fiction combined. This flower features beautifully elongated, elegant petals in the most pleasant flower-base. We offer several beautifully vibrant color options: purple, grey-blue, orange-yellow, pink, and green. Each option is unique, and all options are available for purchase in a bouquet bundle for the exclusive price of $130 USD! Do not miss out on the perfect gift for Mother’s Day, your significant other, weddings, or a casual home flower. Customize your lavish lily today! ";
                            echo "<br>";
                            echo "<br>";
                            echo "Explore Our Colors:";
                            echo "<br>";
                        }
                    }
                ?>
                <a href="purplelily.php"><button class="button button1"></button></a>
                <a href="greybluelily.php"><button class="button button2"></button></a>
                <a href="orangeyellowlily.php"><button class="button button3"></button></a>
                <a href="pinklily.php"><button class="button button4"></button></a>
                <a href="greenlily.php"><button class="button button5"></button></a>
                </p>
                <br>
                <a href="cart.php" ><button class="btn btn-dark" onclick="addToCart('Coral Fruit', 32)">Add to Cart</button></a>
            </div>
        </div>
        <br>    
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
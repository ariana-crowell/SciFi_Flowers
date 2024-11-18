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

      .card{
        align:center;
      }
      .list{
        font-family: Jacques Francois Shadow;
        color:
      }
      .card-title{
        color:;
        font-family:Jacques Francois Shadow;
        font-size:2rem;
      }
      p{
        color:grey;
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
        <div class="container row">
            <div class="col-md-2">
                <div class="card bg-secondary text-white" style="width: 25rem; height: 48rem;">
                    <img src="img/First_scientist_better.jpg" class="card-img-top" alt="..." style="height:25rem;">
                    <div class="card-body ">
                        <h5 class="card-title">Gina Hydrangea</h5>
                        <p class="card-text"><ul class="list"> 
                            <li><p>Professor at Cornell University</p> </li> 
                            <li><p>Taught botany and biology</p>  </li> 
                            <li><p>Loves to travel and discover exotic plants</p></li> 
                            <li><p>Head of Sci-Fi Flowers Labatory</p></li> 
                          </ul></p>
                    <a href="#" class="btn btn-dark">Contact Us!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-2">
                <div class="card bg-secondary text-white" style="width: 25rem; height: 48rem;">
                    <img src="img\2nd_botanist_with_flowers.jpg" class="card-img-top" alt="..." style="height:25rem;">
                    <div class="card-body ">
                        <h5 class="card-title">Lucia Lobbern</h5>
                        <p class="card-text"><ul class="list"> 
                            <li><p>Obtained BBA at University of Oregon</p></li> 
                            <li><p>Immense love for botany and Science Fiction</p></li> 
                            <li><p>Founded Sci-Fi Flowers in 2024</p></li> 
                            <li><p>Head of Products and Consultation</p></li> 
                          </ul></p>
                    <a href="#" class="btn btn-dark">Contact Us!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-2">
                <div class="card bg-secondary text-white" style="width: 25rem; height: 48rem;">
                    <img src="img/third_botanist.jpg" class="card-img-top" alt="..." style="height:25rem;">
                    <div class="card-body ">
                        <h5 class="card-title">Sapphire Johnson</h5>
                        <p class="card-text"><ul class="list"> 
                            <li><p>Botany major at Cornell University</p></li> 
                            <li><p>Immense love for botany and Science Fiction</p></li> 
                            <li><p>Joined Sci-Fi Flowers with Dr. Hydrangea</p></li> 
                            <li><p>Head of Plant Quality</p></li> 
                          </ul></p>
                    <a href="#" class="btn btn-dark">Contact Us!</a>
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
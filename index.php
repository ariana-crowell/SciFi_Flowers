<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?> 
        <main> 
            <div > 
                <section> 
                    <?php 
                        if (isset($_SESSION['idUsers'])) { 
                            echo '<p>You are logged in!</p>'; 
                        } 
                        else { 
                            echo '<p>You are logged out!</p>'; 
                        } 
                    ?>        
                </section> 

<!-- Carousel container -->
carousel 

<div id="myCarousel" class="carousel slide" data-ride="carousel"> 

        <ol class="carousel-indicators"> 

          <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 

          <li data-target="#myCarousel" data-slide-to="1"></li> 

          <li data-target="#myCarousel" data-slide-to="2"></li> 

        </ol> 

        <div class="carousel-inner"> 

          <div class="item active"> 

            <center><img class="size" src="C:\Users\Ania.Ross\Downloads\fly trap.jfif"></center> 

          </div>   

          <div class="item"> 

            <center><img class="size" src="C:\Users\Ania.Ross\Downloads\squigily flower.jfif"></center> 

          </div>  

          <div class="item"> 

            <center><img class="size" src="C:\Users\Ania.Ross\Downloads\Lily-of-the-valley-flowers.webp"></center> 

          </div> 

          <div class="item"> 

            <center><img class="size" src="ttps://th.bing.com/th/id/OIP.5k7qM_aJ3QJ5ogAKomkhEgHaDj?w=317&h=168&c=7&r=0&o=5&pid=1.7"></center> 

          </div> 

          <div class="item"> 

            <center><img class="size" src="https://th.bing.com/th/id/OIP.A6LOpP3xJ1iH3OAw6bl2KAHaE7?w=295&h=197&c=7&r=0&o=5&pid=1.7"></center> 

          </div> 

          <div class="item"> 

            <center><img class="size" src="Images/review6.png"></center> 

          </div> 

        </div> 

        <a class="left carousel-control" href="#myCarousel" data-slide="prev"> 

          <span class="glyphicon glyphicon-chevron-left"></span> 

          <span class="sr-only">Previous</span> 

        </a> 

        <a class="right carousel-control" href="#myCarousel" data-slide="next"> 

          <span class="glyphicon glyphicon-chevron-right"></span> 

          <span class="sr-only">Next</span> 

        </a> 

      </div> 

        </main> 
    </body>
</html>
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
            </div> 
             <!-- Carousel container -->
<div class="carousel">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="C:\Users\Ania.Ross\Downloads\fly trap.jfif" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="C:\Users\Ania.Ross\Downloads\squigily flower.jfif" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="C:\Users\Ania.Ross\Downloads\Lily-of-the-valley-flowers.webp" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://th.bing.com/th/id/OIP.5k7qM_aJ3QJ5ogAKomkhEgHaDj?w=317&h=168&c=7&r=0&o=5&pid=1.7" style="width:100%">
  <div class="text">Caption Four</div>
</div>


<div class="mySlides fade">
  <div class="https://th.bing.com/th/id/OIP.A6LOpP3xJ1iH3OAw6bl2KAHaE7?w=295&h=197&c=7&r=0&o=5&pid=1.7" style="width:100%">
  <div class="text">Caption Five</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


</div>
        </main> 
    </body>
</html>
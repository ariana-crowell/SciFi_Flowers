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
      .card{
        margin:30px;
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
        <div class="card bg-secondary text-white">
            <div class="card-body">
                <h4 class="card-title">Dr. Hydrangea</h4>
                <p class="card-text">
                a professor at Cornell University, taught botany and biology, while also enjoying her passion of exploring the world. Multiple times a year she travels to different locations in South America to discover plants to bring back to her class. Over the years, her love to travel to exotic locations to find rare plants outgrew her passion of classroom teaching, so she decided to partner with someone who would be interested in working with these exotic plants. Still honoring her love for biology, she now leads our Labatory department and creates our artificial plants.</p>
            </div>
        </div>
        </div>
        <br>
        <br>
        <div class="card bg-secondary text-white">
            <div class="card-body">
                <h4 class="card-title">Lucia Lobbern</h4>
                <p class="card-text">
                    grew her passion for plants in a different light. For years she has loved to learn about flowers and is a botany major at Cornell University. Her love for botany begins in her childhood as she receives flowers from her father every week. These flowers intrigued her, but so did the flowers she read about in her SciFi Novels. She then paired her passion for botany with science fiction and presented the idea of SciFi flowers to her professor and peer, Dr. Hydrangea. Together, they partnered with Sapphire to bring the company SciFi Flowers to life.</p>
            </div>
        </div>
        </div>
        <br>
        <br>
        <div class="card bg-secondary text-white ">
            <div class="card-body">
                <h4 class="card-title">Sapphire Johnson</h4>
                <p class="card-text">
                began her passion for plants at a young age. Growing up in a small cottage in Oregon, she spent most afternoons exploring the world around her, and to her knowledge it was forestry. She would find strange plants of beautiful nature and test them. This curiosity led her to create a flower business in her hometown, selling traditional flowers, but she knew she wanted to reach a greater audience, and have a flower shop that stands out from the rest.</p>
            </div>
        </div>
        </div>
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
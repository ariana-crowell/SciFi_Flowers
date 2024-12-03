<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="img/logo.png" rel="icon">
        <style>
          .container{
            color:whitesmoke;
            background-color:rgba(59, 58, 57, 0.7);
            margin:3rem;
            text-align:center;
          }
          
          .aboutus {
            font-family: Jacques Francois Shadow;
            color:whitesmoke;
          }
          
          body {
            font-family: Arial, Helvetica, sans-serif;
          }
          
          .carousel {
            height:650px;
            width:1100px;
          }
          
          .carousel-control-next,.carousel-control-prev {
            filter:invert(100%);
          }
           /* Set the map to take the full viewport */
          body, html { 
            margin: 0; padding: 0; height: 100%;
           }
          #map { 
            width: 30%; height: 50%; 
          }
        </style>
  <!-- Mapbox CSS -->
   
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">

  <style>
    /* Set the map to take the full viewport */
    body, html { margin: 0; padding: 0; height: 100%; }
    #map { width: 30%; height: 50%; }
    p.solid {border-style: solid; color:grey }
  </style>

 

  </head>
    <body>
        <?php 
            require "includes/header.php"; 
        ?>

        <center><h1 class="aboutus">Welcome to Sci-Fi Flowers</h1>
        <div class="container"> 
        <p>
        Here at SciFi Flowers, we make lab-grown, custom flowers
         for customers seeking an exhilarating experience through 
         botany.
          Our mission is to create unique floral experiences,
          while promoting scientific exploration. Thers is A flower
          for everyone and we can provide.
      </p>
        </div>
      </center>

        <br>
        <center>
          <h1 class="aboutus">Welcome to Sci-Fi Flowers</h1>      
        </center>
        
        <div class="row">
            <div class="col-md-3"></div>

            <div class="container col-md-6">
                <p> 
                  Here at SciFi Flowers, we make lab-grown, custom flowers 
                  for customers seeking an exhilarating experience through
                  botany. Our mission is to create unique floral experiences, 
                  while promoting scientific exploration. 
                </p> 
            </div>

            <div class="col-md-3"></div>
        </div>    

        <div class="row">
        <div class="col-md-3"></div>

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
                        <img src="img/ScientistDNALab.jpg" class="d-block w-100" alt="lab title" style="height:41rem;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/SecondScientistDNALab.jpg" class="d-block w-100" alt="lab dna" style="height:41rem;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/PeonyAndRoseLab.jpg" class="d-block w-100" alt="lab flower" style="height:41rem;">
                    </div>
                   
                    <div class="carousel-item">
                        <img src="img/DaisiesInLab.jpg" class="d-block w-100" alt="lab flower" style="height:41rem;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ScientistWithSproutsLab.jpg" class="d-block w-100" alt="lab flower" style="height:41rem;">
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
            
            <div class="col-md-3"></div>
        </div>
        <br>
   <!-- Div to hold the map --> 

   <div id="map"></div> 

 

<!-- Mapbox JS --> 

<script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script> 

<script> 

  // Set up Mapbox access token 

  mapboxgl.accessToken = 'pk.eyJ1IjoiYW5pYXJvc3MyNSIsImEiOiJjbTNoZGh6eTAwZzZ5Mm1vZ2JoM2U4b2s4In0.PAgTbWOJ4FiEA6SFOzVvzA'; 

 

  // Create a new map instance 

  const map = new mapboxgl.Map({ 

    container: 'map', // Container id 

    style: 'mapbox://styles/mapbox/streets-v11', // Map style resembling Apple Maps 

    center: [-123.929, 45.993], // Coordinates for Seaside, Oregon 

    zoom: 12 // Initial zoom level 

  }); 

 

  // Add navigation controls (zoom in/out) 

  map.addControl(new mapboxgl.NavigationControl()); 

 

  // Add a marker to indicate Seaside, Oregon 

  new mapboxgl.Marker() 

    .setLngLat([-123.929, 45.993]) 

    .setPopup(new mapboxgl.Popup().setHTML("<h3>Seaside, Oregon</h3><p>A beautiful coastal town.</p>")) // Add a popup 

    .addTo(map); 

</script> 
<br>
        <?php
            include 'includes/footer.php';
        ?>
  </body>
</html>
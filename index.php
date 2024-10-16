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
        </main> 
    </body>
</html>
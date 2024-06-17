<?php

$censureWord = $_GET['censureWord'];
$paragraph = $_GET['paragraph'];

$parLength = strlen($paragraph);

$censPar = str_replace($censureWord,"***",$paragraph);
$censParLength = strlen($censPar);

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parola Censurata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>
 <body class="vh-100 d-flex bg-primary">
    <!-- ORIGINAL TEXT -->
    <div class="text-center m-auto bg-white p-4 rounded">
        <h1 class="mb-5">Testo Originale</h1>
        <p class="fs-2 mb-5">
            <?php echo $paragraph ?>
        </p>
        <span class="fs-5 fw-bold">Lunghezza: <?php echo $parLength ?></span>
    </div>

    <!-- CENSORED TEXT -->
    <div class="text-center m-auto bg-white p-4 rounded">
        <h1 class="mb-5">Testo Censurato</h1>
        <p class="fs-2 mb-5">
            <?php echo $censPar ?>
        </p>
        <span class="fs-5 fw-bold">Lunghezza: <?php echo $censParLength ?></span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
 </html>
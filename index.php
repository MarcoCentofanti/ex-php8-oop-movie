<?php 
    require_once "./Models/Genres.php";
    require_once "./Models/Movies.php";

    $interstellar = new Movies("Interstellar", "Christopher Nolan", "2014", 169, "In the near future, humanity faces extinction due to dust storms and widespread crop blights. Joseph Cooper, a widowed former NASA test pilot, works as a farmer...", new Genres("epic science fiction", "universe"));
   
    $arrival = new Movies("Arrival", "Denis Villeneuve", "2016", 116, "Linguist Louise Banks's daughter Hannah dies at the age of twelve from an incurable illness...", new Genres("science fiction", "drama"));





    $movies[] = $interstellar;
    $movies[] = $arrival;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <p class="">Esercizio OOP di PHP</p>
        <p>--------------------------------------------</p>
        <h1>Movies Catalog</h1>
        <div class="d-flex row">

            <?php 
        foreach($movies as $movie){
            ?>
            <div class="card border border-dark mb-1">
                
                <h2 class="text-center"><?php echo $movie->title ?></h2>
                <div class="row">
                    <p class="col-6">Director</p>
                    <p class="col-6"><?php echo $movie->director ?></p>
                </div>
                <div class="row">
                    <p class="col-6">Year</p>
                    <p class="col-6"><?php echo $movie->year ?></p>
                </div>
                <div class="row">
                    <p class="col-6">Director</p>
                    <p class="col-6"><?php echo $movie->director ?></p>
                </div>
                <div class="row">
                    <p class="col-6">Duration</p>
                    <p class="col-6"><?php echo $movie->duration ?></p>
                </div>
                <div class="row">
                    <p class="col-6">Plot</p>
                    <p class="col-6"><?php echo $movie->plot ?></p>
                </div>
                <div class="row">
                    <p class="col-6">Genres</p>
                    <p class="col-6"><?php echo $movie->genres->genre ?></p>
                </div>
                <div class="row">
                    <p class="col-6">Sub Genres</p>
                    <p class="col-6"><?php echo $movie->genres->subGenre ?></p>
                </div>
                
            </div>
            <?php
        }
        ?>
        </div>
        </div>
</body>
</html>
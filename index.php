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
    <title>Document</title>
</head>
<body>
    <p>Esercizio OOP di PHP</p>
    <p>--------------------------------------------</p>
    <h1>Movies Catalog</h1>
        <?php 
        foreach($movies as $movie){

            ?>
        <p><?php echo $movie->title ?></p>
        
        <?php
        }
        ?>
</body>
</html>
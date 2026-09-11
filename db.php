<?php

    $scienceFiction =new Genres("science fiction");
    $drama = new Genres("drama");
    $comedy = new Genres("comedy");
    $cartoon = new Genres("cartoon");
    $thriller = new Genres("thriller");
    $epic = new Genres("epic");
    $universe = new Genres("universe");

    $interstellar = new Movies("Interstellar", "Christopher Nolan", "2014", 169, "In the near future, humanity faces extinction due to dust storms and widespread crop blights. Joseph Cooper, a widowed former NASA test pilot, works as a farmer...", [$scienceFiction, $universe, $drama], 8.7);
   
    $arrival = new Movies("Arrival", "Denis Villeneuve", "2016", 116, "Linguist Louise Banks's daughter Hannah dies at the age of twelve from an incurable illness...", [$scienceFiction, $universe, $drama],  7.9);





    $movies[] = $interstellar;
    $movies[] = $arrival;

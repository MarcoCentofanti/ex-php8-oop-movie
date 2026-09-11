<?php

class Movies {

    use HasRating;
    public $title;
    public $director;
    public $year;
    public $duration;
    public $plot;
    public array $genres;

    public function __construct($title, $director, $year, $duration, $plot, $genres, $rating)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->duration = $duration;
        $this->plot = $plot;
        $this->genres = $genres;
        $this->rating = $rating;
    }

     public function getGenres(): array {
        return $this->genres;
     }

}
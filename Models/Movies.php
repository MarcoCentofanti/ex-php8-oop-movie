<?php

class Movies {
    public $title;
    public $director;
    public $year;
    public $duration;
    public $plot;
    public $genres;

    public function __construct($title, $director, $year, $duration, $plot, Genres $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->duration = $duration;
        $this->plot = $plot;
        $this->genres = $genres;
    }

    public function getPlot(){
        return $this->plot;
    }

}
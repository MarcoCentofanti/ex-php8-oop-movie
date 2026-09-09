<?php 

class Genres {
    public $genre;
    public $subGenre;

    public function __construct($genre, $subGenre)
    {
        $this->genre = $genre;
        $this->subGenre = $subGenre;
    }

}
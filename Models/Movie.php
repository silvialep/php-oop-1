<?php

class Movie {
    public $title;
    public $year;
    public $genres;
    public $director;
    public $actors;
    public $isMillennial = false;

    function __construct(string $title, int $year, Genres $genres, string $director, array $actors) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
        $this->director = $director;
        $this->actors = $actors;


        if($year >= 1981 && $year <= 1999) {
            $this->isMillennial = true;
        }

        if($this->isMillennial == true) {
            $this->isMillennial = 'Ok';
        } else {
            $this->isMillennial = 'Oh no';
        }
    }

    public function getStringFromArray() {
        return implode(', ', $this->actors);
    }



}
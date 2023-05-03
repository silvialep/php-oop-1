<?php

class Movie {
    public $title;
    public $year;
    public $genres;
    public $director;
    public $producers;
    public $actors;
    public $isMillennial = false;

    function __construct(string $title, int $year, array $genres, string $director, array $producers, array $actors) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
        $this->director = $director;
        $this->producers = $producers;
        $this->actors = $actors;


        if($year < 1981 || $year > 1999) {
            $this->isMillennial = true;
        }
    }



}
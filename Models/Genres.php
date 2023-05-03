<?php

class Genres {
    public $first;
    public $second;
    public $third;

    function __construct(string $first, string $second, string $third) {
        $this->first = $first;
        $this->second = $second;
        $this->third = $third;
    }

    public function getGenres() {
        return "{$this->first}, {$this->second}, {$this->third}";
    }
}
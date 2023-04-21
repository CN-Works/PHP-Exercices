<?php

// Producer

class Producer extends Person {
    // $movies will stack all movie as casting format, see Casting.php
    private array $movies = [];

    public function __construct(string $firstname, string $lastname, string $sex, string $dob) {
        parent::__construct();
    }

    // Movies
    public function getMovies(): array
    {
        return $this->movies;
    }

    public function setMovies($movies)
    {
        $this->movies = $movies;
    }

    
}

<?php

// Producer

class Producer extends Person {
    // Here, movies are not linked with casting
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

    // Adding a movie
    public function addMovie(Movie $new_movie) {
        $this->movie[] = $new_movie;
    }
}

<?php

// Producer

class Producer extends Person {
    private array $movies = [];

    
    // Movies
    public function getMovies(): array
    {
        return $this->movies;
    }

    public function setMovies($movies)
    {
        $this->movies = $movies;
    }

    public function addMovie (Movie $new_movie) {
        $this->movies[] = $new_movie;
    }
}

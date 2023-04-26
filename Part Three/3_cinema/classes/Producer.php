<?php

// Producer

class Producer extends Person {
    // Here, movies are not linked with casting
    private array $movies = [];

    public function __construct(string $firstname, string $lastname, string $sex, string $dob) {
        parent::__construct($firstname, $lastname, $sex, $dob);
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
        $this->movies[] = $new_movie;
    }

    public function showAllMovies() {
        $text = "<h2>".$this."'s movies</h2><br>";

        foreach($this->movies as $movie) {
            $text .= $movie."<br>";
        }

        return $text;
    }
}

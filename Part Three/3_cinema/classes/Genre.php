<?php

class Genre {
    private string $genreLabel;

    // movie storage
    private array $movies = [];

    // Setting up object
    public function __construct(string $genreLabel) {
        $this->genreLabel = $genreLabel;
    }

    public function __toString() {
        return $this->genreLabel;
    }

    // genre's label related
    public function getGenreLabel()
    {
        return $this->genreLabel;
    }

    public function setGenreLabel($genreLabel)
    {
        $this->genreLabel = $genreLabel;
    }

    // movie related
    public function getMovies(): array
    {
        return $this->movies;
    }

    public function setMovies($movies)
    {
        $this->movies = $movies;
    }

    public function addMovie(Movie $new_movie) {
        $this->movies[] = $new_movie;
    }

    public function showAllMovies(): string {
        $text = "<h2>All ".$this." movies</h2><br>";

        foreach($this->movies as $movie) {
            $text .= $movie;
        }

        return $text;
    }
}
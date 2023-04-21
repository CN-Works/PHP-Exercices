<?php

class Genre {
    private string $genreLabel;

    // movie storage
    private array $movies = [];

    // Setting up object
    public function __construct(string $genreLabel) {
        $this->genreLabel = $genreLabel;
    }
}
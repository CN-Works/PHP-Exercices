<?php

class Movie {
    // attributs
    private string $title;
    private DateTime $releaseDate;
    private int $duration;
    private string $synopsys;

    // Producer
    private Producer $producer;

    // Genre
    private Genre $genre;

    // Actors
    private array $actors = [];

    // Constructor
    public function __construct(string $title, string $releaseDate, int $duration, string $synopsys, Producer $producer, Genre $genre) {
        $this->title = $title;
        $this->releaseDate = new DateTime($releaseDate);

        // Movie data
        $this->duration = $duration;
        $this->synopsys = $synopsys;
        $this->genre = $genre;

        // Producer
        $this->producer = $producer;
    }
}
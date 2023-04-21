<?php

class Casting {
    // Basic informations
    private Producer $producer;
    private Movie $movie;

    // Saves Actor object & Role object in an array "item"
    private array $cast = [];

    public function __construct(Movie $movie, Producer $producer, array $cast) {
        $this->movie = $movie;
        $this->producer = $producer;
    }

    // public function __toString() {
    // }

}
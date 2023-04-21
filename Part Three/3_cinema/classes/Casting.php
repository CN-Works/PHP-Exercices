<?php

class Casting {
    // Basic informations
    private Producer $producer;
    private Movie $movie;

    // Saves Actor object & Role object in an array "item"
    private array $cast = [];

    public function __construct(Movie $movie, Producer $producer) {
        $this->movie = $movie;
        $this->producer = $producer;
    }

    public function __toString() {
        return $this->movie."'s casting produced by ".$this->producer;
    }

    // producer related
    public function getProducer()
    {
        return $this->producer;
    }

    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }



    // movie related
    public function getMovie()
    {
        return $this->movie;
    }

    public function setMovie($movie)
    {
        $this->movie = $movie;

        return $this;
    }



    // cast related
    public function getCast()
    {
        return $this->cast;
    }

    public function setCast($cast)
    {
        $this->cast = $cast;

        return $this;
    }

    // Adding actors & role to cast
    public function addingActorsAndRoles(Actor $actor, Role $role) {
        // Creating a sub array for organization
        $new_character = array(
            "actor" => $actor,
            "role" => $role,
        );

        // adding the new character to the cast
        $this->cast[] = $new_character;
    }
}
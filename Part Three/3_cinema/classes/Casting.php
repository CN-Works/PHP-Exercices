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

    // public function __toString() {
    // }
    
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
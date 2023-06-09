<?php

class Casting {
    // Basic informations
    private Movie $movie;

    // Saves Actor object & Role object in an array "item"
    private array $cast = [];

    public function __construct(Movie $movie) {
        // movie
        $this->movie = $movie;
        $this->movie->setCasting($this);
    }

    public function __toString() {
        return $this->movie."'s casting";
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

        $actor->addCharacter($role,$this);
        $role->addCasting($actor,$this);
    }

    public function showCasting() {
        $text = "<h2>".$this->movie."'s casting</h2><br>";

        foreach($this->cast as $info) {
            $text .= $info["actor"]." interpreting ".$info["role"]."<br>";
        }

        return $text;
    }
}
<?php

class Role {
    // Role information
    private string $roleName;
    
    private $castings = [];

    public function __construct(string $roleName) {
        $this->roleName = $roleName;
    }

    public function __toString() {
        return $this->roleName;
    }

    // Getters & setters

    public function getRoleName()
    {
        return $this->roleName;
    }

    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }



    // Casting related
    public function getCastings(): array
    {
        return $this->castings;
    }

    public function setCastings($castings)
    {
        $this->castings = $castings;
    }

    public function addCasting(Actor $actor, Casting $casting) {
        $new_casting = array(
            "actor" => $actor,
            "casting" => $casting,
        );

        $this->castings[] = $new_casting;
    }

    // Generals

    public function showAllCharacterApparition() {
        $text = "<h2>".$this->roleName."</h2><br>";

        foreach($this->castings as $info) {
            $text .= "Has been interpreted by "$info["actor"]." in ".$info["casting"]->getMovie()."<br>";
        }

        return $text;
    }
}
<?php
// Producer

class Actor extends Person {
    private array $characters = [];

    public function __construct(string $firstname, string $lastname, string $sex, string $dob) {
        parent::__construct($firstname, $lastname, $sex, $dob);
    }

    // Getter & setters

    // actors's characters related
    public function getCharacters(): array
    {
        return $this->characters;
    }

    public function setCharacters($characters)
    {
        $this->characters = $characters;
    }

    public function addCharacter(Role $role, Casting $casting) {
        $new_character = array(
            "role" => $role,
            "casting" => $casting,
        );

        // adding the data in main array
        $characters[] = $new_character;
    }

    public function showAllCharacters(): string {
        $text = "<h2>".$this." played roles</h2><br>";

        foreach($characters as $roleInfo) {
            $text .= $roleInfo["role"]." interpreting ".$roleInfo["casting"]->getMovie()."<br>";
        }

        return $text;
    }
}
<?php
// Producer

class Actor extends Person {
    private array $characters = [];

    public function __construct(string $firstname, string $lastname, string $sex, string $dob) {
        parent::__construct();
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
}
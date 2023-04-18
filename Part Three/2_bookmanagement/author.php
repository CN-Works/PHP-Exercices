<?php

class Author {
    private string $firstname;
    private string $lastname;

    public function __construct(string $firstname, string $lastname) {
        // setting arguments
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    // Return name of the author
    public function __toString() {
        return $this->firstname." ".$this->lastname;
    }

    // Properties getters & setters

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
}
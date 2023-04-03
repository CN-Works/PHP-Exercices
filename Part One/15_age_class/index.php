<?php

// main class
class Person {
    // Personal data
    protected string $firstname ;
    protected string $lastname ;
    
    // Date of birth
    protected string $dob;

    // Constructor
    public function __construct(string $firstname, string $lastname, string $dob) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
    }

    public function __toString() {
        // Age diff
        $age = date_diff(date_create($this->dob),date_create(date("d-m-y")));
        // returning a basic sentence
        return $this->firstname." ".$this->lastname." is ".$age->format("%y year old.");
    }
}


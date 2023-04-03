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
}
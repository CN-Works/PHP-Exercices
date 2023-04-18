<?php

class Person {
    // Identity
    private string $firstname;
    private string $lastname;
    private string $sex;

    // Date of birth
    private DateTime $dob;

    public function __construct(string $firstname, string $lastname, string $sex, string $dob) {
        // setting arguments
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->sex = $sex;
        $this->dob = new DateTime($dob);
    }

    public function __toString() {
        // returns person's name, ex : "John Doe"
        return $this->firstname." ".$lastname;
    }
}
<?php

// main class
class Person {
    // Personal data
    protected string $firstname ;
    protected string $lastname ;

    // Date of birth
    protected string $dob;

    // Constructor / adds arguments
    public function __construct(string $firstname, string $lastname, string $dob) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
    }

    // returns age in years
    public function computeAge() {
        // Age diff
        $age = date_diff(date_create($this->dob),date_create(date("d-m-y")));
        $year = $age->format("%y");
        return $year;
    }

    // returns a string when object is printed
    public function __toString() {
        // returning a basic sentence
        return $this->firstname." ".$this->lastname." is ".$this->computeAge()." year old.";
    }
}

// Creating entities (for tests)
$p1 = new Person("John","Doe","1980-02-19");
$p2 = new Person("Johanna","Doe","1985-01-17");

// Final print
echo $p1."<br>".$p2;
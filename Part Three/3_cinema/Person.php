<?php

class Person {
    // Identity
    protected string $firstname;
    protected string $lastname;
    protected string $sex;

    // Date of birth
    protected DateTime $dob;

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

    // Getter & setter


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



    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }



    public function getDob()
    {
        return date_format($this->dob,"d.m.y");
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }
}

// Producer

class Producer extends Person {
    // films
    private array $films = [];

    
    public function getFilms(): array
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;
    }
}

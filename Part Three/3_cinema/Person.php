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
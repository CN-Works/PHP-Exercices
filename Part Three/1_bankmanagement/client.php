<?php

class BankClient {
    // Personal information
    private string $firstname;
    private string $lastname;
    private string $dob;
    
    private string $city;

    // Acounts
    private string $uuid;

    private array $accounts;

    // Arguments
    public function __construct(string $firstname, string $lastname, string $dob, string $city) {
        // Personal properties
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->city = $city;

        // UUID generation
        $this->uuid = "MyCoolBank_".rand(1, 999999);

        // Printing Creation data
        echo $this->uuid." : ".$firstname." ".$lastname." just created an account at MyCoolBank's in ".$city." ! <br>";
    }

    // Accounts Getter & Setter
    public function getPersonalData() {
        // get "non-important" personal data
        $data = array(
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "dob" => $this->dob,
            "city" => $this->city,
            "id" =>$this->uuid,
        );
        // returns the array
        return $data;
    }
}
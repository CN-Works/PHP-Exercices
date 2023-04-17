<?php

class BankClient {
    // Personal information
    private string $firstname;
    private string $lastname;
    private string $dob;
    
    private string $city;

    private array $accounts = array();

    // Arguments
    public function __construct(string $firstname, string $lastname, string $dob, string $city) {
        // Personal properties
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->city = $city;

        // Printing Creation data
        echo $firstname." ".$lastname." just created an account at MyCoolBank's in ".$city." ! <br>";
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

    public function addAccount(Account $new_account) {
        // adding a new account
        //$this->accounts[$new_account->getAccountData()["uuid"]] = $new_account;
        array_push($this->accounts,$new_account);
    }
}
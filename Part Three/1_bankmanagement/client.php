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
            "id" => $this->uuid,
        );
        // returns the array
        return $data;
    }

    // Firstname
    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname(string $new_name) {
        $this->firstname = $new_name;
    }

    // Lastname
    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname(string $new_name) {
        $this->lastname = $new_name;
    }

    // City
    public function getCity() {
        return $this->city;
    }

    public function setCity(string $new_city) {
        $this->city = $new_city;
    }

    // Uneditable data
    public function getDateOfBirth() {
        return $this->dob;
    }
    
    public function getBankIdentifier() {
        return $this->uuid;
    }

    // General function

    public function addAccount(Account $new_account) {
        // adding a new account
        //$this->accounts[$new_account->getAccountData()["uuid"]] = $new_account;
        array_push($this->accounts,$new_account);
    }
    
    public function showAccounts() {
        // generating a string for return
        $text = $this->firstname." ".$this->lastname."'s bank accounts.<br>";
        foreach($this->accounts as $key => $value) {
            $text = $text."<br>".$value->getAccountData()["uuid"]." : ".$value->getAccountData()["amount"].$value->getAccountData()["currency"];
        }

        return $text;
    }
}
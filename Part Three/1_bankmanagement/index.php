<?php

class BankClient {
    // Personnal information
    private string $firstname;
    private string $lastname;
    private string $dob;
    
    private string $city;

    // Acounts
    private string $uuid = "MCB_".rand(1, 999999);

    private array $account_main = array(
        "currency" => "$",
        "amount" => 0.0,
    );
    private array $account_saving = array(
        "currency" => "$",
        "amount" => 0.0,
    );

    // Arguments
    public function __construct(string $firstname, string $lastname, string $dob, string $city) {
        // Personnal properties
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->city = $city;

        // Printing Creation data
        echo $firstname." ".$lastname." just created an account at CoolBank's in ".$city." !";
    }

    // Get & Set methods
    public function getAccountData(string $accounttype) {
        // Main account
        if ($accounttype == "main") {
            return($this->account_main)
        // Saving account
        } elseif ($accounttype == "saving") {
            return($this->account_saving)
        // returning 0 if input isn't correct
        } else {
            return(0);
        }
    }
}
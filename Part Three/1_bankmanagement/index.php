<?php

class BankClient {
    // Personnal information
    private string $firstname;
    private string $lastname;
    private string $dob;
    
    private string $city;

    // Acounts
    private string $uuid;

    private array $account_main = array(
        "currency" => "$",
        "amount" => 750.0,
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

        // UUID generation
        $this->uuid = "MyCoolBank_".rand(1, 999999);

        echo "id : ".$this->uuid."<br>";


        // Printing Creation data
        echo $firstname." ".$lastname." just created an account at MyCoolBank's in ".$city." !";
    }

    // Accounts Getter & Setter

    public function getAccountData(string $accounttype) {
        // Main account
        if ($accounttype == "main") {
            return($this->account_main);
        // Saving account
        } elseif ($accounttype == "saving") {
            return($this->account_saving);
        // returning 0 if input isn't correct
        } else {
            return(0);
        }
    }

    private function setAccountAmount(string $accounttype, float $amount) {
        // Adding money to main account
        if ($accounttype == "main" && $amount >= 0) {
            $this->account_main["amount"] = $amount;
        // Adding money to saving account
        } elseif ($accounttype == "saving" && $amount >= 0) {
            $this->account_saving["amount"] = $amount;
        // returning 0 if input isn't correct
        } else {
            return(0);
        }
    }

    // Remove & Add money

    public function removeAccountMoney(string $accounttype, float $amount) {
        if ($accounttype == "main") {
            // Get account money
            $money = $this->getAccountData("main")["amount"];

            // Checking if client can pay
            if ($amount <= $money) {
                $this->setAccountAmount("main",$amount);
                echo $amount.$this->getAccountData("main")["currency"]."have been added to ".$this->firstname." ".$this->firstname."'s account !";
            } else {
                echo $this->firstname." ".$this->firstname." has not enough money !";
            }
        } elseif ($accounttype == "saving") {
            // Get account money
            $money = $this->getAccountData("saving")["amount"];

            // Checking if client can pay
            if ($amount <= $money) {
                $this->setAccountAmount("saving",$amount);
                echo $amount.$this->getAccountData("saving")["currency"]."have been added to ".$this->firstname." ".$this->firstname."'s account !";
            } else {
                echo $this->firstname." ".$this->firstname." has not enough money !";
            }
        } else {
            // Returns 0 if input isn't correct
            return(0);
        }
    }
}

$Ludwig = new BankClient("Ludwig","Meyer",date("d-m-y"),"Munich");
$Alfred = new BankClient("Alfred","Bamer",date("d-m-y"),"London");

echo "<br> ----- <br>";
//echo $Ludwig->firstname." a ".$Ludwig->getAccountData("main")["amount"].$Ludwig->getAccountData("main")["currency"]." sur le compte !";
echo "<br> ----- <br>";
//echo $Alfred->firstname." a ".$Alfred->getAccountData("main")["amount"].$Alfred->getAccountData("main")["currency"]." sur le compte !";
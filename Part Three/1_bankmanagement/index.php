<?php

class BankClient {
    // Personal information
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
        );
        // returns the array
        return $data;
    }

    public function getAccountData(string $accounttype) {
        // Main account
        if ($accounttype == "main") {
            return($this->account_main);
        // Saving account
        } elseif ($accounttype == "saving") {
            return($this->account_saving);
        }
    }

    private function setAccountAmount(string $accounttype, float $amount) {
        // Adding money to main account
        if ($accounttype == "main" && $amount >= 0) {
            $this->account_main["amount"] = $amount;
        // Adding money to saving account
        } elseif ($accounttype == "saving" && $amount >= 0) {
            $this->account_saving["amount"] = $amount;
        }
    }

    // Remove & Add money

    public function removeAccountMoney(string $accounttype, float $amount) {
        // negative amount
        if ($amount <= 0) {
            echo "Can't remove a negative amount.";
            return;
        }

        if ($accounttype == "main") {
            // Get account money
            $money = $this->getAccountData("main")["amount"];

            // Checking if client can pay
            if ($amount <= $money) {
                $money = $money-$amount;
                $this->setAccountAmount("main",$money);
                echo $amount.$this->getAccountData("main")["currency"]." have been removed from ".$this->firstname." ".$this->lastname."'s account !";
            } else {
                echo $this->firstname." ".$this->firstname." has not enough money !";
            }
        } elseif ($accounttype == "saving") {
            // Get account money
            $money = $this->getAccountData("saving")["amount"];

            // Checking if client can pay
            if ($amount <= $money) {
                $money = $money-$amount;
                $this->setAccountAmount("saving",$money);
                echo $amount.$this->getAccountData("saving")["currency"]." have been removed from ".$this->firstname." ".$this->lastname."'s account !";
            } else {
                echo $this->firstname." ".$this->firstname." has not enough money !";
            }
        }
    }

    public function giveAccountMoney(string $accounttype, float $amount) {
        // negative amount
        if ($amount <= 0) {
            echo "Can't give a negative amount.";
            return;
        }

        if ($accounttype == "main") {
            // Get account money
            $money = $this->getAccountData("main")["amount"];
            
            // Adding the money
            $money = $money+$amount;
            $this->setAccountAmount("main",$money);

            // Message
            echo $amount.$this->getAccountData("main")["currency"]." have been added to ".$this->firstname." ".$this->lastname."'s account !";
        } elseif ($accounttype == "saving") {
            // Get account money
            $money = $this->getAccountData("saving")["amount"];
            
            // Adding the money
            $money = $money+$amount;
            $this->setAccountAmount("saving",$money);

            // Message
            echo $amount.$this->getAccountData("saving")["currency"]." have been added to ".$this->firstname." ".$this->lastname."'s account !";
        }
    }
}

$Ludwig = new BankClient("Ludwig","Meyer",date("d-m-y"),"Munich");
$Alfred = new BankClient("Alfred","Bamer",date("d-m-y"),"London");

echo "<br> ----- <br>";
$Ludwig->removeAccountMoney("main",50);
echo "<br> ----- <br>";
$Ludwig->giveAccountMoney("main",55);
echo "<br> ----- <br>";
echo $Ludwig->getPersonalData()["firstname"]." has ".$Ludwig->getAccountData("main")["amount"].$Ludwig->getAccountData("main")["currency"]." on his bank account !";
echo "<br> ----- <br>";
echo $Alfred->getPersonalData()["firstname"]." has ".$Alfred->getAccountData("main")["amount"].$Alfred->getAccountData("main")["currency"]." on his bank account !";
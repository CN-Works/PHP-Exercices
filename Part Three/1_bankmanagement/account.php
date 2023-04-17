<?php


class Account {
    // Basic informations
    public string $label;
    private string $currency;
    private float $amount;

    // Acount id
    private string $uuid;

    // Client related
    private BankClient $client;

    // Arguments
    public function __construct(BankClient $client, string $currency,float $default_amount,string $label) {
        // Setting up all args
        $this->client = $client;
        $this->currency = $currency;
        $this->label = $label;

        // UUID generation
        $this->uuid = "MCB_".rand(1, 999999999);

        // Default money
        $this->amount = $default_amount;

        echo "An account has been created with id : <strong>".$this->uuid."</strong>";
    }

    public function getAccountData() : array {
        $accountData = array(
            "amount" => $this->amount,
            "currency" => $this->currency,
            "label" => $this->label,
            "client" => $this->client,
            "uuid" => $this->uuid,
        );
        // Returning all data
        return $accountData;
    }

    // Amount
    public function getAmount() : float {
        return $this->amount;
    }

    public function setAmount(float $new_amount) {
        $this->amount = $new_amount;
    }

    // Currency
    public function getCurrency() : string {
        return $this->currency;
    }

    // Label
    public function getLabel() : string {
        return $this->label;
    }

    public function setLabel(string $new_label) {
        $this->label = $new_label;
    }

    // Client
    public function getClient() : BankClient {
        return $this->client;
    }

    public function setClient(BankClient $new_client) {
        $this->client = $new_client;
    }

    // Bank id
    public function getBankId() : string {
        return $this->uuid;
    }

    // Methods

    public function giveAccountMoney(float $amount) {
        if ($amount > 0) {
            $this->amount = $this->amount+$amount;
            echo "<br>".$this->uuid." : ".$amount.$this->currency." added. ".$this->amount.$this->currency." now.";
        } else {
            echo "Can't add an amount lower than zero.";
        }
    }

    public function removeAccountMoney(float $amount) {
        // Here we can't remove money if funds are insufficient
        if ($amount > 0 && $amount < $this->amount) {
            $this->amount = $this->amount-$amount;
            echo "<br>".$this->uuid." : ".$amount.$this->currency." removed. ".$this->amount.$this->currency." left.";
        } else {
            echo "Can't remove this amount of money (negative value or not enough money)";
        }
    }
}

// Transfer Function
function transferMoneyToOtherAccount(Account $account_one, Account $account_two, float $amount) {
    // Checking input values & currencies
    if ($amount > 0 && $account_one->getAccountData()["amount"] >= $amount && $account_one->getAccountData()["currency"] == $account_two->getAccountData()["currency"]) {
        // removing money to account one
        $account_one->removeAccountMoney($amount);
        // Giving money to the second account
        $account_two->giveAccountMoney($amount);
        // Print
        echo "<br>".$account_one->getAccountData()["uuid"]." has transfered ".$amount.$account_one->getAccountData()["currency"]." to ".$account_two->getAccountData()["uuid"];
    } else {
        echo "Invalid amount, negative value or sender's account has not enough money. ";
    }
}
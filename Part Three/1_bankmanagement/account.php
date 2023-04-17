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
    public function __construct(BankClient $client, string $currency,string $label) {
        // Setting up all args
        $this->client = $client;
        $this->currency = $currency;
        $this->label = $label;

        // UUID generation
        $this->uuid = "MCB_".rand(1, 9999999);

        // Just for testing
        $this->amount = 720.0;

        echo "An account has been created with id : <strong>".$this->uuid."</strong>";
    }

    public function getAccountData() : array {
        $accountData = array(
            "amount" => $this->amount,
            "currency" => $this->currency,
            "label" => $this->label,
            "client" => $this->client,
        );
        // Returning all data
        return $accountData;
    }
}
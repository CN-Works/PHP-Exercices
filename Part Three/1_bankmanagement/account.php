<?php

class Account {
    // Basic informations
    private string $currency;
    private float $amount;

    // Client related
    private BankClient $client;

    // Arguments
    public function __construct(BankClient $client, string $currency) {
        $this->client = $client;
        $this->currency = $currency;

        // Just for testing
        $this->amount = 720.0;
    }
}
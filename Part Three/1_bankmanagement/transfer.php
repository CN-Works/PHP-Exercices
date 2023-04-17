<?php

// Adding requirements
require "account.php";
require "client.php";

function transferMoneyToOtherAccount(Account $account_one, Account $account_two, float $amount) {
    if ($amount > 0 && $account_one->getAccountData()["amount"] >= $amount) {
        // removing money to account one
        $account_one->removeAccountMoney($amount);
        // Giving money to the second account
        $account_two->giveAccountMoney($amount);

    } else {
        echo "Invalid amount, negative value or sender's account has not enough money. ";
    }
}
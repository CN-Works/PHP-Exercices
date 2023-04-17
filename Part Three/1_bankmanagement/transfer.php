<?php

// Adding requirements
require "account.php";
require "client.php";

function transferMoneyToOtherAccount(Account $account_one, Account $account_two, float $amount) {
    // Checking input values & currencies
    if ($amount > 0 && $account_one->getAccountData()["amount"] >= $amount && $account_one->getAccountData()["currency"] == $account_two->getAccountData()["currency"]) {
        // removing money to account one
        $account_one->removeAccountMoney($amount);
        // Giving money to the second account
        $account_two->giveAccountMoney($amount);
        // Print
        echo $account_one->getAccountData()["uuid"]." has transfered ".$amount.$account_one->getAccountData()["currency"]." to ".$account_two->getAccountData()["uuid"];
    } else {
        echo "Invalid amount, negative value or sender's account has not enough money. ";
    }
}
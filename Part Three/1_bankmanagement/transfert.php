<?php

// Adding requirements
require "account.php";
require "client.php";

function transferMoneyToOtherAccount(Account $account_one, Account $account_two, float $amount) {
    if ($amount > 0 && $account_one->getAccountData()["amount"] >= $amount) {

    }
}
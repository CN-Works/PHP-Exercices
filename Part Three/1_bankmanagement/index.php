<?php

// Adding requirements
require "account.php";
require "client.php";

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

// Testing

echo "<br> -- Creating Clients -- <br>";
$Ludwig = new BankClient("Ludwig","Meyer",date("d-m-y"),"Munich");
$Felipe = new BankClient("Felipe","Salamanca",date("d-m-y"),"Los Cabos");

// Creating accounts
echo "<br> -- Creating Accounts -- <br>";
$savings = new Account($Ludwig,"$","Saving account");
$Ludwig->addAccount($savings);
$main_ludwig = new Account($Ludwig,"$","Main");
$Ludwig->addAccount($main_ludwig);

$main = new Account($Felipe,"$","Main");
$Felipe->addAccount($main);

// Account money
echo "<br> -- Amount of money -- <br>";
echo $savings->getAccountData()["amount"].$savings->getAccountData()["currency"];

// Give & remove money
echo "<br> ----- <br>";
$savings->removeAccountMoney(50.0);
echo "<br> ----- <br>";
$savings->giveAccountMoney(50.0);

// Money Transfer account to account
echo "<br> -- Money transfer -- <br>";
transferMoneyToOtherAccount($main,$savings,100);

// Show Bank accounts
echo "<br> -- All Accounts -- <br>";
echo $Ludwig->showAccounts();

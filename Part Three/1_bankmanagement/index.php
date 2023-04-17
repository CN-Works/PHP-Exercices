<?php

// Adding requirements
require "account.php";
require "client.php";

// Testing

echo "<br> -- Creating Clients -- <br>";
$Ludwig = new BankClient("Ludwig","Meyer",date("d-m-y"),"Munich");
$Felipe = new BankClient("Felipe","Salamanca",date("d-m-y"),"Los Cabos");

// Creating accounts
echo "<br> -- Creating Accounts -- <br>";
$savings = new Account($Ludwig,"$",720.0,"Saving account");
$Ludwig->addAccount($savings);
$main_ludwig = new Account($Ludwig,"$",720.0,"Main");
$Ludwig->addAccount($main_ludwig);

$main = new Account($Felipe,"$",720.0,"Main");
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

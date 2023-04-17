<?php

// Adding requirements
require "account.php";
require "client.php";

// Testing
echo "<br> -- Creating Clients -- <br>";
$Ludwig = new BankClient("Ludwig","Meyer",date("d-m-y"),"Munich");
$Felipe = new BankClient("Felipe","Salamanca",date("d-m-y"),"Los Cabos");
echo "<br> -- Creating Accounts -- <br>";
$savings = new Account($Ludwig,"$","Saving account");
$main = new Account($Felipe,"$","Main");
echo "<br> -- Amount of money -- <br>";
echo $savings->getAccountData()["amount"].$savings->getAccountData()["currency"];
echo "<br> ----- <br>";
$savings->removeAccountMoney(50.0);
echo "<br> ----- <br>";
$savings->giveAccountMoney(50.0);

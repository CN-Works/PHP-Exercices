<?php

// Adding requirements
require "account.php";
require "client.php";

// Testing

$Ludwig = new BankClient("Ludwig","Meyer",date("d-m-y"),"Munich");
//$Alfred = new BankClient("Alfred","Bamer",date("d-m-y"),"London");
echo "<br> ----- <br>";
$savings = new Account($Ludwig,"$","Saving account");
echo "<br> ----- <br>";
$Ludwig->addAccount($savings);

<?php

// Basket data | 1 = Price per item / 2 = Item amount
$basket = array(9.99,5);
$vat = 20;
$vat_ratio = $vat/100;

// Amount to pay
$amount = (float)$basket[0]*$basket[1];
$amount = number_format($amount, 2,".","");

// VAT calculation

// Print
echo "Taxes : ".$vat."% (".$vat_ratio.")\nTotal amount: ".$amount."$";
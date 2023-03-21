<?php

// Basket data | 1 = Price per item / 2 = Item amount
$basket = array(9.99,5);
$vat_ratio = 0.2;

// Amount to pay
$amount = $basket[1]*$basket[2];

// Print
echo "Total amount to pay : ".$amount;
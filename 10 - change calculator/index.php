<?php

// Scenario Data
$rest_change = 48;
echo "Amount : ".$rest_change."€";

// Banknote 10
if ($rest_change < 10) {
    echo "\n\nBanknote(10) : 0";
} else {
    $banknote_ten = floor($rest_change/10);
    $rest_change = $rest_change % 10;
    echo "\n\nBanknote(10) : ".$banknote_ten;
}

echo "\nrest :".$rest_change;

// Banknote 5
if ($rest_change < 5) {
    echo "\nBanknote(5) : 0";
} else {
    $banknote_five = floor($rest_change/5);
    $rest_change = $rest_change % 5;
    echo "\nBanknote(5) : ".$banknote_five;
}

echo "\nrest :".$rest_change;

// Coin 2
if ($rest_change < 2) {
    echo "\nCoin(2) : 0";
} else {
    $banknote_two = floor($rest_change/2);
    $rest_change = $rest_change % 2;
    echo "\nCoin(2) : ".$banknote_two;
}

echo "\nrest :".$rest_change;

// Coin 1
if ($rest_change < 1) {
    echo "\nCoin(1) : 0";
} else {
    $banknote_one = floor($rest_change/1);
    echo "\nCoin(1) : ".$banknote_one;
}

echo "\nrest :".$rest_change;
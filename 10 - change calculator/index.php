<?php

// Banknotes
$banknote_ten = 0;
$banknote_five = 0;
$banknote_two = 0;
$banknote_one = 0;

// Scenario Data
$rest_change = 475;
echo "Amount : ".$rest_change."€ <br>";

// Banknote 10
if ($rest_change < 10) {
    echo "<br> Banknote(10) : 0";
} else {
    $banknote_ten = floor($rest_change/10);
    $rest_change = $rest_change % 10;
    echo "<br> Banknote(10) : ".$banknote_ten;
}

// Banknote 5
if ($rest_change < 5) {
    echo "<br> Banknote(5) : 0";
} else {
    $banknote_five = floor($rest_change/5);
    $rest_change = $rest_change % 5;
    echo "<br> Banknote(5) : ".$banknote_five;
}

// Coin 2
if ($rest_change < 2) {
    echo "<br> Coin(2) : 0";
} else {
    $banknote_two = floor($rest_change/2);
    $rest_change = $rest_change % 2;
    echo "<br> Coin(2) : ".$banknote_two;
}

// Coin 1
if ($rest_change < 1) {
    echo "<br> Coin(1) : 0";
} else {
    $banknote_one = floor($rest_change/1);
    $rest_change = $rest_change % 1;
    echo "<br> Coin(1) : ".$banknote_one;
}
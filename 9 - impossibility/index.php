<?php

// Personnal Data
$age = 45;
$sex = "m";
$is_taxable = null;

// Taxable check
if ($sex == "m" && $age >= 20) {
    $is_taxable = true;
} elseif ($sex == "f" && $age >= 18 && $age <= 35) {
    $is_taxable = true;
}

// Sending message or not
if ($is_taxable) {
    echo "This person is taxable.";
} else {
    echo "This person isn't taxable.";
}
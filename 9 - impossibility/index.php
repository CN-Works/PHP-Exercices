<?php

// Personnal Data
$age = 25;
$sex = "m";
$is_taxable = null;

// Taxable check
if ($sex == "m" and $age >= 20) {
    $is_taxable = true;
} elseif ($sex == "f" and ($age >= 18 and $age <= 35)) {
    $is_taxable = true;
}

if ($is_taxable) {
    echo "This person is taxable.";
} else {
    echo "This person isn't taxable.";
}
<?php

// Default input
$age = 11;

// Main comparaison
$category = null;

if ($age >= 6 and $age <= 7) {
    $category = "Poussin";
} elseif ($age >= 8 and $age <= 9) {
    $category = "Pupille";
} elseif ($age >= 10 and $age <= 11) {
    $category = "Minime";
} elseif ($age >= 12) {
    $category = "Cadet";
}

if ($category == null) {
    echo "L’enfant qui a ".$age." ans n'appartient à aucune catégorie.";
} else {
    echo "L’enfant qui a ".$age." ans appartient à la catégorie « ".$category." »";
}
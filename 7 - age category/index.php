<?php

// Default input
$age = 11;

// Main comparaison

if ($age >= 6 and $age <= 7) {
    echo "L’enfant qui a ".$age." ans appartient à la catégorie « Poussin »";
} elseif ($age >= 8 and $age <= 9) {
    echo "L’enfant qui a ".$age." ans appartient à la catégorie « Pupille »";
} elseif ($age >= 10 and $age <= 11) {
    echo "L’enfant qui a ".$age." ans appartient à la catégorie « Minime »";
} elseif ($age >= 12) {
    echo "L’enfant qui a ".$age." ans appartient à la catégorie « Cadet »";
} else {
    echo "L’enfant qui a ".$age." ans n'appartient à aucune catégorie.";
}
<?php

// Base data
$formlist = array("Nom","Prénom","Ville");

// Main function
function generateFormFromArray($forms) {
    // Just checking if it's an array
    if (gettype($forms) != "array") {
        return "Your input is not an array !";
    }
}
<?php

// Base data
$formlist = array("Nom","Prénom","Ville");

// Main function
function generateFormFromArray($forms) {
    // Just checking if it's an array
    if (gettype($forms) != "array") {
        return "Your input is not an array !";
    }
    //
    $result = "<form>";

    // generating the input
    foreach ($forms as $label) {
        $result = $result."<label for='text'>".$result."</label><br>";
    }
    return $result;
}

// Final print
echo generateFormFromArray($formlist);
<?php

// Base data
$formlist = array("Firstname","Lastname","City","Car","Job");

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
        $result = $result."<label for='text'>".$label."</label><br><input type='text' id='text' name='text'><br>";
    }
    
    // Closing form and returning
    return $result."</form>";
}

// Final print
echo generateFormFromArray($formlist);
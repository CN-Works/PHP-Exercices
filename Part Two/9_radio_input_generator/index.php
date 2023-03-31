<?php

// selection options
$elements = array(
    "Male",
    "Female",
    // for people who don't want to give that information
    "Unspecified",
);

// Generation function
function showRadioSelectionFromList($list) {
    // As always, checking inputs
    if (gettype($list) != "array") {
        return "Your input list is not an array, please try again.";
    }
    // base
    $result = "";

    return $result;
}

// Print result
echo showRadioSelectionFromList($elements) ;
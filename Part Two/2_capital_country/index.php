<?php

// Default array
$capitales = array(
    "France" => "Paris",
    "Germany" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
);

// Main function using an array
function showCountryCapitalesFromArray($capitales) {
    if (gettype($text) == "array") {
        return "This is an array with ".count($capitales)." countries !";
    } else {
        return "Your input is not an array !";
    }
};

// Print result
echo showCountryCapitalesFromArray("test");
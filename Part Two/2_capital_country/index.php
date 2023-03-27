<?php

// Default array
$capitals = array(
    "France" => "Paris",
    "Germany" => "Berlin",
    "USA" => "Washington",
    "Italy" => "Rome",
    "Romania" => "Bucharest";
);

// Main function using an array
function showCountryCapitalesFromArray($capitals) {
    if (gettype($capitals) == "array") {
        return "This is an array with ".count($capitals)." countries and capitals!";
    } else {
        return "Your input is not an array, baka !";
    }
};

// Print result
echo showCountryCapitalesFromArray($capitals);
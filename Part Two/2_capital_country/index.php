<?php

// Default array
$capitals = array(
    "France" => "Paris",
    "Germany" => "Berlin",
    "USA" => "Washington",
    "Italy" => "Rome",
    "Romania" => "Bucharest",
);

// Main function using an array
function showCountryCapitalesFromArray($capitals) {
    if (gettype($capitals) == "array") {
        // Opening
        $result = "<table><tr><th>Country</th><th>Capital</th></tr></>";

        // Adding every Key and Value to the table
        $temp_text = "";
        foreach ($capitals as $country => $capital) {
            // Upper case for country name
            $temp_text = $temp_text."<tr><td>".strtoupper($country)."</td><td>".$capital."</td></tr>";
        }

        // Return result and closing table
        $result = $result."".$temp_text."</table>";
        return $result;
    } else {
        return "Your input is not an array, baka !";
    }
};

// Print result
echo showCountryCapitalesFromArray($capitals);
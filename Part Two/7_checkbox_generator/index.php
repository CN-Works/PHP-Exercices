<?php

// Checkbox items
$elements = array(
    "Sushi",
    "Sandwich",
    "Soup",
    "Salad",
    "Kebab",
);

// Main function

function showCheckboxesFromList($list) {
    $result = "<h1>Please choose something to eat</h1> <form>";

    foreach ($list as $item) {
        $result = $result."<input type='checkbox' name='food' value=".strtolower($item)."><label for=".strtolower($item)."> ".$item." </label><br>";
    }

    // Closing form
    $result = $result."</form>";

    // returning final result
    return $result;
}

// Printing result
echo showCheckboxesFromList($elements);
<?php

// Elements list
$elements = array(
    "Sausage",
    "Cheese",
    "Ham",
    "Tomato",
    "Chicken"
);

// Main function

function showSelectorFromList($list) {
    // Opening selection menu
    $result = "<label for='food-select'>Choose an extra :</label> <select name='extra-selector'>";

    // Adding a "none" option as default.
    $result = $result." <option value='default'>None</option>";

    // Item insert
    foreach ($list as $item) {
        $result = $result." <option value=".strtolower($item).">".$item."</option>";
    }

    // closing selection menu
    $result = $result."</select>";

    return $result;
}

// Print result

showSelectorFromList($elements);
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
    $result = "<form> ";

    foreach ($list as $item) {
        $result = $result."<input type='radio' name='sex-selector'><label>".$item."</label><br>";
    }

    // closing form
    $result = $result."</form>";

    return $result;
}

// Just printing an H1 for design
echo "<h1>Exercice n°9 : Sex-selector</h1>";

// Print result
echo showRadioSelectionFromList($elements) ;
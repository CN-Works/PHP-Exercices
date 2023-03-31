<?php

// Base data

$available_sex = array(
    "Male",
    "Female",
    // for people who don't want to give that information
    "Unspecified",
);

$available_course = array(
    "Web developer",
    "Web design",
    "Front-end developer",
    "Back-end developer",
);

$needed_textdata = array(
    "Lastname",
    "Firstname",
    "email",
    "City",
);

/* All UI Functions */

// Radio-list function
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

// Selector function
function showSelectorFromList($list) {
    // Opening selection menu
    $result = "<select name='extra-selector'>";

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

// Text-input function
function showTextInputFromList($list) {
    // As always, checking inputs
    if (gettype($list) != "array") {
        return "Your input list is not an array, please try again.";
    }
    // base
    $result = "<form>";



    // Closing form
    $result = $result."</form>";

    return $result;
}
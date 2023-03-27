<?php

// Default input
$text = "my default cool text";

// Main function
function toLowerRed($text) {
    // just checking that input is a string
    if (gettype($text) == "string") {
        $text = strtoupper($text);
        // the text text needs to be red
        return "<p style='color : red;'>".$text."</p>";
    } else {
        return "Your input is not a string !";
    }
}

// Printing result
echo toLowerRed($text);

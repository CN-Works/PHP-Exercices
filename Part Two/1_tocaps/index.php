<?php

// Default input
$text = "my default cool text";

function toLowerRed($text) {
    if (gettype($text) == "string") {
        $text = strtoupper($text);
        return "<p style='color : red;'>".$text."</p>";
    } else {
        return "Your input is not a string !";
    }
}


echo toLowerRed($text);

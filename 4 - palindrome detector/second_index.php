<?php

// Base Sentence (here, in french)

$text = "Engage le jeu que je le gagne";

// Preparting Inital base text

// Lowering the string
$text_initial = strtolower($text);
// Removing all the space
$text_initial = str_replace(" ","",$text_initial);

// String Reverse function

function StringReverse($input_text) {
    $letters = "";
    for($i=strlen($input_text);$i>=0;$i--)
    {
        $letters.=$input_text[$i];
    }
    return($input_text);
}


// Result
echo StringReverse($text_initial);

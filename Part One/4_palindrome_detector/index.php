<?php

// Base Sentence (here, in french)

$text = "Engage le jeu que je le gagne";

// Preparting Inital base text

// Lowering the string
$text_initial = strtolower($text);
// Removing all the space
$text_initial = str_replace(" ","",$text_initial);

// Reversed string

$text_reversed = strrev($text_initial);

// Result

if ($text_initial == $text_reversed) {
    echo "The sentence < ".$text." > is a palindromic sentence !";
} else {
    echo "The sentence < ".$text." > is not a palindromic sentence !";
}

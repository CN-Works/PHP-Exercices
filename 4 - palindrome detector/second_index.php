<?php

// Base Sentence (here, in french)

$text = "Engage le jeu que je le gagne";

// Preparting Inital base text

// Lowering the string
$text_initial = strtolower($text);
// Removing all the space
$text_initial = str_replace(" ","",$text_initial);

// String Reverse function

function StringReverse($str)
{
    if (strlen($str) <= 1) return $str;
 
    $newstr = '';
    $newstr .= substr($str,-1).StringReverse(substr($str,0,strlen($str)-1));
 
    return $newstr;
}

// Result

echo StringReverse($text_initial);

<?php

// Base Sentence (here, in french)

$text = "Engage le jeu que je le gagne";

// Preparting Inital base text

// Lowering the string
$text_initial = strtolower($text);
// Removing all the space
$text_initial = str_replace(" ","",$text_initial);


// Result
echo "$text_initial";

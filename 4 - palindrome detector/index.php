<?php

// Base Sentence in french
$text = "Engage le jeu que je le gagne";
$reversed_text='';

// Reversing the text to check if it is a palindromic sentence
for($i=strlen($text);$i>=0;$i--)
{
    $reversed_text.=$text[$i];
}

if ($text = $reversed_text) {
    echo "The sentence < ".$text." > is a palindromic sentence !";
} else {
    echo "The sentence < ".$text." > is not a palindromic sentence !";
}
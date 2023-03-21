<?php

// Base Sentence in french
$text = "Engage le jeu que je le gagne";
$base_text = $text;
$text = strtolower($text);
$reversed_text='';

// removing space in sentence
str_replace(" ","",$text);
echo "reversed : $text \n "
$modified_text = $text;
$reversed_text = $modified_text;
$cache_letters = "";

// Reversing the sentence
for($i=strlen($reversed_text);$i>=0;$i--)
{
    $cache_letters.=$reversed_text[$i];
}

if ($modified_text == $reversed_text) {
    echo "The sentence < ".$base_text." > is a palindromic sentence !";
} else {
    echo "The sentence < ".$base_text." > is not a palindromic sentence !";
}

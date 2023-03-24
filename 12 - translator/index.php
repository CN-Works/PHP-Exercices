<?php

// Translations
$locales = array(
    "FR" => "Bonjour",
    "EN" => "Hello",
    "ES" => "Holà",
    "IT" => "Ciao",
)

// Users and their language
$users = array(
    "Damien" => "EN",
    "Arnaud" => "FR",
    "Giancarlo" => "ES",
    "Emma" => "IT", 
)

// Hello function
function SayHelloFromLanguage($username, $language) {
    echo "<br>".$locales[$language]." ".$username." !";
}

// Loop for printing
foreach ($user as $name => $language) {
    echo SayHelloFromLanguage($name,$language);
}

<?php

// Translations
$locales = array(
    "FR" => "Bonjour",
    "EN" => "Hello",
    "ES" => "Holà",
    "IT" => "Ciao",
);

// Users and their language
$users = array(
    "Damien" => "EN",
    "Arnaud" => "FR",
    "Giancarlo" => "ES",
    "Emma" => "IT",
);

// Saying-Hello function
function SayHelloFromLanguage($username, $language,$locales) {
    echo "<br>".$locales[$language]." ".$username." !";
}

// Loop for printing
foreach ($users as $name => $language) {
    SayHelloFromLanguage($name,$language,$locales);
}

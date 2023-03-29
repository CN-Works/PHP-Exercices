<?php

// Sponge Bob ^^
$imagelink = "https://images5.fanpop.com/image/photos/28800000/spongebob-spongebob-squarepants-28841934-1183-1556.jpg";

// reapeat function

function showImageFromLink($link,$repeat) {
    // Checking if inputs are correct
    if (not gettype($link) == "string" && not gettype($repeat) == "integer") {
        return "Your input are not correct !";
    }

    // result var
    $result = "";

    // main loop
    for ($i = 1; $i <= 10; $i++) {
        $result =  $result."<br>".$i;
    }

    return $result;
}

// Showing result
echo showImageFromLink($imagelink,4);
<?php

// Sponge Bob ^^
$imagelink = "https://images5.fanpop.com/image/photos/28800000/spongebob-spongebob-squarepants-28841934-1183-1556.jpg";

// reapeat function

function showImageFromLink($link,$repeat) {
    // Checking if inputs are correct
    if (gettype($link) != "string" && gettype($repeat) != "integer") {
        return "Your input are not correct !";
    }

    // result var
    $result = "";

    // main loop
    for ($i = 1; $i <= $repeat; $i++) {
        $result =  $result."<br> <img src="$link" alt='A cool spongebob image focused on his face'>";
    }

    return $result;
}

// Showing result
echo showImageFromLink($imagelink,4);
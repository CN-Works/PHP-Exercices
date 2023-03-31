<?php

// default mail for testing
$email = "john.doe@example.com";

// checking function
function checkingEmailFromInput($input) {
    return filter_var($input, FILTER_VALIDATE_EMAIL);
}

// Printing result
if (checkingEmailFromInput($email)) {
    echo '"'.$email.'" is a valid email address !';
} else {
    echo '"'.$email.'" is not a valid email address !';
}

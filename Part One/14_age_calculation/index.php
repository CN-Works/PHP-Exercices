<?php

// Default dates
$originaldate = "17-01-1985";
$date = $originaldate;

// Converting to date format and
// Calc. Difference
$result = date_diff(create_date($date),create_date(date("d-m-y")));

// Printing result
echo "You were born on !";

<?php

// Default dates
$originaldate = "17-01-1985";
$date = $originaldate;

// Converting to date format and
// Calc. Difference
$result = date_diff(date_create($date),date_create(date("d-m-y")));

// Printing result
echo "You were born on ".$date." !";
echo "<br> It was ".$result->format("%d days, %m months and %y years ago !");

<?php

// Default dates
$originaldate = "17-01-1985";
$todaysdate = date("d-m-Y");

// Converting to date format
$date = create_date($originaldate);
$todaysdate = create_date($todaysdate);

// Calc. Difference
$result = date_diff($date,$todaysdate);

// Printing result
echo "You were born on ".$originaldate." !";

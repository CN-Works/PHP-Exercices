<?php

// Default date
$originaldate = "17-01-1985";
$todaysdate = date("d-m-Y");

// Converting
$date = create_date($originaldate);
$todaysdate = create_date($todaysdate);

// Calc. Difference

$result = date_diff($date,$todaysdate);

echo "You were born on ".$originaldate." !";

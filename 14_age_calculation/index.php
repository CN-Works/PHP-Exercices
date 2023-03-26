<?php

// Default age

$date = "17-01-1985";
$today = date("d-m-Y");

// Converting
$date = create_date($date);
$today = create_date($today);

// Calc. Difference

$result = date_diff($date,$today);

echo $result;

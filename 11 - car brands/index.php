<?php

// Car table
$cars = array("Mercedes","BMW","AUDI","BUGATTI");

// Printing table lenght
echo "There are ".count($cars)." different car brand in this table !";

// Main loop
foreach ($cars as $brand) {
    echo "<br>- ".$brand;
}
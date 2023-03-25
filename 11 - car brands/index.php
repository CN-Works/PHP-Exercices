<?php

// Car table
$cars = array("Mercedes","BMW","Audi","Bugatti","Alfa Romeo","Aurus","McLaren");

// Printing table lenght
echo "There are ".count($cars)." different car brand in this table ! <br>";

// Main loop
foreach ($cars as $brand) {
    echo "<br>- ".$brand;
}
<?php

// Wanted table
$table = 8;

// Printing Table name
echo "Table ".$table.":";

// Calc. Loop
for ($i = 1; $i <= 10; $i++) {
    $result = $table*$i;
    echo "\n".$table." x ".$i." = ".$table*$i;
}

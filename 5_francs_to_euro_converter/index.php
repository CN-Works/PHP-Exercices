<?php

// Conversion Data
$conversion_ratio = 0.1524;
$input = 100;

// Converting Francs into Euro
$result = $input * $conversion_ratio;

// Formating for futur print
$input = number_format($input, 2,".","");
$result = number_format($result, 2,".","");

echo "Your ".$input." Francs worth ".$result."€ (Euro) !";
<?php

// Autoloader
spl_autoload_register(function ($class_name) {     
    include "classes/" . $class_name . '.php';
});

$producer_one = new Producer("Daniel","Pelard","m","15-10-1990");

echo $producer_one;

<?php

// Autoloader
spl_autoload_register(function ($class_name) {     
    include "classes/" . $class_name . '.php';
});

echo "test exo";
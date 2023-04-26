<?php

// Autoloader
spl_autoload_register(function ($class_name) {     
    include "classes/" . $class_name . '.php';
});

// Producers
$producer_one = new Producer("Daniel","Pelard","m","15-10-1990");
echo $producer_one;
echo "<br>----------<br>";
echo "Born in ".date_format($producer_one->getDob(),"d M Y");

// Genre
$genreFiction = New Genre("Fiction");

// Movies
$movie1 = new Movie("Devils in space","20-05-2005",115,"Cool film with devils in space",$producer_one,$genreFiction);
//echo "<br>----------<br>";
//echo $genreFiction->showAllMovies();

echo $producer_one->showAllMovies();
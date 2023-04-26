<?php

// Autoloader
spl_autoload_register(function ($class_name) {     
    include "classes/" . $class_name . '.php';
});

////////////////////////////////////////////

// Producers
$producer_one = new Producer("Daniel","Pelard","m","15-10-1990");

// Genre
$genreFiction = New Genre("Fiction");

// Actors
$actor1 = new Actor("Marc","Johnson","m","28-06-2001");

// Roles
$james_bond = new Role("James Bond");

// Movies
$movie1 = new Movie("Devils in space","20-05-2005",115,"Cool film with devils in space",$producer_one,$genreFiction);

// Casting
$casting1 = new Casting($movie1,$producer_one);

////////////////////////////////////////////

// Showing all movies by Genre
//echo "<br>----------<br>";
//echo $genreFiction->showAllMovies();

// Showing all movies by Producer
//echo $producer_one->showAllMovies();
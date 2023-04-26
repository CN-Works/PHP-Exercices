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
$actor2 = new Actor("Michel","Moustache","m","18-03-1995");

// Roles
$james_bond = new Role("James Bond");
$batman = new Role("Batman");

// Movies
$movie1 = new Movie("Devils in space","20-05-2005",115,"Cool film with devils in space",$producer_one,$genreFiction);
$movie2 = new Movie("Devils in space 2","20-05-2008",115,"Cool film with devils in space 2",$producer_one,$genreFiction);

// Casting
$casting1 = new Casting($movie1,$producer_one);
$casting1->addingActorsAndRoles($actor1,$james_bond);
$casting1->addingActorsAndRoles($actor1,$batman);
$casting1->addingActorsAndRoles($actor2,$batman);
// Second tests
$casting2 = new Casting($movie2,$producer_one);
$casting2->addingActorsAndRoles($actor2,$james_bond);

////////////////////////////////////////////

// Showing all movies by Genre
echo $genreFiction->showAllMovies();
echo "<br>----------<br>";

// Showing all movies by Producer
echo $producer_one->showAllMovies();
echo "<br>----------<br>";

// Showing all movies by Actor
echo $actor1->showAllCharacters();
echo "<br>----------<br>";

// Show casting
echo $casting1->showCasting();
echo "<br>----------<br>";

// Show all played roles by Role
echo $james_bond->showAllCharacterApparition();
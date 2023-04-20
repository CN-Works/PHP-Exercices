<?php

require "Author.php";
require "Book.php";

// Testing

$StephenKing = new Author("Stephen","King");

$fleau = new Book($StephenKing,"Le fléau",823,"1978",14.45);
$fleau2 = new Book($StephenKing,"Le fléau2",823,"1978",14.45);
$fleau3 = new Book($StephenKing,"Le fléau3",823,"1978",14.45);

echo $StephenKing->showAllBooks();
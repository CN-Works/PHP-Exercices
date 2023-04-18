<?php

require "Author.php";
require "Book.php";

// Testing

$StephenKing = new Author("Stephen","King");

$fleau = new Book($StephenKing,"Le fléau",823,"1978-01-01",14.45);
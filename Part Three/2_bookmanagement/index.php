<?php

class Book {
    // Information
    private string $title;
    private int $pages;
    private float $price;

    // firsname x lastnames
    private array $author;

    // Arguments
    public function __construct(string $title, string $author_firstname, string $author_lastname, int $pages, float $price) {
        $this->title = $title;
        $this->author = array(
            "firstname" => $author_firstname,
            "lastname" => $author_lastname,
        );
        $this->pages = $pages;
        $this->price = $price;
    }
}
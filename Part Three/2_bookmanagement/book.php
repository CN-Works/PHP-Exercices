<?php

class Book {
    // Information
    private string $title;
    private int $pages;
    private float $price;
    private DateTime $publicationDate;

    // Author class
    private Author $author;

    public function __construct(Author $author,string $title, int $pages, string $publicationDate, float $price) {
        // setting arguments
        $this->title = $title;
        $this->pages = $pages;
        $this->price = $price;

        // Date
        $this->publicationDate = date($publicationDate);

        // Author & book setter
        $this->author = $author;
        $this->author->addBook($this);
    }

    // Presentation message
    public function __toString() {
        return "<strong>".$this->title."</strong> (".$this->publicationDate.")";
    }
}
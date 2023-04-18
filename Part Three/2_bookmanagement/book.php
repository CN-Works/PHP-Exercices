<?php

class Book {
    // Information
    private string $title;
    private int $pages;
    private float $price;
    private string $publicationDate;

    // Author class
    private Author $author;

    public function __construct(string $title, int $pages, string $publicationDate, float $price) {
        // setting arguments
        $this->title = $title;
        $this->pages = $pages;
        $this->price = $price;

        // Date
        $this->publicationDate = $publicationDate;
    }

    // Presentation message
    public function __toString() {
        return "<strong>".$this->title."</strong> (".$this->publicationDate.")";
    }
}
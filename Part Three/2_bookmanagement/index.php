<?php

$registered_books = array();

class Book {
    // Information
    private string $title;
    private int $pages;
    private float $price;
    private string $publication;

    // firsname x lastnames
    private array $author;

    // Arguments
    public function __construct(string $title, string $author_firstname, string $author_lastname, int $pages, string $publication, float $price) {
        $this->title = $title;
        $this->author = array(
            "firstname" => $author_firstname,
            "lastname" => $author_lastname,
        );
        $this->pages = $pages;
        $this->price = $price;
        $this->publication = $publication;
    }

    // Presentation message
    public function __toString() {
        return $this->title." (".$this->publication.") : ".$this->pages." pages / ".$this->price."€";
    }
}

// Testing

$registered_books["Le fléau"] = new Book("Le fléau","Stephen","King",823,"1978",14);
echo $registered_books["Le fléau"];
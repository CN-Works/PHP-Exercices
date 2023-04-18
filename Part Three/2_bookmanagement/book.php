<?php

class Book {
    // Information
    private string $title;
    private int $pages;
    private string $publicationDate;
    private float $price;

    // Author class
    private Author $author;

    public function __construct(Author $author,string $title, int $pages, string $publicationDate, float $price) {
        // setting arguments
        $this->title = $title;
        $this->pages = $pages;
        $this->price = $price;

        // Date
        $this->publicationDate = $publicationDate;

        // Author & book linking
        $this->author = $author;
        $this->author->addBook($this);
    }

    // Presentation message
    public function __toString() {
        return "<strong>".$this->title."</strong> (".$this->publicationDate.")";
    }

    // getter & setter

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }


    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }


    public function getPages()
    {
        return $this->pages;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}
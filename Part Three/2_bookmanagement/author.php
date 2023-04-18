<?php

class Author {
    private string $firstname;
    private string $lastname;

    // Books
    private array $books = [];

    public function __construct(string $firstname, string $lastname) {
        // setting arguments
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    // Return name of the author
    public function __toString() {
        return $this->firstname." ".$this->lastname;
    }

    // Properties getters & setters

    // Name related
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    
    // Books
    public function getBooks()
    {
        return $this->books;
    }

    public function setBooks($books)
    {
        $this->books = $books;
    }

    public function addBook(Book $new_book) {
        $this->books[] = $new_book;
    }

    // Showing all books
    public function showAllBooks(): string {
        $text = "<h2>".$this."</h2>";

        foreach($this->books as $book) {
            $text .= "<br>".$book;
        }

        return $text;
    }
}
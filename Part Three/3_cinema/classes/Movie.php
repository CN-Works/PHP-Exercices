<?php

class Movie {
    // attributs
    private string $title;
    private DateTime $releaseDate;
    private int $duration;
    private string $synopsys;

    // Producer
    private Producer $producer;

    // Genre
    private Genre $genre;

    // Casting
    private Casting $casting ;

    // Constructor
    public function __construct(string $title, string $releaseDate, int $duration, string $synopsys, Producer $producer, Genre $genre) {
        $this->title = $title;
        $this->releaseDate = new DateTime($releaseDate);

        // Movie information
        $this->duration = $duration;
        $this->synopsys = $synopsys;
        $this->genre = $genre;
        $this->genre->addMovie($this);

        // Producer
        $this->producer = $producer;
    }

    // returns title
    public function __toString() {
        return $this->title." (".date_format($this->releaseDate,"Y").")";
    }

    
    // Getters & setter

    public function getProducer()
    {
        return $this->producer;
    }

    public function setProducer($producer)
    {
        $this->producer = $producer;
    }



    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }



    public function getSynopsys()
    {
        return $this->synopsys;
    }

    public function setSynopsys($synopsys)
    {
        $this->synopsys = $synopsys;

        return $this;
    }



    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }



    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }



    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }



    // casting related
    public function getCasting()
    {
        return $this->casting;
    }

    public function setCasting($casting)
    {
        $this->casting = $casting;
    }
}
<?php

class Movies
{
    public $name;
    public $genre;
    public $year;
    public $country;

    public function __construct($name, $genre, $year, $country)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->country = $country;
    }

    public function getMovie()
    {
        return $this->movie;
    }

    public function setMovie($movie)
    {
        $this->movie = $movie;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
 
    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
 
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }
 
}

$movie = new Movies ('Star Wars', 'Fantasy', 2022, 'USA');
var_dump($movie);

$movieSecond = new Movies ('Pippo', 'Fantasy', 1980, 'USA');
var_dump($movieSecond);

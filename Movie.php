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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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

$movie = new Movies('Star Wars', 'Fantasy', 2022, 'USA');
// var_dump($movie);

$movieSecond = new Movies('Pippo', 'Fantasy', 1980, 'USA');
// var_dump($movieSecond);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <ul>
            <li>
                <h1>Titolo: <?= $movie->getName() ?></h1>
            </li>
            <li>Genere: <?= $movie->getGenre() ?></li>
            <li>Anno: <?= $movie->getYear() ?></li>
            <li>Regista: <?= $movie->getCountry() ?></li>
        </ul>
        <ul>
            <li><h1>Titolo: <?= $movieSecond->getName() ?></h1>
            </li>
            <li>Genere: <?= $movieSecond->getGenre() ?></li>
            <li>Anno: <?= $movieSecond->getYear() ?></li>
            <li>Regista: <?= $movieSecond->getCountry() ?></li>
        </ul>
    </main>
</body>

</html>
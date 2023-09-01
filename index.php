<?php

// DEFINIZIONE DELLA CLASSE 'MOVIE'
class Movie
{
    // VARIABILI D'ISTANZA
    public $title;
    public $director;
    public $year;
    public $genres; // UTILIZZIAMO UN ARRAY PER I GENERI

    // COSTRUTTORE
    public function __construct($title, $director, $year, $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }

    // METODO PER STAMPARE LE INFORMAZIONI DEL FILM
    public function printInfo()
    {
        echo "Titolo: {$this->title}<br>";
        echo "Regista: {$this->director}<br>";
        echo "Anno: {$this->year}<br>";
        echo "Generi: " . implode(', ', $this->genres) . "<br>";
    }
}

// ISTANZA DEL PRIMO OGGETTO 'MOVIE' CON PIÙ GENERI
$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, ["Crime", "Drama"]);

// ISTANZA DEL SECONDO OGGETTO 'MOVIE' CON PIÙ GENERI
$movie2 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, ["Crime", "Drama", "Thriller"]);

// STAMPARE LE INFORMAZIONI DEI DUE FILM
echo "Informazioni del primo film:<br>";
$movie1->printInfo();
echo "<br>";

echo "Informazioni del secondo film:<br>";
$movie2->printInfo();
?>

<?php
class Movie {
    public $title;
    public $description;
    public $state;

    public function __construct($title, $description, $state) {
        $this->title = $title;
        $this->description = $description;
        $this->state = $state;
    }

}

$movie1 = new Movie('Titolo film 1', 'Descrizone', 'state');
$movie2 = new Movie('Titolo film 2', 'Descrizone', 'state');
$movie3 = new Movie('Titolo film 3', 'Descrizone', 'state');
$movie4 = new Movie('Titolo film 4', 'Descrizone', 'state');

 


<?php
class Movie {
    public $image;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;

    public function __construct($image, $title , $original_title , $nationality , $date , $vote) {
        $this->image = $image;
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
    }

}

$movie1 = new Movie('https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg', 'Il Padrino', 'The Godfather','en','1972-03-24','9.2');
$movie2 = new Movie('https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg', 'Il Padrino', 'The Godfather','en','1972-03-24','9.2');
$movie3 = new Movie('https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg', 'Il Padrino', 'The Godfather','en','1972-03-24','9.2');
$movie4 = new Movie('https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg', 'Il Padrino', 'The Godfather','en','1972-03-24','9.2');

 


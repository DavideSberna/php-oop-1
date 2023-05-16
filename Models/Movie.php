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
    public static function fetchAll($conn){
        $sql = "SELECT * FROM `movies`";
        $result = $conn->query($sql);
        return $result;
    }

     

}


 


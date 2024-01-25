<?php

class Movie {
  public $title;
  public $year;
  public $genre;
  public $description;
  public $duration;
  
  /**
   * function to generate new Movie object
   */
  public function __construct(string $_title, int $_year, string $_genre, string $_description, int $_duration){
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->description = $_description;
    $this->duration = $_duration;
  }

  public function getDuration(){
    $hours = intval($this->duration / 60);
    $remainingMinutes = $this->duration % 60;

    $output = '';

    if ($hours > 0) {
        $output .= $hours . 'h ';
    }

    if ($remainingMinutes > 0) {
        $output .= $remainingMinutes . 'm';
    }

    return $output;
  }

}

$movie1 = new Movie('Cinema1', 1995, 'action', 'film bello ma non bellissimo', 173);
$movie2 = new Movie('Cinema2', 2001, 'thriller', 'film da paura, ma non fa paura a nessuno', 118);

echo $movie1->title . ' <br>';
echo $movie1->year. ' <br>';
echo $movie1->genre. ' <br>';
echo $movie1->description. ' <br>';
echo $movie1->getDuration(). ' <br>';

echo $movie2->title . ' <br>';
echo $movie2->year. ' <br>';
echo $movie2->genre. ' <br>';
echo $movie2->description. ' <br>';
echo $movie2->getDuration(). ' <br>';

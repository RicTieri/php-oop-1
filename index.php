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
<?php
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/Genre.php';

$movie1 = new Movie('Cinema1', 1995, new Genre('action'), 'film bello ma non bellissimo', 173);
$movie2 = new Movie('Cinema2', 2001, new Genre('thriller'), 'film da paura, ma non fa paura a nessuno', 118);

echo $movie1->title . ' <br>';
echo $movie1->year . ' <br>';
echo $movie1->genre->firstGenre. ' <br>';
echo $movie1->description. ' <br>';
echo $movie1->getDuration(). ' <br>';

echo $movie2->title . ' <br>';
echo $movie2->year. ' <br>';
echo $movie2->genre->firstGenre. ' <br>';
echo $movie2->description. ' <br>';
echo $movie2->getDuration(). ' <br>';

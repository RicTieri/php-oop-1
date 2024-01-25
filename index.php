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

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop-1</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <header>
    <h1 class="text-center">
      PHP OOP 1
    </h1>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
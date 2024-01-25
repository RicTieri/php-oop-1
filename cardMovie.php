<?php
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/Genre.php';
include_once __DIR__ . '/db.php';

$movieList = [];

foreach($movies as $movie){
  $item = new Movie($movie['title'], $movie['year'], new Genre($movie['genre'][0]), $movie['description'], $movie['duration']);
  $movieList[] = $item;
}
?>

<?php foreach($movieList as $movie){ ?>
  <div class="col-4 px-3 py-4 d-flex">
    <div class="card align-stretch justify-content-evenly">
      <div class="card-body text-center d-flex flex-column justify-content-between">
        <h5 class="card-title"><?php echo $movie->title?></h5>
        <p class="card-text"><?php echo $movie->year?></p>
        <p class="card-text"><?php echo $movie->genre->firstGenre?></p>
        <p class="card-text"><?php echo $movie->description?></p>
        <p class="card-text"><?php echo $movie->getDuration()?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
<?php } ?>
<?php

require_once __DIR__ . "/models/movie.php";
require_once __DIR__ . "/models/genre.php";


$new_film1 = new movie (
  'spider man',
  'Tobey Maguire',
  'Sam Raimi',
  new genre(
    'fantascienza',
    'commedia',
  )
);

$new_film2 = new movie (
  'The Wolf of Wall Street',
  'Leonardo DiCaprio',
  'Martin Scorsese',
  new genre(
    'umorismo nero',
    'drammatico',
  )
);

$films =[$new_film1, $new_film2];


<?php

require_once __DIR__ . "/models/movie.php";
require_once __DIR__ . "/models/genre.php";

$genre1 = new genre(
  'fantascienza',
  'commedia',
);

$genre2 = new genre(
  'umorismo nero',
    'drammatico',
);

$new_film1 = new movie (
  'spider man',
  'Tobey Maguire',
  'Sam Raimi',
  $genre1,
  
);

$new_film2 = new movie (
  'The Wolf of Wall Street',
  'Leonardo DiCaprio',
  'Martin Scorsese',
  $genre2,
);

$movies =[
  $new_film1,
   $new_film2,
  ];

 


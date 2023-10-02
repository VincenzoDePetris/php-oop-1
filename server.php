<?php

require_once __DIR__ . "/models/production.php";
require_once __DIR__ . "/models/genre.php";
require_once __DIR__ . "/models/movie.php";
require_once __DIR__ . "/models/tv_serie.php";

$genre1 = new genre(
  'fantascienza',
  'commedia',
);

$genre2 = new genre(
  'umorismo nero',
    'drammatico',
);

$new_film1 = new production (
  'spider man',
  'Tobey Maguire',
  'Sam Raimi',
  $genre1,
  
);

$new_film2 = new production (
  'The Wolf of Wall Street',
  'Leonardo DiCaprio',
  'Martin Scorsese',
  $genre2,
);

$productions =[
  $new_film1,
   $new_film2,
  ];


  
$movie = new movie();
$TV_serie = new TV_serie();
 


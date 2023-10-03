<?php

require_once __DIR__ . "/models/production.php";
require_once __DIR__ . "/models/genre.php";
require_once __DIR__ . "/models/movie.php";
require_once __DIR__ . "/models/tv_serie.php";

$genre1 = new genre( 'fantascienza', 'commedia',);
$genre2 = new genre( 'umorismo nero', 'drammatico',);
$genre3 = new genre( 'drammatico', 'crime',);
$genre4 = new genre( 'thriller', 'soprannaturale',);

$new_film1 = new movie ( 'spider man', 'Tobey Maguire', 'Sam Raimi', $genre1, '2002', '121 minuti',);
$new_film2 = new movie ( 'The Wolf of Wall Street', 'Leonardo DiCaprio', 'Martin Scorsese', $genre2, '2014', '180 minuti' );

$new_TV_serie1 = new TV_serie ('Breaking Bad', 'Bryan Cranston',  'Vince Gilligan', $genre3, '2008', '2013', '62 episodi', '5',);
$new_TV_serie2 = new TV_serie ('Stranger Things', 'Millie Bobby Brown', 'Duffer bros', $genre4, '2016', 'in corso', '34 episodi', '4',);

$productions =[
  $new_film1,
  $new_film2,
  $new_TV_serie1,
  $new_TV_serie1,
  ];

 


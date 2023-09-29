<?php

require_once __DIR__ . "/models/movie.php";

$new_film = new movie (
  'spider man',
  'Tobey Maguire',
  'Sam Raimi'
);

var_dump($new_film->getFullInfo());
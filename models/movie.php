<?php

class movie extends production{
  public $published_year;
  public $running_time;

  public function __construct(
    string $title,
    string $main_character,
    string $director,
    genre $genre,
    string $published_year,
    string $running_time,
  ) {
    parent::__construct($title, $main_character, $director, $genre);
    $this-> published_year = $published_year;
    $this-> running_time = $running_time;
  }

  public function getFullInfo(){
    return
     "titolo: $this->title  <br>"  .
      ", attore protagonista: $this->main_character <br>" .
      ", regista: $this->director" .
      ", anno di pubblicazione: $this->published_year <br>" .
      ", durata in minuti: $this->running_time <br>";
  }
}
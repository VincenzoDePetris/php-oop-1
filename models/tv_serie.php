<?php

class TV_serie extends production{
  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(
    string $title,
    string $main_character,
    string $director,
    genre $genre,
    string $published_year,
    string $running_time,
  ) {
    parent::__construct($title, $main_character, $director, $genre);
    $this-> aired_from_year = $aired_from_year;
    $this-> aired_to_year = $aired_to_year;
    $this-> number_of_episodes = $number_of_episodes;
    $this-> number_of_seasons = $number_of_seasons;
  }

  public function getFullInfo(){
    return 
    "titolo: $this->title  <br>" . 
    ", attore protagonista: $this->main_character <br>" .
    ", regista: $this->director <br>" .
    ",  anno di messa in onda del primo episodio: $this->aired_from_year <br>" .
    ", anno di messa in onda dell'ultimo episodio: $this->aired_to_year <br>" .
    ", numero di episodi: $this->number_of_episodea <br>" .
    ",  numero di stagioni: $this->number_of_seasons <br>";
  }
}
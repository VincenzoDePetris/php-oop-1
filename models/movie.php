<?php

class movie
{
  public $title;
  public $main_character;
  public $director;
  public $genre;

  public function __construct(
    string $title,
    string $main_character,
    string $director,
    genre $genre,
  ) {
    $this->title = $title;
    $this->main_character = $main_character;
    $this->director = $director;
    $this->genre = $genre;
  }

  public function getFullInfo(){
    return "titolo: $this->title" . ", attore protagonista: $this->main_character" . ", regista: $this->director";
  }

 


}

?>
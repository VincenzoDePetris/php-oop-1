<?php

class genre{
  public $genre;
  public $subgenre;

  public function __construct(
    string $genre,
    string $subgenre,
  ) {
    $this-> genre = $genre;
    $this-> subgenre = $subgenre;
  }

  public function getFullGenre(){
    return "Genere: $this->genre , sottogenere: $this->subgenre";
  }
};
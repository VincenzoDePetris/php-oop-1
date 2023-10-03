<?php

trait cost {
  public $production_cost;
  public function getProductionCost() {
    return "I costi di produzione ammontano a $production_cost";
    }
}

class production
{
  public $title;
  public $main_character;
  public $director;
  public $genre;
  use cost;

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
    return 
    "titolo: $this->title <br>" . 
    ", attore protagonista: $this->main_character <br>" .
    ", regista: $this->director <br>";
  }

 


}

?>
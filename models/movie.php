<?php

class movie
{
  public $title;
  public $main_character;
  public $director;

  public function __construct(
    string $title,
    string $main_character,
    string $director,
  ) {
    $this->title = $title;
    $this->main_character = $main_character;
    $this->director = $director;
  }
}
<?php


class Movie {
//Creates the class attributes
private $movieName = '';
private $movieDirector = '';
private $movieArtist = '';
private $movieRating = '';
private $movieGenre = '';



//
function __construct(string $name, $director, $artist, $ratings, $genre) {
  $this->name = $name;
  $this->director = $director;
  $this->artist = $artist;
  $this->ratings = $ratings;
  $this->genre = $genre;
}

//Creates the accessor method __get
  function  __get($attr_name) {
    return $this->$attr_name;
  }
//Creates the accessor method __set
  function __set($attr_name, $value) {
    $this->$attr_name = $value;
  }
}


















?>

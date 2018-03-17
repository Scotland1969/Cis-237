<?php


class Movie {
//Creates the class attributes
private $name = '';
private $phone_number = '';
private $email = '';



function __construct(string $name, $phone_number, $email) {
  $this->name = $name;
  $this->phone_number = $phone_number;
  $this->email = $email;

}

//Creates the accessor method __set
  function __set($attr_name, $value) {
    $this->$attr_name = $value;
  }
}


















?>

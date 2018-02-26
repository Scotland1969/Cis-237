<?php

  require ("MovieManagerInterface.php") ;

  class FileMovieManager implements MovieManagerInterface{



   function __construct($movieObj) {

     $this->name = $movieObj->name;
     $this->director = $movieObj->director;
     $this->artist = $movieObj->artist;
     $this->ratings = $movieObj->ratings;
     $this->genre = $movieObj->genre;

    }

    function create(string $file) {

      $content = "$this->name,$this->director,$this->artist,$this->artist, $this->ratings,$this->genre";

      $fp = fopen($file, 'ab');
      if (!$fp){
        return false;
      }
      if (!fwrite($fp, $content)){
        return false;
      }
    if (!fclose($fp)){
        return false;
    }
    return true;


    }


    function read(string $path) {

      $list = file_get_contents($path);      

    }
    function readOneById() {

    }
    function update() {

    }

}

?>

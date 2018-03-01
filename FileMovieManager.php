<?php

  require ("MovieManagerInterface.php") ;
  require ("Movie.php");

  class FileMovieManager implements MovieManagerInterface{



   function __construct(string $path) {

     $this->path = $path;  

    }

    function create($movie) {

      $content = "$movie->name,$movie->director,$movie->artist,$movie->artist, $movie->ratings,$movie->genre";

      $fp = fopen($path, 'ab');
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


    function read() {

      $list = file_get_contents($path);

    }
    function readOneById() {

    }
    function update() {

    }

}

?>

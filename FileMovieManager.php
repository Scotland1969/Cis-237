<?php

  require ("MovieManagerInterface.php") ;


  class FileMovieManager implements MovieManagerInterface{



   function __construct($path) {

     $this->path = $path;


    }

    function create($movie):bool{



      $content = "$movie->name,$movie->director,$movie->artist, $movie->ratings,$movie->genre";

      $fp = fopen($this->path, 'ab');
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


    function read():string {

      $list = file_get_contents($this->path);

      return $list;

    }
    function readOneById(int $id) {
         

    }
    function update(int $id,Movie $movie):bool {
       return true;
    }

}

?>

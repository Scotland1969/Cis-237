<?php

require("DatabaseMovieManager.php");

$document_root = $_SERVER['DOCUMENT_ROOT'];

// A variable to store the path to the entries.txt file.
$path = "$document_root/../phonebook/entries.txt";

$alert = '<div class="alert alert-%s" roll="alert">%s</div>';

/**
*Pretty print arrays.
*@parm array $ARRAY
*/

function printArray(array $array) {
  echo '<pre>'. print_r($array,true) . '</prev>';
}

/**
*Write to a file
*@parmc string $file - path to file
*@parm string $content - string to write to the file
*@return bool
*/

function writeToFile(string $file, string $content) : bool {
  $fp = fopen($file, 'ab');
  if (!$fp){
    return false;
  }
  if (!fwrite($fp, $content."\n")) {
    return false;
  }
  if (!fclose($fp)){
    return false;
  }
  return true;
}




?>

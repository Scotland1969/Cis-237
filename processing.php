<?php
/*
   A function that accepts the file path and contents as its arguments. Then
   opens and writes the information stored in the contents variable to that
   file.
*/

function writeToFile(string $file, string $content) : bool {

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

/* A function that accepts the file path as an argument. Then uses the function
   file_get_contents to read the entire file and stores this information in the
   variable $list.
*/
function readFromFile(string $path) {

    $list = file_get_contents($path);

}

  // A variable to store the path to the servers document folder.
  $document_root = $_SERVER['DOCUMENT_ROOT'];

  // A variable to store the path to the entries.txt file.
  $path = "$document_root/../Movies/entries.txt";

  // Gets the user input through the global variable $_GET.
  extract($_GET);

  // Assigns all of the user input as a string to the variable $contents.
  $content = "$name, $director, $artist, $ratings, $Genre\n";

  /* Calls the function writeToFile and passes to it the users input
     and file path.
 */
  writeToFile($path,$content);

  /*
   Calls the function readFrom File and pass to it the file path as an
   argument.
  */
  readFromFile($path);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Movie Log</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body style="background-color:red">

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="AddMovie.html">
            Movie Log
         </a>
       </div>

         <ul class="nav navbar-nav navbar-right">
          <li><a href="AddMovie.html">Add Movies</a></li>
          <li><a href="list.php">List Movies</a></li>
         </ul>

     </div>
   </nav>
  </body>
 </html>

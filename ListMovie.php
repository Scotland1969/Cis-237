<?php


$list = '';


/* A function that accepts the file path as an argument. Then uses the function
   file_get_contents to read the entire file and stores this information in the
   variable $list.
*/
function readFromFile(string $path) {

    $list = file_get_contents($path);

    return $list;

}

  // A variable to store the path to the servers document folder.
  $document_root = $_SERVER['DOCUMENT_ROOT'];

  // A variable to store the path to the entries.txt file.
  $path = "$document_root/../Movies/entries.txt";

  

  /*
   Calls the function readFrom File and pass to it the file path as an
   argument.
  */
  $list = readFromFile($path);


  $movie_list = explode("\n", trim($list));
  $table_body = '';
  foreach ($movie_list as $entry) {
    $movies = explode(',',trim($entry));
    $table_body .= '<tr>';
    $table_body .= '<td>' . $movies[0] . '</td>';
    $table_body .= '<td>' . $movies[1] . '</td>';
    $table_body .= '<td>' . $movies[2] . '</td>';
    $table_body .= '<td>' . $movies[3] . '</td>';
    $table_body .= '<td>' . $movies[4] . '</td>';
    $table_body .= '</tr>';
  }

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

     <div class="container">
       <div class="row">
         <table class="table">
           <thead>
             <tr>
               <th>Movie Name</th>
               <th>Directors Names</th>
               <th>Artists</th>
               <th>Ratings</th>
               <th>Genres</th>
             </tr>
           </thead>
           <tbody>
             <?php echo $table_body; ?>
           </tbody>
         </table>
       </div>
     </div>

  </body>
 </html>

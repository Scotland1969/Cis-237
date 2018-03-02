<?php
//require ("FileMovieManager.php");

$id = null;

if (isset($_GET) && Isset($_GET['id'])){
  $id = $_GET['id'];

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
  <?php require ("FileMovieManager.php");?>
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
          <li><a href="ListMovie.php">List Movies</a></li>
         </ul>

     </div>
   </nav>

    <div class="container">
      <div class="row">

    <form action="" method="post" class="form-horizontal" novalidate>
      <h1 class="text-center">Edit Movies</h1>

          <div class="form-group">
            <label class="col-md-2 control-label" id="test">Movie Name</label>
            <div class="col-md-10">
              <input class="form-control" type="text" name="name" value="<?php $movie->name; ?>" required>
            </div>

          </div>
          <!--
            Defines the Directors label and input field.
          -->
          <div class="form-group">
            <label  class="col-md-2 control-label">Directors Names</label>
            <div class="col-md-10">
              <input class="form-control" type="text" name="director" value="<?php $movie->director; ?>" required>
            </div>
          </div>
           <!--
           Defines the Artists label and input field.
         -->
          <div class="form-group">
            <label  class="col-md-2 control-label">Artists</label>
            <div class="col-md-10">
              <input class="form-control" type="text" name="artist" value="<?php $movie->artist; ?>">
            </div>
          </div>
           <!--
             Defines the Ratings label and radio buttons.
           -->
           <div class="form-group">
              <label class="col-md-2 control-label">Ratings</label>
              <div class="btn-group" data-toggle="buttons" name="ratings">
                <label>
                  <input type="radio" style="width:20px; height:20px" name="ratings" id="option1" value="1" autocomplete="off" checked>1
                </label>

                <label>
                  <input type="radio" style="width:20px; height:20px" name="ratings" id="option2" value="2" autocomplete="off" >2
                </label>

                <label>
                  <input type="radio" style="width:20px; height:20px" name="ratings" id="option3" value="3" autocomplete="off" >3
                </label>

                <label>
                  <input type="radio" style="width:20px; height:20px" name="ratings" id="option4" value="4" autocomplete="off" >4
                </label>

                <label>
                  <input type="radio" style="width:20px; height:20px" name="ratings" id="option5" value="5" autocomplete="off" >5
                </label>

              </div>
          </div>


          <div class="form-group">
            <label  class="col-md-2 control-label">Genres</label>
            <div class="col-md-10" >
              <select name="Genre" size="3">
                <optgroup label="Genres">
                  <option value="Action">Action</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Crime">Crime</option>
                  <option value="Drama">Drama</option>
                </optgroup>
              </select>
           </div>
         </div>

         <div class="form-group">
           <div class="col-md-offset-2 col-md-10">
              <button type="submit" class="btn btn-primary">Submit</button>
           </div>
         </div>
        </form>
    </div>
    </div>
  </body>
</html>

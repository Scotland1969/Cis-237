<?php

require("base.php");
require("Movie.php");

extract($_GET);

if (!empty($name) && !empty($phone_number) && !empty($email)){
  $name = ucwords(trim($name));
  $pattern1 = "/^\d{3}-\d{3}-\d{4}$/";
  $phone_number = trim($phone_number);
  var_dump(preg_match($pattern1, $phone_number));
  $email = trim($email);
  $content = "$name,$phone_number,$email\n";

  if (!writeToFile($path, $content)){
    $message = sprintf("$alert",'danger', 'File could not be written to.');
  }else {
    $message = sprintf("$alert",'sucess', "$name got saved to the phonebook!");
  }
} else {
  $message = sprintf("$alert",'danger', 'Name, number, and email are required!');
}

$movie = new Movie($name,$phone_number,$email);


?>

<!DOCTYPE html>
<html>
  <?php require("head.php");?>

  <body>
      <?php require("nav.php");?>
      <div class="container">
        <div class="row">
          <?php  echo $message; ?>
        </div>
      </div>
  </body>
</html>

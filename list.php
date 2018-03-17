<?php

require("base.php");


$list = file_get_contents($path);

$phone_book = explode("\n",trim($list));

$table_body = '';

foreach ($phone_book as $entry) {
  $person = explode(',',trim($entry));
  $table_body .= '<tr>';
  $table_body .= '<td>'  . $person[0] . '</td>';
  $table_body .= '<td>'  . $person[1] . '</td>';
  $table_body .= '<td>'  . $person[2] . '</td>';
  $table_body .= '</tr>';
}


?>
<!DOCTYPE html>
<html>
  <?php require("head.php");?>

  <body class="layered-image">
      <?php require("nav.php");?>
      <div class="container">
        <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email Address</th>
              </tr>
          </thead>
            <tbody>
              <?php  echo $table_body; ?>
            </tbody>
          </table>
        </div>
      </div>
  </body>
</html>

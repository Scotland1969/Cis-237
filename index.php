<!DOCTYPE html>
<html>
  <?php require("head.php")?>

  <body>
    <?php require("nav.php")?>
    <div class="container">
      <div class="row">
      <h1 class="text-center">New Contact</h1>
      <form action="processing.php" method="GET" class="form-horizontal" >
        <div class="form-group">
          <label class="col-sm-2 control-label">Name</label>
          <div class="col-md-10">
            <input  class="form-control" type="text" name="name" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Phone Number</label>
          <div class="col-md-10">
            <input  class="form-control" type="text" name="phone_number" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Email</label>
          <div class="col-md-10">
            <input  class="form-control" type="text" name="email">
          </div>
        </div>
        <div  class="form-group">
          <div class="col-md-offset-2 col-md-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>

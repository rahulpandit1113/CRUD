<?php
include('conn.php');
if(isset($_POST['done'])){
  $name = $_POST['uname'];
  $pass = $_POST['upass'];

  $insert = "INSERT INTO first_crud (username,password) VALUE('$name','$pass')";
  $query = mysqli_query($con,$insert);
  header('location:display.php')
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title></title>
  </head>
  <body>
    <div class="container"><br><br>
      <div class="col-lg-5 m-auto">
        <div class="card">
          <div class="card-header bg-dark">
            <h2 class="text-center text-white">Insert Data</h2>
          </div><br>
          <form class="" action="" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="uname" placeholder="Enter Name" value="">
              </div><br>
              <div class="form-group">
                <input type="password" class="form-control" name="upass" placeholder="Enter Password" value="">
              </div><br>
              <button type="submit" class="btn btn-primary btn-block" name="done">Insert</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

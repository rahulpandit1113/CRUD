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
      <div class="col-lg-10 m-auto">
        <table class="table table-striped table-hover  table-bordered">
          <h2 class="table-caption text-center text-warning">Display Data</h2>
          <thead class="bg-dark text-white text-center">
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
          </thead>
       <?php
         include('conn.php');
         $display = "SELECT * FROM first_crud";
         $query = mysqli_query($con,$display);
         while($result = mysqli_fetch_array($query)){

        ?>
          <tr>
            <td> <?php echo $result['id']; ?> </td>
            <td> <?php echo $result['username']; ?> </td>
            <td> <?php echo $result['password']; ?></td>
            <td> <button type="button" class="btn btn-success" name="button">
               <a class="text-white" href="update.php?id=<?php echo $result['id']; ?> ">Update</a>
              </button> </td>
              <td> <button type="button" class="btn btn-danger" name="button">
                 <a class="text-white" href="delete.php?id=<?php echo $result['id']; ?> ">Delete</a>
                </button> </td>
          </tr>
        <?php } ?>
        </table>
      </div>
    </div>
  </body>
</html>

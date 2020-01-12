<?php
include('conn.php');
$id = $_GET['id'];

$delete = "DELETE FROM first_crud WHERE id=$id";

$query =mysqli_query($con,$delete);
header('location:display.php');

 ?>

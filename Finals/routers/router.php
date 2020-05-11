<<?php
include '../databaseConnections/connect.php';
$success = false;

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password');

while($row = mysqli_fetch_array($result)) {

  $success = true;
  $user_id = $row['id'];
}

if ($success == true) {
  session_start();
  $_SESSION['admin_sid']=session_id();
  $_SESSION['user_id'] = $user_id;

  header("location: ../home-user.php");
} else {
  // code...
}


 ?>

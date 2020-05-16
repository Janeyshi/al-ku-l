<?php
include 'databaseConnections/connect.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($con, $_POST['username']); 
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
  $middleName = mysqli_real_escape_string($con, $_POST['middleName']);
  $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
  $suffix = mysqli_real_escape_string($con, $_POST['suffix']);

    // INSERT INTO DATABASE
  	$query = "INSERT INTO accounts (username, password, email, firstName, middleName, lastName,suffix)
    VALUES ('$username', '$password', '$email', '$firstName', '$middleName', '$lastName', '$suffix')";

    //ONCE REGISTRATION IS SUCCESSFUL
  	mysqli_query($con, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = '<h3 class="center-text">Registration Complete</h3>';
  	header('location: login.php');
}

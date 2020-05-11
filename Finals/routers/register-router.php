<?php
session_start();

$username = "";
$email    = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'alakshop');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $middleName = mysqli_real_escape_string($db, $_POST['middleName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $suffix = mysqli_real_escape_string($db, $_POST['suffix']);

    // INSERT INTO DATABASE
  	$query = "INSERT INTO accounts (username, password, email, firstName, middleName, lastName,suffix)
    VALUES ('$username', '$password', '$email', '$firstName', '$middleName', '$lastName', '$suffix')";

    //ONCE REGISTRATION IS SUCCESSFUL
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
}

<?php
include '../databaseConnections/connect.php';

// connect to the database

// insert address USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $id = $_SESSION['user_id'];

    // INSERT INTO DATABASE
  	$query = "UPDATE accounts SET  address ='$address' WHERE id = '$id'";

    //ONCE REGISTRATION IS SUCCESSFUL
  	mysqli_query($con, $query);
  	$_SESSION['successAddress'] = '<h3 class="center-text">Address Inserted</h3>';
  	header('location: ../cashConfirmation.php');
}
?>

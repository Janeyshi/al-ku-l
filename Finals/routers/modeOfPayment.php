<?php
include '../databaseConnections/connect.php';


// REGISTER USER
if (isset($_POST['cash'])) {
  // receive all input values from the form
  $modePayment = "cash";
  $id = $_SESSION['user_id'];

    // INSERT INTO DATABASE
  	$query = "UPDATE accounts SET  modeOfPayment ='$modePayment' WHERE id = '$id'";

    //ONCE REGISTRATION IS SUCCESSFUL
  	mysqli_query($con, $query);
  	header('location: ../cashCheckout.php');
} else if (isset($_POST['card'])) {
  // receive all input values from the form
  $modePayment = "card";
  $id = $_SESSION['user_id'];

    // INSERT INTO DATABASE
  	$query = "UPDATE accounts SET  modeOfPayment ='$modePayment' WHERE id = '$id'";

    //ONCE REGISTRATION IS SUCCESSFUL
  	mysqli_query($con, $query);
  	header('location: ../cardCheckout.php');
}
?>

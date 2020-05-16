<?php
include '../databaseConnections/connect.php';



if (isset($_POST['cash'])) {
    $mod = "cash";
    $id = $_SESSION['user_id'];

    // INSERT INTO DATABASE
    $query = "UPDATE accounts SET  modeOfPayment ='$mod' WHERE id = '$id'";

    //ONCE REGISTRATION IS SUCCESSFUL
    mysqli_query($con, $query);
  	header('location: ../cashCheckout.php');
} else if (isset($_POST['card'])) {
  $mod = "card";
  $id = $_SESSION['user_id'];

  // INSERT INTO DATABASE
  $query = "UPDATE accounts SET  modeOfPayment ='$mod' WHERE id = '$id'";

  //ONCE REGISTRATION IS SUCCESSFUL
  mysqli_query($con, $query);
  	header('location: ../cardCheckout.php');
}
?>

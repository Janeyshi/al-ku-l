<?php
include '../databaseConnections/connect.php';

if (isset($_SESSION['sess_id'])) {
  if (isset($_POST['cash'])) {
      $mod = "cash";
      $id = $_SESSION['user_id'];

      // INSERT INTO DATABASE
      $query = "UPDATE accounts SET  modeOfPayment = ? WHERE id = ?";
      $stmt = $con->prepare($query);
      $stmt->bind_param("si", $mod, $id);
      $stmt->execute();

      //ONCE REGISTRATION IS SUCCESSFUL
      mysqli_query($con, $query);
    	header('location: ../pages/cashCheckout.php');
  } else if (isset($_POST['card'])) {
    $mod = "card";
    $id = $_SESSION['user_id'];

    // INSERT INTO DATABASE
    $query = "UPDATE accounts SET  modeOfPayment = ? WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("si", $mod, $id);
    $stmt->execute();

    //ONCE REGISTRATION IS SUCCESSFUL
    mysqli_query($con, $query);
    	header('location: ../pages/cardCheckout.php');
  }
} else {
  header('location: ../routers/logout.php');
}


?>

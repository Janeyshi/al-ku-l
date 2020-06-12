<?php
include '../databaseConnections/connect.php';

if (isset($_SESSION['sess_id'])) {
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $id = $_SESSION['user_id'];

    //prepared statement
    $query = "UPDATE accounts SET  address = ? WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("si", $address, $id);
    $stmt->execute();

    //ONCE REGISTRATION IS SUCCESSFUL
  	$_SESSION['successAddress'] = '<h3 class="center-text">Address Inserted</h3>';
  	header('location: ../pages/cashConfirmation.php');
  }
} else {
  header('location: ../routers/logout.php');
}

?>

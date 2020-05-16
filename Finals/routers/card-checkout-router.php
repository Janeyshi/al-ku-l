<?php
include '../databaseConnections/connect.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $creditCardNumber = mysqli_real_escape_string($con, $_POST['creditCardNumber']);
  $expirationDate = mysqli_real_escape_string($con, $_POST['expirationDate']);
  $CCV = mysqli_real_escape_string($con, $_POST['CCV']);
  $id = $_SESSION['user_id'];

    // INSERT INTO DATABASE
    $query = "UPDATE accounts SET address ='$address', creditCardNumber = '$creditCardNumber', expirationDate = '$expirationDate', CCV = '$CCV'  WHERE id = '$id'";
    //ONCE REGISTRATION IS SUCCESSFUL
  	mysqli_query($con, $query);
  	$_SESSION['successAddress'] = '<h3 class="center-text">Information Inserted</h3>';
  	header('location: ../cardConfirmation.php');
}
?>

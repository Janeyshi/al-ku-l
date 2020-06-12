<?php
include '../databaseConnections/connect.php';

if (isset($_SESSION['sess_id'])) {
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $creditCardNumber = mysqli_real_escape_string($con, $_POST['creditCardNumber']);
    $expirationDate = mysqli_real_escape_string($con, $_POST['expirationDate']);
    $CCV = mysqli_real_escape_string($con, $_POST['CCV']);
    $id = $_SESSION['user_id'];
    $currentDate = date("m/d/Y");

    $date1 = new DateTime($expirationDate);
    $date2 = new DateTime($currentDate);


    if ($date1 < $date2) {
      echo 'Card is expired...';
      $_SESSION['expired'] = '<h3 class="center-text">Card is expired</h3>';
    	header('location: ../pages/cardCheckout.php');
    } else {
      echo 'valid';
      $query = "UPDATE accounts SET address = ?, creditCardNumber = ?, expirationDate = ?, CCV = ?  WHERE id = ?";
      $stmt = $con->prepare($query);
      $stmt->bind_param("ssssi", $address, $creditCardNumber, $expirationDate, $CCV, $id);
      $stmt->execute();
    	$_SESSION['successAddress'] = '<h3 class="center-text">Information Inserted</h3>';
    	header('location: ../pages/cardConfirmation.php');
    }
  }
} else {
  header('location: ../routers/logout.php');
}

?>

<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'alakshop');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $creditCardNumber = mysqli_real_escape_string($db, $_POST['creditCardNumber']);
  $expirationDate = mysqli_real_escape_string($db, $_POST['expirationDate']);
  $CCV = mysqli_real_escape_string($db, $_POST['CCV']);
  $id = $_SESSION['user_id'];

    // INSERT INTO DATABASE
    $query = "UPDATE accounts SET address ='$address', creditCardNumber = '$creditCardNumber', expirationDate = '$expirationDate', CCV = '$CCV'  WHERE id = '$id'";
    //ONCE REGISTRATION IS SUCCESSFUL
  	mysqli_query($db, $query);
  	$_SESSION['successAddress'] = '<h3 class="center-text">Information Inserted</h3>';
  	header('location: ../cardConfirmation.php');
}
?>

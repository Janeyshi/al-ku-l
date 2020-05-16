<?php
include '../databaseConnections/connect.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form

  $productName = mysqli_real_escape_string($con, $_POST['productName']);
  $productPrice = mysqli_real_escape_string($con, $_POST['productPrice']);
  $productImg = mysqli_real_escape_string($con, $_POST['productImg']);
  $productQty = mysqli_real_escape_string($con, $_POST['productQty']);
  $totalprice = $productPrice * $productQty;
  $user_id = $_SESSION['user_id'];
    // INSERT INTO DATABASE
  	$query = "INSERT INTO cart (productName, productPrice, productImg, productQty, originalPrice, user_id)
    VALUES ('$productName', '$totalprice', '$productImg', '$productQty', '$productPrice', $user_id)";

    //ONCE REGISTRATION IS SUCCESSFUL
    $result = mysqli_query($con, $query);
    if ( false===$result ) {
      printf("error: %s\n", mysqli_error($db));
    }
    else {
      echo 'done.';
    }
    //comment the two line below to debug
  	$_SESSION['insert_success'] = '<h3 class="center-text">Added to cart</h3>';
  	header('location: ../browse-product.php');
}

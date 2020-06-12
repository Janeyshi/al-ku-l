<?php
include '../databaseConnections/connect.php';

// REGISTER USER
include '../databaseConnections/connect.php';
if (isset($_SESSION['sess_id'])) {
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

      $query = "INSERT INTO cart (productName, productPrice, productImg, productQty, originalPrice, user_id)
      VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $con->prepare($query);
      $stmt->bind_param("sdsidi",$productName, $totalprice, $productImg, $productQty, $productPrice, $user_id);
      $result = $stmt->execute();

      //ONCE REGISTRATION IS SUCCESSFUL
      if ( false===$result ) {
        echo "false";
        printf("error: %s\n", mysqli_error($db));
      }
      else {
        echo 'done.';
      }
      //comment the two line below to debug
    	$_SESSION['insert_success'] = '<h3 class="center-text">Added to cart</h3>';
    	header('location: ../pages/browse-product.php');
  }
} else {
  header('location: ../routers/logout.php');
}
?>

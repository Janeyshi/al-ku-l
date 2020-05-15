<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'alakshop');

  $user_id = $_SESSION['user_id'];
    // SELECT INTO DATABASE
    $query = "SELECT INTO cart (productName, productPrice, productImg, productQty, originalPrice, user_id)
    VALUES ('$productName', '$totalprice', '$productImg', '$productQty', '$productPrice', $user_id)";

    //ONCE REGISTRATION IS SUCCESSFUL
    $result = mysqli_query($db, $query);
    if ( false===$result ) {
      printf("error: %s\n", mysqli_error($db));
    }
    else {
      echo 'done.';
    }
    //comment the two line below to debug
    
    header('location: ../receipt.php');

?>
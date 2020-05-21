<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'alakshop');

$user_id = $_SESSION['user_id'];
$query = "DELETE FROM cart WHERE user_id = $user_id";

$result = mysqli_query($db, $query);
    if ( false===$result ) {
      printf("error: %s\n", mysqli_error($db));
    }
    else {
      echo 'done.';
    }

$_SESSION['deleted_success'] = '<h3 class="center-text">Deleted to cart</h3>';

header("location: ../home-user.php");
?>

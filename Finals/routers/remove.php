<?php
include '../databaseConnections/connect.php';

$ctr = $_POST['ctr'];
$sum = (int)$ctr;
$i = "id";
$u = "productQty";
$btn = "productQtyBtn";
$id = "";

//SWEET CHILD OF MINEEEE
for($a = $sum;$a > 0; $a--){
  $id = $i . $a;  //this to get row id
  $upd = $u . $a; //this to get productQty
  $gg =  $btn . $a; //this btn update
  echo 'this is a '.$a.'<br />';
  if (isset($_POST[$a])) {
    $num = $_POST[$id];
    echo $num;
    session_start();
    $sql = "DELETE FROM cart WHERE id = '$num'";
    if (mysqli_query($con, $sql)) {
      	$_SESSION['message'] = '<h3 class="center-text">Item Removed from Cart</h3>';
    } else {
      $_SESSION['message'] = '<h3 class="center-text">Unable to remove item from Cart</h3>';
    }
    mysqli_close($con);
    header('location: ../view-cart.php');
  }
  else if(isset($_POST[$gg])){
    $num = $_POST[$id];
    $qty = $_POST[$upd];
    // session_start();
    $sql = "UPDATE cart SET productQty='$qty' WHERE id = '$num'"; //MALI SQL KO RAW
    if (mysqli_query($con, $sql)) {
        $_SESSION['message'] = '<h3 class="center-text">Item Updated from Cart</h3>';
    } else {
      $_SESSION['message'] = '<h3 class="center-text">Unable to Update item from Cart ' . mysqli_error($con).'</h3>';
    }
    mysqli_close($con);
    header('location: ../view-cart.php');
  }
}







 ?>

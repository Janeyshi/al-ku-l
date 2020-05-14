<?php
include '../databaseConnections/connect.php';

$ctr = $_POST['ctr'];
$convert = (int)$ctr;
$idName = "id";
$QtyName = "productQty";
$btn = "productQtyBtn";
$id = "";
$originalPriceName = "origPrice";
$user_id = $_SESSION['user_id'];

//SWEET CHILD OF MINEEEE
for($i = $convert;$i > 0; $i--){
  $idName = $idName . $i;  //this to get row id
  $qtyName = $QtyName . $i; //this to get productQty
  $btnName =  $btn . $i; //this btn update
  $origP = $originalPriceName . $i; //getting orig price
  echo 'this is a '.$i.'<br />';
  if (isset($_POST[$i])) {
    $id = $_POST[$idName];
    echo $id;
    $sql = "DELETE FROM cart WHERE id = '$id' and user_id = '$user_id'";
    if (mysqli_query($con, $sql)) {
      	$_SESSION['message'] = '<h3 class="center-text">Item Removed from Cart</h3>';
    } else {
      $_SESSION['message'] = '<h3 class="center-text">Unable to remove item from Cart</h3>';
    }
    mysqli_close($con);
    header('location: ../view-cart.php');
  }
  else if(isset($_POST[$btnName])){
    $id = $_POST[$idName];
    $qty = $_POST[$qtyName];
    $originalPrice = $_POST[$origP];
    $UpdatedPrice = $originalPrice * $qty;
    echo $origP;
    echo $UpdatedPrice;
    // session_start();
    $sql = "UPDATE cart SET productQty='$qty', productPrice ='$UpdatedPrice' WHERE id = '$id' and user_id = '$user_id'"; //MALI SQL KO RAW
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

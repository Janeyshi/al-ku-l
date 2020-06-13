<?php
include '../databaseConnections/connect.php';

$ctr = $_POST['ctr'];
$convert = (int)$ctr;
$idName = "id";
$QtyName = "productQty";
$btn = "productQtyBtn";
$id = "";
//$originalPriceName = "origPrice";
$originalItemName = "origItem";
$user_id = $_SESSION['user_id'];
echo $convert;
//SWEET CHILD OF MINEEEE
for($i = $convert;$i > 0; $i--){
  $idTagName = $idName . $i;  //this to get row id
  $qtyName = $QtyName . $i; //this to get productQty
  $btnName =  $btn . $i; //this btn update
  //$origP = $originalPriceName . $i; //getting orig price
  $origI = $originalItemName . $i;
  echo 'this is a '.$i.'<br />';
  echo 'this is the btn '.$btnName.'<br />';
  if (isset($_POST[$i])) {
    $id = $_POST[$idTagName];
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
    $id = $_POST[$idTagName];
    $qty = $_POST[$qtyName];
    $originalPrice = $_POST[$origP];
    $UpdatedPrice = $originalPrice * $qty;

    echo $id;
    echo $origI;
    echo $UpdatedPrice;
    // session_start();
    $sql = "UPDATE cart SET qty='$qty', productPrice ='$UpdatedPrice' WHERE id = '$id' and user_id = '$user_id'"; //MALI SQL KO RAW
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

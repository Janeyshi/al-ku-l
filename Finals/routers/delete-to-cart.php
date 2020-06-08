<?php
include '../databaseConnections/connect.php';
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM cart where user_id = '$user_id'";
$result = $con->query($sql);
$ctr = 0;
echo '<body onload="document.frm1.submit()">
<form action="../receipt.php" method="post" name="frm1">
<table>';
if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
    $ctr = $ctr + 1;
    echo '
    <input type="hidden" name="'.$ctr.'productImg" value="'.$row["productImg"].'">
    <input type="hidden" name="'.$ctr.'productName" value="'.$row["productName"].'">
    <input type="hidden" name="'.$ctr.'productQty" value="'.$row["productQty"].'">
    <input type="hidden" name="'.$ctr.'productPrice" value="'.$row["productPrice"].'">
    <input type="hidden" name="'.$ctr.'originalPrice" value="'.$row["originalPrice"].'">
    ';
  }
}

$user_id = $_SESSION['user_id'];
$query = "DELETE FROM cart WHERE user_id = $user_id";

$result = mysqli_query($con, $query);
    if ( false===$result ) {
      printf("error: %s\n", mysqli_error($con));
    }
$_SESSION['deleted_success'] = '<h3 class="center-text">Deleted to cart</h3>';
echo '</table>
<input type="hidden" name="ctr" value="'.$ctr.'">
</form>
</body>';
?>

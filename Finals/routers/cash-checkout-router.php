<?php
include '../databaseConnections/connect.php';

$ctr = $_POST['ctr'];
$convert = (int)$ctr;
$idName = "id";
$addressName = "address";
$btn = "addressNamebtn";
$id = "";

for($i = $convert;$i > 0; $i--){
  $idName = $idName . $i;  //this to get row id
  $addressName = $AddressName . $i; //this to get productQty
  $btnName =  $btn . $i; //this btn update
  echo 'this is a '.$i.'<br />';
  if (isset($_POST[$i])) {
    $id = $_POST[$idName];
    $address = $_POST[$addressName];
    echo $id;
    session_start();
  $sql = "INSERT INTO accounts(address) VALUES ('$address') where id = $id";
  if (mysqli_query($con, $sql)) {
      $_SESSION['message'] = '<h3 class="center-text">Address Saved!</h3>';
  } else {
    $_SESSION['message'] = '<h3 class="center-text">Unable to save address!</h3>';
  }
  mysqli_close($con);
  header('location: ../cashConfirmation.php');
}
?>

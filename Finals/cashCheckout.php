<?php
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "alakshop";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
session_start();
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {

 ?>

<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Cash Checkout Page</h3>
    <table class="table">
      <thead>
      </thead>
      <tbody>
        <?php
          if(isset($_SESSION['message'])){
            echo $_SESSION['message']; //rock n roll
            unset($_SESSION['message']);
          } else if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
          }
         ?>
        <!-- Content -->
        <h5>Cash Checkout Page</h5>
        <form action="routers/cash-checkout-router.php" method="post">
          <?php
          $sql = "SELECT address FROM  accounts where id = '$user_id = $_SESSION['user_id'];'";
          $result = $con->query($sql);
          $ctr = 0;
          if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            $ctr = $ctr + 1;
          echo '<table align="center">
            <tr>
              <td>
                Enter your Address:
              </td>
              <td>
                <input type="text" name="address'.$ctr.'" required value="'.$row["address"].'"/>
              </td>
            </tr>
            </table>
            <input type="hidden" name="ctr" value="'.$ctr.'">
            <br />
            <br />';
          }
        }else {
          echo '<h3 class="center-text">NO ITEMS IN CART!</h3>';
          $_SESSION['disable'] = "disabled";
        }
        $con->close();
         ?>
      </form>

<?php require_once('view/footer.php');}
  else {
        header("location:routers/logout.php");
        exit();
}
?>

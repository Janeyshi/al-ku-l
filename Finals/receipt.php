<?php
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "alakshop";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
session_start();
$user_id = $_SESSION['user_id'];
if (isset($_SESSION['sess_id'])) {
  $totalQty = 0;
  $totalPrice = 0;


?>

<?php
  require_once('view/header-user.php');
?>
<style type="text/css">
  .btn3d {
  position: relative;
  top: -6px;
  border: 0;
  transition: all 40ms linear;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 2px;
  margin-right: 2px;
}

.btn3d:active:focus,
.btn3d:focus:hover,
.btn3d:focus {
  -moz-outline-style: none;
  outline: medium none;
}

.btn3d:active,
.btn3d.active {
  top: 2px;
}

.btn3d.btn-white {
  color: #666666;
  box-shadow: 0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255, 255, 255, 0.10) inset, 0 8px 0 0 #f5f5f5, 0 8px 8px 1px rgba(0, 0, 0, .2);
  background-color: #fff;
}

.btn3d.btn-white:active,
.btn3d.btn-white.active {
  color: #666666;
  box-shadow: 0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255, 255, 255, 0.15) inset, 0 1px 3px 1px rgba(0, 0, 0, .1);
  background-color: #fff;
}

</style>

<?php


  $sql2 = "SELECT * FROM accounts where id = '$user_id'"; //accounts
  $result2 = $con->query($sql2);
  while($row2 = $result2->fetch_assoc()){
    $username = $row2["username"];
    $address= $row2["address"];
    $mod = $row2["modeOfPayment"];
    $firstName = $row2['firstName'];
    $lastName = $row2['lastName'];
  }

?>

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Receipt </h3>
    <h4 style="text-align: center;">Thank you</h4><hr>
    <form action="routers/delete-to-cart.php" method="post">

      <div align="center">
         <p><strong>Hi <?php echo $username ?>!<br></strong></p>
         <p>Thanks for your purchase from The Alak Shop</p>
      </div>

      <table class="table" align="center" >
        <tr>
          <th colspan="2">YOUR ORDER INFROMATION:</th>
        </tr>
        <tr>
          <th>Name</th>
          <td><?php echo $lastName.', '.$firstName;  ?></td>
        </tr>
        <tr>
          <th>Address</th>
          <td><?php echo $address ?></td>
        </tr>
        <tr>
          <th>Payment Method</th>
          <td><?php echo $mod ?></td>
        </tr>

        <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tr style="border: 1px solid black; background-color: #f2f2f2;">
              <th style="text-align:left;">Order Item</th>
              <th style="text-align:right;" width="2%">Quantity</th>
              <th style="text-align:right;" width="20%">Price</th>
            </tr>

            <?php


            $sql = "SELECT * FROM cart where user_id = '$user_id'";
            $result = $con->query($sql);
            $ctr = 0;
            if($result->num_rows > 0){

              while($row = $result->fetch_assoc()){
                $totalQty += $row["productQty"];
                $totalPrice += $row["productPrice"];
              $ctr = $ctr + 1;

              echo '
                <tr style="border: 1px solid black;">
                  <td style="border: 1px solid black;">
                    <img src="'.$row["productImg"].'" alt="rum 1" height="100px" width="100px" class="productImageBig"/>'.'<strong>'.$row["productName"].'</strong>
                  </td>
                  <td style="text-align:right;">
                    '.$row["productQty"].'
                  </td>
                  <td style="text-align:right; border: 1px solid black;">
                    Php '.$row["productPrice"].'
                    <br />
                    <input type="hidden" name="price'.$ctr.'" value="'.$row["productPrice"].'">
                    <input type="hidden" name="origPrice'.$ctr.'" value="'.$row["originalPrice"].'">
                  </td>
                </tr>
                ';

              }
            }else {
              echo '<h3 class="center-text">NO ITEMS IN CART!</h3>';
              $_SESSION['disable'] = "disabled";
            }
            $con->close();
             ?>
             <tr style="border: 1px solid black;">
                <td align="right" style="border: 1px solid black;"><strong>Total: </strong></td>

                <td align="right"><?php echo $totalQty ?></td>

                <td align="right" style="border: 1px solid black;"> Php <?php echo $totalPrice ?></td>
             </tr>
          </table>
      </table>
      <br><br>

      <div align="center">
        <button class="btn3d btn btn-white btn-lg"><span class="glyphicon glyphicon-tag"></span> DONE</button>
      </div>
        
    </form>

    <?php require_once('view/footer.php');}
      else {
        header("location:routers/logout.php");
        exit();
      }
    ?>

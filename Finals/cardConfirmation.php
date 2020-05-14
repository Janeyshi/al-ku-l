<?php
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "alakshop";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
session_start();
$user_id = $_SESSION['user_id'];
if (isset($_SESSION['sess_id'])) {

?>
<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Confirm Checkout </h3>
    <form action="routers/card-confirmation-router.php" method="post">
      <table class="table">

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
          <h5>Shopping cart</h5>
          <?php
              $sql2 = "SELECT * FROM accounts where id = '$user_id'"; //accounts
              $result2 = $con->query($sql2);
              while($row2 = $result2->fetch_assoc()){
                $address= $row2["address"]; //pota eto lang pala kulang
                $mod = $row2["modeOfPayment"];
              }

           ?>
          <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tr>
              <th style="text-align:left;">Name</th>
              <th style="text-align:right;" width="2%">Quantity</th>
              <th style="text-align:right;" width="20%">Price</th>
            </tr>
            <?php
            // $user_id = $_SESSION['user_id'];
            // $sql1 = "SELECT * FROM cart where user_id = '$user_id'"; //carts
            // //
            // // $result2 = $con->query($sql2);
            //
            // $result1 = $con->query($sql1); //pota baliktad pala kaya
            //
            // echo $user_id;
            // $ctr = 0;
            // $MOD = "";
            // $address = "";
            // if($result1->num_rows > 0){
            //   while($row2 = mysqli_fetch_array($result2)){
            //     $address = $row["address"];
            //     $MOD = $row["modeOfPayment"];
            //   }

            $sql = "SELECT * FROM cart where user_id = '$user_id'";
            $result = $con->query($sql);
            $ctr = 0;
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
              $ctr = $ctr + 1;
              echo '
                <tr>
                  <td>
                    <img src="'.$row["productImg"].'" alt="rum 1" height="100px" width="100px" class="productImageBig"/>'.'<strong>'.$row["productName"].'</strong>
                  </td>
                  <td style="text-align:right;">
                    '.$row["productQty"].'
                  </td>
                  <td style="text-align:right;">
                    Php '.$row["originalPrice"].'
                    <br />
                    <input type="hidden" name="price'.$ctr.'" value="'.$row["productPrice"].'">
                    <input type="hidden" name="origPrice'.$ctr.'" value="'.$row["originalPrice"].'">
                  </td>
                </tr>
                <tr>
                  <td align="right"><strong>Total: </strong></td>
                  <td align="right"> Php '.$row["productPrice"].'</td>
                </tr>
                <tr>
                    <td align="left"><strong>Payment Method: </strong>'.$mod.'</td>
                    <td align="left"><strong>Shipping Address: </strong>'.$address.' </td>
                </tr>

              <br />';
              // <td align="left"><strong>Payment Method: </strong>'.$row["modeOfPayment"].'</td>
              // <td align="left"><strong>Shipping Address: </strong>'.$row["address"].' </td>
              //pota kanta ni ryne ah
              }
            }else {
              echo '<h3 class="center-text">NO ITEMS IN CART!</h3>';
              $_SESSION['disable'] = "disabled";
            }
            $con->close();
             ?>
          </table>
          <br>
          <div>
         </div>

          <button class="btn btn-success"> Submit </button>
        </tbody>
      </table>
    </form>
  <?php require_once('view/footer.php'); }?>

<?php
include 'databaseConnections/connect.php';
$user_id = $_SESSION['user_id'];
if (isset($_SESSION['sess_id'])) {
  $totalQty = 0;
  $totalPrice = 0;


?>
<?php
  require_once('view/header-user.php');
 ?>
 <style type="text/css">
   .sub-main{
    margin:1px;
    float: left;
  }

  .button-two {
    text-align: center;
    cursor: pointer;
    font-size:14px;
    border-radius: 8px;
    background-color:#555555;
    color: white;
    border: none;
    padding: 20px;
    width: 120px;
    transition: all 0.5s;
  }

  .button-two span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button-two span:after {
    content: '»';
    font-size: 16px;
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .button-two:hover span {
    padding-right: 25px;
  }

  .button-two:hover span:after {
    opacity: 1;
    right: 0;
  }

 </style>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Cash Confirm Checkout </h3>
    <form action="receipt.php" method="post">
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
            <tr style="border: 1px solid black; background-color: #f2f2f2;">
              <th style="text-align:left;">Name</th>
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
             <tr>
              <td><strong>Payment Method: </strong> <?php echo$mod ?></td></th>
            </tr>
            <tr>
              <td><strong>Shipping Address: </strong><?php echo $address ?></td>
            </tr>
          </table>
          <br>
          <div>
         </div>
          <div class="sub-main">
            <button class="button-two"><span>Submit</span></button>
          </div>
        </tbody>
      </table>
    </form>
  <?php require_once('view/footer.php'); }?>

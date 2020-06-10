<?php
include '../databaseConnections/connect.php';

$user_id = $_SESSION['user_id'];
if (isset($_SESSION['sess_id'])) {
  $totalQty = 0;
  $totalPrice = 0;


?>

<?php
  require_once('../view/header-user.php');
?>

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

    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <h3 class="card-title">Receipt </h3>
    <h4 style="text-align: center;">Thank you</h4><hr>
    <form action="index.php" method="post">

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

            $ctr = $_POST['ctr'];
            $convert = (int)$ctr;
            $productImg_tagname = "productImg";
            $productName_tagname = "productName";
            $productQty_tagname = "productQty";
            $productPrice_tagname = "productPrice";
            $originalPrice_tagname = "originalPrice";

            for($i = $convert;$i > 0; $i--){
              $productImg_Name = $i . $productImg_tagname;
              $productName_Name = $i . $productName_tagname;
              $productQty_Name = $i . $productQty_tagname;
              $productPrice_Name = $i . $productPrice_tagname;
              $originalPrice_Name = $i . $originalPrice_tagname;

              $productImg = $_POST[$productImg_Name];
              $productName = $_POST[$productName_Name];
              $productQty = $_POST[$productQty_Name];
              $productPrice = $_POST[$productPrice_Name];
              $originalPrice = $_POST[$originalPrice_Name];

              echo 'Hello';

              echo '
                <tr style="border: 1px solid black;">
                  <td style="border: 1px solid black;">
                    <img src="'.$productImg.'" alt="rum 1" height="100px" width="100px" class="productImageBig"/>'.'<strong> '.$productName.'</strong>
                  </td>
                  <td style="text-align:right;">
                    '.$productQty.'
                  </td>
                  <td style="text-align:right; border: 1px solid black;">
                    Php '.$productPrice.'
                    <br />
                  </td>
                </tr>
                ';
                $totalQty = $totalQty + $productQty;
                $totalPrice = $totalPrice + $productPrice;
            }
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
        <button class="btn btn-success" >DONE</button>
      </div>
    </form>

    <?php require_once('../view/footer.php');}
      else {
        header("location:../routers/logout.php");
        exit();
      }
    ?>

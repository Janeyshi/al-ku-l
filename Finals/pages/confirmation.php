<?php
  require_once('../view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <h3 class="card-title">Checkout Page</h3>
    <form action="receipt.php" method="post">
      <table class="table">

        <tbody>
          <!-- Content -->
          <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tr>
              <th style="text-align:left;">Name</th>
              <th style="text-align:right;" width="25%">Quantity</th>
              <th style="text-align:right;" width="2%">Price</th>
            </tr>
            <tr>
              <td><img src="<?php echo $item["image"]; ?>"/> <?php echo 'Rum 1'?>
              <td style="text-align:right;"><?php echo '1'?><!-- <?php echo $item["quantity"]; ?> -->
              <td  style="text-align:right;"><?php echo '100.00'?>
            </tr>
            <tr>
              <td align="right">Total: </td>
              <td align="right"><?php echo 'totalqty' ?> <!-- <?php echo $total_quantity; ?> --></td>
              <td align="right" ><strong><?php echo 'totalPrice'?> <!-- <?php echo "$ ".number_format($total_price, 2); ?> --></strong></td>
            </tr>
          </table>
          <br>
          <div>
          <?php

            $paymentType = $_POST['paymentType'];

            switch($paymentType) {
              case 'cod';
                echo 'Cash on Delivery';
                break;
              case 'card';
                echo 'Debit/ Credit Card';
                break;
            }

          ?>

            <label>Credit Card Number </label>
            <input type="number" name="ccNum" required=""><br>
            <label>Expiration Date</label>
            <input type="number" name="ccNum" required=""><br>
            <label>CVV </label>
            <input type="number" name="ccNum" required="">




         </div>

          <button class="btn btn-success"> Submit </button>
        </tbody>
      </table>
    </form>
  <?php require_once('../view/footer.php'); ?>

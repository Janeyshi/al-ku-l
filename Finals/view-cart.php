<?php
  require_once('view/header-user.php');
 ?>

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title"><i class="fas fa-shopping-cart"></i> Shopping Cart </h3>

    <form action="confirmation.php" method="post">
      <table class="table">
        <thead>         
          <?php
            echo '<p>Order Processed at ';
            echo date('H:i, jS F Y');
            echo '</p>';
          ?>
        </thead>
        <tbody>
          <!-- Content -->
          <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tr>
              <th style="text-align:left;">Name</th>
              <th style="text-align:right;" width="25%">Quantity</th>
              <th style="text-align:right;" width="20%">Price</th>
              <th style="text-align:center;" width="10%">Remove</th>
            </tr> 
            <tr>
              <td><img src="<?php echo $item["image"]; ?>"/> <?php echo 'Rum 1'?>
              <td style="text-align:right;"><?php echo '1'?><!-- <?php echo $item["quantity"]; ?> -->
              <td  style="text-align:right;"><?php echo '100.00'?>
              <td style="text-align:center;"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            <tr>
              <td align="right">Total: </td>
              <td align="right"><?php echo 'totalqty' ?> <!-- <?php echo $total_quantity; ?> --></td>
              <td align="right" ><strong><?php echo 'totalPrice'?> <!-- <?php echo "$ ".number_format($total_price, 2); ?> --></strong></td>
            </tr>
          </table>

                   
        </tbody>
      </table>
      <button class="btn btn-success">Checkout </button>
    </form>

  <?php require_once('view/footer.php'); ?>

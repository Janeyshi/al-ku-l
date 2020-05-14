<?php
session_start();
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {

 ?>

<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Receipt </h3>
    <form action="process-order.php" method="post">
      <table class="table">
        <?php
          echo "Payment Method: ".$paymentType.'<br/>';
          echo 'Shipping Address: ';

        ?>
        
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
        </tbody>
      </table>
    </form>
    <?php require_once('view/footer.php');}
      else {
        header("location:routers/logout.php");
        exit();
      }
    ?>

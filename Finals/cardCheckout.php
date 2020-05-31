<?php
  include 'databaseConnections/connect.php';
  if (isset($_SESSION['sess_id'])) {
    require_once('view/header-user.php');
  } else {
    require_once('view/header.php');
  }
 ?>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 <link rel="stylesheet" type="text/css" href="CSS/style.css">
 <h3 class="card-title">Card Checkout Page</h3>
  <form method="post" action="routers/card-checkout-router.php">
       <h5>Payment Details</h5>
       <?php
       if(isset($_SESSION['expired'])){
         echo $_SESSION['expired'];
         unset($_SESSION['expired']);
       }
       $id = $_SESSION['user_id'];
       $address;
       $empty = "";
       $result = mysqli_query($con, "SELECT * FROM accounts WHERE id =".$_SESSION['user_id']."");
       while($row = mysqli_fetch_array($result)){
         $address = $row['address'];
         $creditCardNumber = $row['creditCardNumber'];
         $expirationDate = $row['expirationDate'];
         $CCV = $row['CCV'];
       }
       ?>
    <table align="center">
      <!-- ADDRESS -->
      <tr>
        <td>
          <label>Enter your Address:</label>
        </td>
        <td>
          <input type="text" name="address" value="<?php

          if($address == $empty){
            echo $empty;
          }else {
            echo $address;
          }
          ?>" required/>
        </td>
      </tr>

      <!-- CC NUMBER -->
      <tr>
        <td>
          <label>Enter your Credit Card Number:</label>
        </td>
        <td>
          <input type="text" name="creditCardNumber" value="<?php

          if($creditCardNumber == $empty){
            echo $empty;
          }else {
            echo $creditCardNumber;
          }
          ?>" required/>
        </td>
      </tr>

      <!-- EXPIRATION OF CC -->
      <tr>
        <td>
          <label>Enter the Expiration date of your Credit Card:</label>
        </td>
        <td>
          <input type="date" name="expirationDate" value="<?php

          if($expirationDate == $empty){
            echo $empty;
          }else {
            echo $expirationDate;
          }
          ?>" required/>
        </td>
      </tr>

      <!-- CVV NUMBER -->
      <tr>
        <td>
          <label>Enter the CVV number of your Credit Card:</label>
        </td>
        <td>
          <input type="text" name="CCV" value="<?php

          if($CCV == $empty){
            echo $empty;
          }else {
            echo $CCV;
          }
          ?>" required/>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" class="btn btn-success" name="reg_user">Confirm Checkout</button>
          <a href="view-cart.php"><input type="button" value="Back" class="btn btn-secondary"></a>
        </td>
      </tr>
    </table>
  </form>

<?php require_once('view/footer.php');
?>

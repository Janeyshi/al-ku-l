<?php
  session_start();
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
    <table align="center">
      <!-- ADDRESS -->
      <tr>
        <td>
          <label>Enter your Address:</label>
        </td>
        <td>
          <input type="text" name="address" required/>
        </td>
      </tr>

      <!-- CC NUMBER -->
      <tr>
        <td>
          <label>Enter your Credit Card Number:</label>
        </td>
        <td>
          <input type="text" name="creditCardNumber" required/>
        </td>
      </tr>

      <!-- EXPIRATION OF CC -->
      <tr>
        <td>
          <label>Enter the Expiration date of your Credit Card:</label>
        </td>
        <td>
          <input type="text" name="expirationDate" required/>
        </td>
      </tr>

      <!-- CVV NUMBER -->
      <tr>
        <td>
          <label>Enter the CVV number of your Credit Card:</label>
        </td>
        <td>
          <input type="text" name="CCV" required/>
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
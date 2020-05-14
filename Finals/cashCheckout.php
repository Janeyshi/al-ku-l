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
 <h3 class="card-title">Cash Checkout Page</h3>
  <form method="post" action="routers/cash-checkout-router.php">
       <h5>Cash Checkout Page</h5>
    <table align="center">
      <!-- USERNAME -->
      <tr>
        <td>
          <label>  Enter your Address:</label>
        </td>
        <td>
          <input type="text" name="address" required/>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" class="btn btn-success" name="reg_user">Confirm Checkout</button>
        </td>
      </tr>
    </table>
  </form>

<?php require_once('view/footer.php');
?>

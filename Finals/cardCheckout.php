<?php
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "alakshop";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
session_start();
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {

 ?>

<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Card Checkout Page</h3>
    <form action="cashConfirmation.php" method="post">
      <table class="table" align = "center">
        <thead>
        </thead>
        <tbody>
          <tr>
            <th colspan="2">
              <h3 class="center-text">Card Checkout Page</h3>
            </th>
          </tr>
        <tr>
          <td>
              <label for="Card">Debit/Credit Card</label><br>
          </td>
          <td>
            <label for="ccNumber">Credit Card Number</label>
            <input type="ccNumber" name="ccNumber" id="ccNumber" required>
          </td>
          <td>
            <label for="expDate">Expiration Date</label>
            <input type="expDate" name="expDate" id="expDate" required>
          </td>
          <td>
            <label for="cvv">CVV</label>
            <input type="cvv" name="cvv" id="cvv" required>
          </td>
          <td>
            <label for="address">Address</label>
            <input type="address" name="address" id="address" required>
          </td>
          <td>
            <button class="btn btn-success"> Confirm Checkout </button>
          </td>
        </tr>
      </form>
    </tbody>
  </table>
  <?php require_once('view/footer.php');}
    else {
      header("location:routers/logout.php");
      exit();
    }
  ?>

<?php
  if (isset($_SESSION['sess_id'])) {
    require_once('../view/header-user.php');
  } else {
    require_once('../view/header.php');
  }
 ?>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <h3 class="card-title">Product not found</h3>
    <form action="browse-product.php" method="post" name="form1">
      <table class="table">
        <thead>
          <h1 class="center-text"> Product NOT Found <i class="fas fa-search"></i></h1>
        </thead>
        <tbody>
          <center>
            <img src="../images/search-not-found.png" alt="error 404" height="400px" width="400px" />
          </center>
            <center><button type="submit" class="btn btn-warning" name="'.$product_id.'"> Click me to go back </button></center>
        </tbody>
      </table>
    </form>
  <?php require_once('../view/footer.php'); ?>

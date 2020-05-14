<?php
  session_start();
  include("model/product.php");
  if (isset($_SESSION['sess_id'])) {
    require_once('view/header-user.php');
  } else {
    require_once('view/header.php');
  }
 ?>

<?php
  require_once('view/header.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Home Page</h3>
    <form action="process-order.php" method="post">
      <table class="table">
        <thead>
          <h1 class="center-text"> Hello World </h1>
        </thead>
        <tbody>
          <!-- Content -->
          <h5>Home Page</h5>

        </tbody>
      </table>
    </form>
  <?php require_once('view/footer.php'); ?>

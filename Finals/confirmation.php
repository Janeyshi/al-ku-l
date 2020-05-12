<?php
session_start();
//to ensure guest feature only for guest
if (isset($_SESSION['guest'])) {
  header("location:index.php");
  exit();
} else {
 ?>

<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">confirmation Page</h3>
    <form action="receipt.php" method="post">
      <table class="table">
        <thead>
          <h1 class="center-text"> Hello World </h1>
        </thead>
        <tbody>
          <!-- Content -->
          <h5>confirmation Page</h5>
          <button class="btn btn-success"> Go </button>
        </tbody>
      </table>
    </form>
  <?php require_once('view/footer.php'); }?>

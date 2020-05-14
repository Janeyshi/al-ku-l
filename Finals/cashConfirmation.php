<?php
session_start();
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {

 ?>

<?php
  require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title"> Cash Confirmation Page</h3>
    <form action="receipt.php" method="post">
      <table class="table">
        <thead>
          <h1 class="center-text"> Hello World </h1>
        </thead>
        <tbody>
          <?php
              if(isset($_SESSION['successAddress'])){
                echo $_SESSION['successAddress'];
                unset($_SESSION['successAddress']);
              }
           ?>
          <!-- Content -->
          <h5>Cash Confirmation Page</h5>
          <button class="btn btn-success"> Go </button>
        </tbody>
      </table>
    </form>
    <?php require_once('view/footer.php');}
      else {
        header("routers/logout.php");
        exit();
      }
    ?>

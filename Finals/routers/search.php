<?php
  if (isset($_SESSION['sess_id'])) {
    require_once('../view/header-user.php');
  } else {
    require_once('../view/header.php');
  }
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Search Page</h3>
    <form action="../single-product-page.php" method="post" name="form1">
      <table class="table">
        <thead>
          <h1 class="center-text"> Product Found <i class="fas fa-search"></i></h1>
        </thead>
        <tbody>
          <!-- Content -->
          <?php
          include '../databaseConnections/connect.php';

          $success = false;
          $search = $_POST['searchName'];

          $result = mysqli_query($con, "SELECT * FROM products WHERE name like '%$search%'");
          while($row = mysqli_fetch_array($result))
          {
          	$success = true;
          	$product_id = $row['id'];
          }

          if ($success == true) {
            echo '<center>
              <img src="../images/found.png" alt="error 404" height="400px" width="400px" />
            </center>';
            echo '<input type="hidden" name="test" value = '.$product_id.'>';
            echo '<center><button type="submit" class="btn btn-warning" name="'.$product_id.'"> Click me to proceed </button></center>';
          } else {
            header("location: ../notFound.php");
          }
           ?>
        </tbody>
      </table>
    </form>
  <?php require_once('../view/footer.php'); ?>

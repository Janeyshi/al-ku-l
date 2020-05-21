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
            <h5 class="center-text"> Click the button to proceed </h5>
        </thead>
        <tbody>
          <!-- Content -->
          <?php
          include '../databaseConnections/connect.php';

          $success = false;
          $search = $_POST['searchName'];

          $result = mysqli_query($con, "SELECT * FROM products WHERE name like '%$search%'");
          if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              $product_id = $row['id'];
              $product_name = $row['name'];
              $product_img = $row['imgSrc'];
              echo '<center>
              <br/><br/><br/>
              <img src="../'.$product_img.'" alt="error 404" height="400px" width="400px" />
              </center>
              <input type="hidden" name="test" value = '.$product_id.'>
              <br/>
              <center><button type="submit" class="btn btn-warning" name="'.$product_id.'"> '.$product_name.' </button></center>
              <br />';
            }
            echo '<br /><br /><br /><center><a href="../browse-product.php"><input type="button" class="btn btn-secondary" value=" GO BACK "></a></center>';
          } else {
            header("location: ../notFound.php");
          }

           ?>
        </tbody>
      </table>
    </form>
  <?php require_once('../view/footer.php'); ?>

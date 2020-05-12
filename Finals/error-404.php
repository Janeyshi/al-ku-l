<?php
  if (isset($_SESSION['sess_id'])) {
    require_once('view/header-user.php');
  } else {
    require_once('view/header.php');
  }
 ?>
    <div>
      <link rel="stylesheet" type="text/css" href="CSS/style.css">
      <h3 class="card-title">Error 404 Page not found</h3>
      <form action="index.php" method="post" name="form1">
        <table class="table">
          <thead>
            <h1 class="center-text">Error 404 Page NOT Found <i class="fas fa-search"></i></h1>
          </thead>
          <tbody>
              <center>
                <img src="images/error404.jpg" alt="error 404" height="400px" width="400px" />
              </center>
              <center><button type="submit" class="btn btn-warning" name="'.$product_id.'"> Click me to go to the home <i class="fas fa-home"></i> page </button></center>
          </tbody>
        </table>
      </form>
    </div>
  <?php require_once('view/footer.php'); ?>

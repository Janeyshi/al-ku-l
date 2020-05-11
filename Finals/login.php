<?php
session_start();

if (isset($_SESSION['customer_id'])) {
  header("location:home-user.php");
  exit();
} else {
}
 ?>

<?php
  require_once('view/header.php');
 ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Login Page</h3>
    <form action="routers/router.php" method="post">

      <table class="table">
        <thead>
          <h1 class="center-text"> Login Page </h1>
        </thead>
        <tbody>

          <!-- USERNAME! -->
          <table align="center">
            <tr>
              <td>
                <i class="fas fa-user"></i>
              </td>
              <td>
                  <input name="username" id="username" placeholder="Username" type="text" required>
              </td>
            </tr>
            <tr>
              <!-- PASSWORD -->
              <td>
                <i class="fas fa-lock"></i>
              </td>
              <td>
                  <input name="password" id="password" placeholder="Password" type="password" required>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="submit" value="Login" class="btn btn-success">
                <a href="register.php"><input type="register" value="Register" class="btn btn-success"></a>
              </td>
            </tr>
          </table>
        </tbody>
      </table>
    </form>

  <?php require_once('view/footer.php'); ?>

    <!-- modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><span class="center-text">Register</span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            LAMAN
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Register</button>
          </div>
        </div>
      </div>
  </div>
  <?php require_once('view/footer.php'); ?>

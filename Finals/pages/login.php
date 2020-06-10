<?php
session_start();

if (isset($_SESSION['sess_id'])) {
  header("location:index.php");
  exit();
} else {
 ?>

<?php
  require_once('../view/header.php');
 ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <h3 class="card-title">Login Page</h3>
    <form action="../routers/router.php" method="post">

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
              <td></td>
              <td>
                <input type="submit" value="Login" class="btn btn-success">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <a href="register.php"><h5 class="btn btn-danger">Register</h5></a>
              </td>
            </tr>
          </table>
          <?php
            if(isset($_SESSION['error'])){
              echo $_SESSION['error'];
              unset($_SESSION['error']);
            }else if(isset($_SESSION['success'])){
              echo $_SESSION['success'];
              unset($_SESSION['success']);
            }
           ?>
        </tbody>
      </table>
    </form>
  <?php require_once('../view/footer.php');
    }
  ?>

<<?php
session_start();

if (isset($_SESSION['customer_id'])) {
  header("location:index.php");
  exit();
} else {
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
          <!-- Content -->
          <!-- USERNAME! -->
          <div>
            <label>
              <i class="fas fa-user"></i>
            </label>
            <input name="username" id="username" placeholder="Username" type="text" required>
          </div>
          <!-- PASSWORD -->
          <div>
            <label for="password">
              <i class="fas fa-lock"></i>
            </label>
            <input name="password" id="password" placeholder="Password" type="password" required>
          </div>
          <!-- LOGIN -->
          <div>
            <input type="submit" value="Login">
          </div>
          <!-- REGISTER -->
          <div>
            <button>Register</button>
          </div>
        </tbody>
      </table>
    </form>
  <?php require_once('view/footer.php'); ?>

<<?php
}
 ?>

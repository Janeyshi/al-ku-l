<?php include('routers/register-router.php') ?>

<?php
  require_once('view/header.php');
 ?>

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 <link rel="stylesheet" type="text/css" href="CSS/style.css">
 <h3 class="card-title">Login Page</h3>

  <form method="post" action="register.php">
    <!-- USERNAME -->
  	<div>
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>

    <!-- PASSWORD -->
    <div>
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>

    <!-- EMAIL -->
  	<div>
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>

    <!-- FIRST NAME -->
    <div>
      <label>First Name</label>
      <input type="text" name="firstName">
    </div>

    <!-- MIDDLE NAME -->
    <div>
      <label>Middle Name</label>
      <input type="text" name="middleName">
    </div>

    <!-- LAST NAME -->
    <div>
      <label>Last Name</label>
      <input type="text" name="lastName">
    </div>

    <!-- SUFFIX -->
    <div>
      <label>Suffix</label>
      <input type="text" name="suffix">
    </div>

  	<div class="input-group">
  	  <button type="submit" class="btn btn-success" name="reg_user">Register</button>
  	</div>
  </form>

<?php require_once('view/footer.php'); ?>

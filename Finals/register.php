<?php
//to ensure guest feature only for guest
if (isset($_SESSION['sess_id'])) {
  header("location:browse-products-user.php");
  exit();
} else {
 ?>

<?php include('routers/register-router.php') ?>

<?php
  require_once('view/header.php');
 ?>

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 <link rel="stylesheet" type="text/css" href="CSS/style.css">
 <h3 class="card-title">Login Page</h3>

  <form method="post" action="register.php">

    <table align="center">
      <!-- USERNAME -->
      <tr>
        <td>
          <label>Username</label>
        </td>
        <td>
          <input type="text" name="username">
        </td>
      </tr>

      <!-- PASSWORD -->
      <tr>
        <td>
           <label>Password</label>
        </td>
        <td>
          <input type="password" name="password">
        </td>
      </tr>

      <!-- EMAIL -->
      <tr>
        <td>
          <label>Email</label>
        </td>
        <td>
           <input type="email" name="email">
        </td>
      </tr>

      <!-- FIRST NAME -->
      <tr>
        <td>
            <label>First Name</label>
        </td>
        <td>
            <input type="text" name="firstName">
        </td>
      </tr>

      <!-- MIDDLE NAME -->
      <tr>
        <td>
          <label>Middle Name</label>
        </td>
        <td>
          <input type="text" name="middleName">
        </td>
      </tr>

        <!-- LAST NAME -->
      <tr>
        <td>
          <label>Last Name</label>
        </td>
        <td>
          <input type="text" name="lastName">
        </td>
      </tr>

      <!-- SUFFIX -->
      <tr>
        <td>
          <label>Suffix</label>
        </td>
        <td>
          <input type="text" name="suffix">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" class="btn btn-success" name="reg_user">Register</button>
        </td>
      </tr>
    </table>
  </form>

<?php require_once('view/footer.php');
}
?>

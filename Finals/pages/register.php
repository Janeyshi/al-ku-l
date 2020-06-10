<?php
session_start();
 ?>
<?php
  require_once('../view/header.php');

 ?>

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 <link rel="stylesheet" type="text/css" href="../CSS/style.css">
 <h3 class="card-title">Register Page</h3>

  <form method="post" action="../routers/register-router.php">
    <?php

    if(isset($_SESSION['exist'])){
      echo $_SESSION['exist'];
      unset($_SESSION['exist']);
    } else if(isset($_SESSION['upper'])){
        echo $_SESSION['upper'];
        unset($_SESSION['upper']);
    } else if(isset($_SESSION['lower'])){
        echo $_SESSION['lower'];
        unset($_SESSION['lower']);
    } else if(isset($_SESSION['number'])){
        echo $_SESSION['number'];
        unset($_SESSION['number']);
    } else if (isset($_SESSION['email'])){
        echo $_SESSION['email'];
        unset($_SESSION['email']);
    } else if (isset($_SESSION['confirmPass'])){
        echo $_SESSION['confirmPass'];
        unset($_SESSION['confirmPass']);
    }
   ?>
    <table align="center">
      <!-- USERNAME -->
      <tr>
        <td>
          <label>Username</label>
        </td>
        <td>
          <input type="text" name="username" required>
        </td>
      </tr>

      <!-- PASSWORD -->
      <tr>
        <td>
           <label>Password</label>
        </td>
        <td>
          <input type="password" name="password" required>
        </td>
      </tr>

      <!-- confirm password -->
      <tr>
        <td>
           <label>Confirm Password</label>
        </td>
        <td>
          <input type="password" name="confirmpassword" required>
        </td>
      </tr>

      <!-- EMAIL -->
      <tr>
        <td>
          <label>Email</label>
        </td>
        <td>
           <input type="email" name="email" required>
        </td>
      </tr>

      <!-- FIRST NAME -->
      <tr>
        <td>
            <label>First Name</label>
        </td>
        <td>
            <input type="text" name="firstName" required>
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
          <input type="text" name="lastName" required>
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
      <tr>
        <td colspan="2">
          <p style="color:red; font-size:12px">
            note: Username and Email must not be registered in the system to register.
            <br />
            Password must coantain at least 1 number, uppercase, and lowercase letters.
          </p>
        </td>
      </tr>
    </table>
  </form>

<?php require_once('../view/footer.php');
?>

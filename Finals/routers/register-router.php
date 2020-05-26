<?php
include '../databaseConnections/connect.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
  $middleName = mysqli_real_escape_string($con, $_POST['middleName']);
  $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
  $suffix = mysqli_real_escape_string($con, $_POST['suffix']);
  echo 'password: '.$password;
  if (strtolower($password) != $password)
  {
    if (strtoupper($password) != $password)
    {
      if (preg_match('~[0-9]+~', $password)) {
        $result = mysqli_query($con, "SELECT * FROM accounts");
        while($row = mysqli_fetch_array($result)){
          if(strcmp($row['username'], $username) == 0 || strcmp($row['email'], $email) == 0){
            echo "User exist";
            	$_SESSION['exist'] = '<h3 class="center-text"> USER ALREADY EXIST!!! </h3>';
              header('location: ../register.php');

          } else if($success == 1) {
              echo 'good';
              $query = "INSERT INTO accounts (username, password, email, firstName, middleName, lastName, suffix) VALUES (?, ?, ?, ?, ?, ?, ?)";
              $stmt = $con->prepare($query);
              $stmt->bind_param("sssssss", $username, $password, $email, $firstName, $middleName, $lastName, $suffix);
              $stmt->execute();
              $_SESSION['username'] = $username;
              $_SESSION['success'] = '<h3 class="center-text">Registration Complete</h3>';
              header('location: ../login.php');
          }
        }
      } else {
          echo "<br />MUST HAVE A NUMBER";
          $_SESSION['number'] = '<h3 class="center-text"> PASSWORD MUST HAVE ONE NUMBER!!! </h3>';
          $success = false;
          header('location: ../register.php');
      }

    } else {
        echo "<br />MUST CONTAIN LOWERCASE LETTERS";
        $_SESSION['lower'] = '<h3 class="center-text"> PASSWORD MUST CONTAIN LOWERCASE LETTERS!!! </h3>';
        header('location: ../register.php');
    }
  } else {
      echo "<br />MUST CONTAIN UPPERCASE LETTERS";
      $_SESSION['upper'] = '<h3 class="center-text"> PASSWORD MUST CONTAIN UPPERCASE LETTERS!!! </h3>';
      header('location: ../register.php');
  }
}
?>

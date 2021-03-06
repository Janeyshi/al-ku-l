<?php
  include '../databaseConnections/connect.php';
  if($_SESSION['sess_id']== session_id())
  {
    require_once('../view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <h3 class="card-title">Profile Page <i class="fas fa-users"></i></h3>
      <table class="table">
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <thead>
        </thead>
        <tbody>
          <!-- Content -->
              <?php
                $result = mysqli_query($con, "SELECT * FROM accounts WHERE id =".$_SESSION['user_id']."");
                while($row = mysqli_fetch_array($result)){
                  echo '<table cellspacing="10" cellpadding="10" border="1px solid black" width=100%>';
                  echo '  <tr>';
                  echo '    <th width=20%>';
                  echo '      Username: ';
                  echo '    </th>';
                  echo '    <td>';
                  echo '      <span>'.$row['username'].'</span>';
                  echo '    </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '   <th width=20%>';
                  echo '      First Name: ';
                  echo '   </th>';
                  echo '   <td>';
                  echo '     <span>'.$row['firstName'].'</span>';
                  echo '   </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '    <th width=20%>';
                  echo '      Middle Name: ';
                  echo '    </th>';
                  echo '    <td>';
                  echo '      <span>'.$row['middleName'].'</span>';
                  echo '    </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '   <th width=20%>';
                  echo '      Last Name: ';
                  echo '   </th>';
                  echo '   <td>';
                  echo '     <span>'.$row['lastName'].'</span>';
                  echo '   </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '    <th width=20%>';
                  echo '      Suffix: ';
                  echo '    </th>';
                  echo '    <td>';
                  echo '      <span>'.$row['suffix'].'</span>';
                  echo '    </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '   <th width=20%>';
                  echo '      Email: ';
                  echo '   </th>';
                  echo '   <td>';
                  echo '     <span>'.$row['email'].'</span>';
                  echo '   </td>';
                  echo '  </tr>';
                  echo '</table>';
                }
               ?>
        </tbody>
      </table>
  <?php
    require_once('../view/footer.php');
  }
  else {
    if ($_SESSION['sess_id']==session_id()) {
      header("location:profile.php");
    } else {
      header("location:../routers/logout.php");
  }
}
  ?>

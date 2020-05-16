<?php
  include 'databaseConnections/connect.php';
  if($_SESSION['sess_id']== session_id())
	{
    require_once('view/header-user.php');
 ?>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <h3 class="card-title">Profile Page <i class="fas fa-users"></i></h3>
    <form action="process-order.php" method="post">
      <table class="table">
        <thead>
        </thead>
        <tbody>
          <!-- Content -->
              <?php
                $result = mysqli_query($con, "SELECT * FROM accounts WHERE id =".$_SESSION['user_id']."");
                while($row = mysqli_fetch_array($result)){
                  echo '<table align="center" cellspacing="3" cellpadding="3">';
                  echo '  <tr>';
                  echo '    <th>';
                  echo '      Username: ';
                  echo '    </th>';
                  echo '    <td>';
                  echo '      <span>'.$row['username'].'</span>';
                  echo '    </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '   <th>';
                  echo '      First Name: ';
                  echo '   </th>';
                  echo '   <td>';
                  echo '     <span>'.$row['firstName'].'</span>';
                  echo '   </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '    <th>';
                  echo '      Middle Name: ';
                  echo '    </th>';
                  echo '    <td>';
                  echo '      <span>'.$row['middleName'].'</span>';
                  echo '    </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '   <th>';
                  echo '      Last Name: ';
                  echo '   </th>';
                  echo '   <td>';
                  echo '     <span>'.$row['lastName'].'</span>';
                  echo '   </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '    <th>';
                  echo '      Suffix: ';
                  echo '    </th>';
                  echo '    <td>';
                  echo '      <span>'.$row['suffix'].'</span>';
                  echo '    </td>';
                  echo '  </tr>';
                  echo '  <tr>';
                  echo '   <th>';
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
    </form>
  <?php
    require_once('view/footer.php');
  }
	else {
		if ($_SESSION['sess_id']==session_id()) {
			header("location:profile.php");
		} else {
			header("location:routers/logout.php");
	}
}
  ?>

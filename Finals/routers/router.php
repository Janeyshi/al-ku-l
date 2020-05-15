<?php
include '../databaseConnections/connect.php';
include '../model/account.php';
$success=false;
$user = new Account();
$user->instantiate();

$user->__set('username', $_POST['username']);
$user->__set('password', $_POST['password']);

$result = mysqli_query($con, "SELECT * FROM accounts WHERE username='$user->username' AND password='$user->password'");
while($row = mysqli_fetch_array($result))
{
	$success = true;
	$user_id = $row['id'];
	$user_name = $row['username'];
}

if ($success == true) {
	session_start();
	$_SESSION['sess_id']=session_id();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['user_name'] = $user_name;
	header("location: ../home-user.php");
} else {
	session_start();
	$user_id = "Guest";
	$_SESSION['error'] = '<h3 class="center-text">Invalid username or password!!!</h3>';
	$_SESSION['user_id'] = $user_id;
	header("location: ../login.php");
}
 ?>

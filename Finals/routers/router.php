<?php
include '../databaseConnections/connect.php';
include '../model/account.php';
$success=false;
$user = new Account();
$user->instantiate();

$user->__set('username', $_POST['username']);
$user->__set('password', $_POST['password']);

$password_encrypted ="";
echo '<br /> '.$user->password;
$result = mysqli_query($con, "SELECT * FROM accounts WHERE username ='$user->username'");
while($row = mysqli_fetch_array($result)){
	$password_encrypted = $row['password'];
}
echo '<br /> '.$password_encrypted;

if (password_verify($user->password, $password_encrypted)) {
    // Success!
    echo '<br /> Password Matches';
		$success = true;
}else {
    // Invalid credentials
    echo '<br /> Password Mismatch';
		$success=false;
}

$result = mysqli_query($con, "SELECT * FROM accounts WHERE username ='$user->username' AND password='$password_encrypted'");
while($row = mysqli_fetch_array($result))
{
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

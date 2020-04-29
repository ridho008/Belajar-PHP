<?php 
session_start();

if(isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}

require 'functions.php';
if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	// cek username
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if( mysqli_num_rows($result) === 1 ) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"]) ) {
			// cek session
			$_SESSION["login"] = true;

			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Halaman Login</h1>

	<?php if(isset($error) ) : ?>
		<p style="color:red">username/password salah</p>
	<?php endif; ?>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>
</body>
</html>
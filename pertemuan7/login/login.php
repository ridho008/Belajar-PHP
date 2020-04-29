<?php 
// apakah tombol submit sudah ditekan
if(isset($_POST["submit"]) ) {
// cek usernamae & password
	if( $_POST["username"] == "admin" && $_POST["password"] == "123") {
// jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
	} else {
// jika salah, tampilkan pesan error
		$error = true;
		}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php if(isset($error)) : ?>
<p style="color:red;">username / password salah</p>
<?php endif; ?>

<ul>
<form action="" method="post">
	<li>
		<label for="username">Usernama :</label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">Password :</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
</form>
</ul>


</body>
</html>
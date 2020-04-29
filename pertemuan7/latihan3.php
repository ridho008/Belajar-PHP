<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POST</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php if( isset($_POST["nama"])) : ?>

<h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
	<label for="nama">Nama</label>
	<input type="text" name="nama" id="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
</form>


</body>
</html>